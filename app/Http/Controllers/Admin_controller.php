<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\technician;
use App\Models\category;
use Illuminate\Support\Facades\DB;
use App\Models\complaints;
use App\Models\customer;
use App\Models\bookings;
use App\Models\payments;

class Admin_controller extends Controller
{
    public function admin_login()
    {
    	return view('Admin/admin_login');
    }

    public function admin_register()
    {
    	return view('Admin/admin_register');
    }

    public function admin_register_insert(Request $req)
    {	
    	$data=new admin();
    	$data->admin_name=$req->input('name');
    	$data->admin_email=$req->input('email');
    	$data->admin_phone=$req->input('phone');
    	$password=$data->admin_password=$req->input('password');
    	$confirm_pass=$req->input('confirm_pass');
    	if ($password==$confirm_pass)
    		
    	{
    		$count=admin::where([['admin_email',$req->input('email')]])->count();

    		if ($count>0) 
    		{
    			return redirect('/admin_register')->with('fail','Email Already Registered');
    		}
    		else
    		{
	    		$data->save();
	    		return redirect('Admin/admin_login')->with('pass','Registered Successfully');
    		}
    	}
    	else
    	{
    		return redirect('/admin_register')->with('fail','Mismatch Password Try Again');
    	}
    }

    public function admin_login_insert(Request $req)
    {
    	$req->session()->put('admin_mail',$req->input('email'));
    	$count=admin::where([['admin_email',$req->input('email')],['admin_password',$req->input('password')]])->count();
    	if ($count==1) 
    	{
    		return redirect ('/admin_home')->with('pass','Login Successfully');
    	}
    	else
    	{
    		return redirect('/admin_login')->with('fail','Email or Password Wrong Try Again');
    	}
    }
    public function admin_home()
    {
    	if (session()->has('admin_mail')) 
    	{
    		$data=admin::where([['admin_email',session('admin_mail')]])->first();
    		return view ('Admin/admin_home',compact('data'));
    	}
    	else
    	{
    		return redirect ('admin_login');
    	}
    }

    public function admin_profile_update(Request $req)
   	 {
	    $data=admin::where([['admin_email',session('admin_mail')]])->first();
	    $data->admin_name=$req->input('name');
	    $data->admin_phone=$req->input('phone');
	    $data->admin_password=$req->input('password');
	    $data->update();
	    return redirect('/admin_home')->with('pass','Updated Successfully');
     }

     public function add_technician()
     {
     	if (session()->has('admin_mail')) 
     	{
            $data=category::all();
     		return view('Admin/add_technician',compact('data'));
     	}
     	else
     	{
     		return redirect('admin_login');
     	}
     }

     public function add_insert_technician(Request $req)
     {
     	$data=new technician();
     	$data->tech_name=$req->input('name');
     	$email=$data->tech_email=$req->input('email');
     	$data->tech_phone=$req->input('phone');
     	$data->tech_cat_id=$req->input('tech_cat_id');
      $data->type='Admin';
     	$data->location=$req->input('location');
      $data->tech_status='Approved';
     	
        if ($req->hasfile('profile')) 
        {
            $file=$req->file('profile');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('Admin/profile',$filename);
            $data->profile=$filename;
        }
        if ($req->hasfile('licence')) 
        {
          $file1=$req->file('licence');
          $extension1=$file->getClientOriginalExtension();
          $filename1=time().'.'.$extension1;
          $file1->move('Admin/licence',$filename1);
          $data->licence=$filename1;  
        }

     	$pass=$data->password=$req->input('password');
     	$confirm_pass=$req->input('confirm_pass');
        if ($pass==$confirm_pass) 
        {
           $count=technician::where([['tech_email',$email]])->count();
           if ($count==0) 
           {
           
           $data->save();
           return redirect('add_technician')->with('pass',"Technician Added Successfully");
           }
           else
           {
            return redirect('add_technician')->with('fail',"Email already exist try with different email");
           }
        }
        else
        {
           return redirect('add_technician')->with('fail',"Password does not match");
        }
     }

     public function manage_technician()
     {
        //$data=technician::all();
        $data=DB::table('categories')->join('technicians','technicians.tech_cat_id','=','categories.cat_id')->get();   
        return view('Admin/technician_manage',compact('data'));
     }

     public function edit_admin_tech($id)
     {
        if (session()->has('admin_mail')) 
        {
            $data=technician::where([['tech_id',$id]])->first();
            $category=DB::table('categories')->join('technicians','technicians.tech_cat_id','=','categories.cat_id')->where([['technicians.tech_id',$id]])->first();
            $categories=category::all();
            return view('Admin/edit_tech',compact('data','categories','category'));
        }
        else
        {
            return redirect ('admin_login');
        }
       
     }

     public function update_admin_tech(Request $req,$id)
     {
        $tech=technician::where([['tech_id',$id]])->first();
        $tech->tech_name=$req->input('name');
        $tech->tech_phone=$req->input('phone');
        $tech->tech_cat_id=$req->input('tech_cat');
        $tech->location=$req->input('location');
        $tech->password=$req->input('password');

        if ($req->hasfile('profile')) 
        {
            $file=$req->file('profile');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('Admin/profile',$filename);
            $tech->profile=$filename;
        }
        if ($req->hasfile('licence')) 
        {
            $file1=$req->file('licence');
            $extension1=$file1->getClientOriginalExtension();
            $filename1=time().'.'.$extension1;
            $file1->move('Admin/licence',$filename1);
            $tech->licence=$filename1;
        }
            $tech->update();
            return redirect('manage_technician')->with('pass','Technician Updated Successfully');
     }

     public function delete_admin_tech($id)
     {
        $data=technician::where([['tech_id',$id]])->first();
        $data->delete();
        return redirect('manage_technician')->with('pass','Technician Deleted Successfully');
     }

     public function approve_reject()
     {
       if (session()->has('admin_mail')) 
       {
         //  $data=technician::where([['tech_status','Pending']])->get();
         $data=DB::table('technicians')->join('categories','categories.cat_id','=','technicians.tech_cat_id')
         ->where([['tech_status','Pending']])->get();
          return view('Admin/approve_reject_tech',compact('data'));
       }
       else
       {
        return redirect ('admin_login');
       }
     }

     public function approve_tech($id)
     {
        $data=technician::where([['tech_id',$id]])->first();
        $data->tech_status='Approved';
        $data->update();
        return redirect('approve_reject')->with('pass','Technician Approved Successfully');
     }

     public function reject_tech($id)
     {
        $data=technician::where([['tech_id',$id]])->first();
        $data->tech_status='Rejected';
        $data->update();
        return redirect('approve_reject')->with('pass','Technician Rejected Successfully');
     }

     public function admin_logout(Request $req)
     {
         $req->session()->forget('admin_mail');
        return redirect('/index')->with('pass','Logout Successfully'); 
     }

     public function add_categories()
     {
        if (session()->has('admin_mail')) 
        {
            return view('Admin/add_categories');
        }
        else
        {
            return redirect('admin_login');
        }
     }

     public function insert_category(Request $req)
     {
        $data=new category();
        $data->cat_name=$req->input('name');
        if ($req->hasfile('image')) 
        {
            $file=$req->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('Admin/category',$filename);
            $data->cat_image=$filename;

            $data->save();
            return redirect('/all_categories')->with('pass','Categories Added Successfully');
        }
     }

     public function all_categories()
     {
        if (session()->has('admin_mail')) 
        {
           $data=category::all();
           return view('Admin/all_categories',compact('data')); 
        }
        else
        {
            return redirect('/admin_login');
        }
     }

     public function edit_cat($id)
     {
        if (session()->has('admin_mail')) 
        {
             $data=category::where([['cat_id',$id]])->first();
             return view('Admin/edit_cat',compact('data'));
        }
        else
        {
            return redirect ('admin_login');
        }
       

     }

     public function update_cat(Request $req,$id)
     {
        $data=category::where([['cat_id',$id]])->first();
        $data->cat_name=$req->input('name');
        if ($req->hasfile('image')) 
        {
            $file=$req->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('Admin/category',$filename);
            $data->cat_image=$filename;
        }
            $data->update();
            return redirect('/all_categories')->with('pass','Categories Updated Successfully');
     }

     public function delete_cat($id)
     {
        $data=category::where([['cat_id',$id]])->first();
        $data->delete();
        return redirect ('/all_categories')->with('pass','Categories Deleted Successfully');
     }


     public function user_details()
     {
      $users=customer::all();
      return view('Admin/user_details',compact('users'));
     }

     public function booking_details()
     {
      if (session()->has('admin_mail')) 
      {
         
         $booking=DB::table('bookings')->join('technicians','technicians.tech_id','=','bookings.book_tech_id')
         ->join('customers','customers.customer_id','=','bookings.customer_id')->get();
         return view('Admin/booking_details',compact('booking'));
      }
      else
      {
         return redirect('admin_login');
      }
     }

     public function payment_details()
     {
         if (session()->has('admin_mail')) 
         {
            $payment=DB::table('payments')->join('customers','customers.customer_id','=','payments.customer_id')
            ->join('technicians','technicians.tech_id','=','payments.technician_id')->get();
            return view('Admin/payment_details',compact('payment'));
         }
         else
         {
            return redirect('admin_login');
         }
     }

     public function pending_complaints()
     {
         $complaints=complaints::where([['reply','pending']])->get();
         return view('Admin/pending_complaints',compact('complaints'));

     }
     public function reply_complaints($complaint_id)
     {
         if (session()->has('admin_mail')) 
         {
            $complaints=complaints::where([['complaint_id',$complaint_id]])->first();
            return view('Admin/reply_complaints',compact('complaints'));
         }
         else
         {
            return redirect('/index');
         }
      }

      public function update_complaints(Request $req,$complaint_id)
      {
         $reply=complaints::where([['complaint_id',$complaint_id]])->first();
         $reply->reply=$req->input('reply');
         $reply->update();
         return redirect('/all_replied_complaints')->with('pass','Replied Successfully');
      }

      public function all_replied_complaints()
      {
         if (session()->has('admin_mail')) 
         {
            $complaints=complaints::where([['reply','<>','pending']])->get();
            return view('Admin/all_replied_complaints',compact('complaints'));
         }
         else
         {
            return redirect('/index');
         }
        
      }

}

