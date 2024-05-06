<?php

namespace App\Http\Controllers;
use App\Models\technician;
use App\Models\category;
use App\Models\bookings;
use Illuminate\Support\Facades\DB;
use App\Models\complaints;

use Illuminate\Http\Request;

class Technician_controller extends Controller
{
    public function technician_login()
    {
        return view('Technician/technician_login');
    }

    public function technician_register()
    {
        $data=category::all();
        return view('Technician/technician_register',compact('data'));
    }

    public function insert_register_technician(Request $req)
     {
      $data=new technician();
      $data->tech_name=$req->input('name');
      $data->tech_email=$req->input('email');
      $data->tech_phone=$req->input('phone');
      $data->tech_cat_id=$req->input('tech_cat_id');
      $data->type='Technician';
      $data->location=$req->input('location');
      $data->tech_status='Pending';
      $pass=$data->password=$req->input('password');
      $confirm_pass=$req->input('confirm_pass');
      
      if ($pass==$confirm_pass) 
      {
        $count=technician::where([['tech_email',$req->input('email')]])->count();
        if ($count==0) 
        {

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
                $extension1=$file1->getClientOriginalExtension();
                $filename1=time().'.'.$extension1;
                $file1->move('Admin/licence',$filename1);
                $data->licence=$filename1;
            }
                $data->save();
                return redirect('/technician_login')->with('pass',"Registered successfully");
        }
        else
        {
            return redirect('/technician_login')->with('fail',"Email Already Exist");

        }

      }
      else
      {
        return redirect('/technician_login')->with('fail',"Password does not match");

      }

     }
     Public function technician_login_insert(Request $req)
     {
        $data=new technician();
        $email = $data->tech_email = $req->input('email');
        $pass = $data->password = $req->input('password');
        $count=technician::where([['tech_email',$email],['tech_status','Approved']])->count();

       if ($count==1) 
        {
            $passwordcheck=technician::where([['tech_email',$email],['password',$pass],['tech_status','Approved']])->count();
            if ($passwordcheck==1) 
            {
                $req->session()->put('tech_mail',$email);
                return redirect ('/tech_home')->with('pass',"Successfully login");
            }
            else
            {
                return redirect('/technician_login')->with('fail',"Wrong Email or Passsword");
            }
            
        }
        else
        {
            return redirect('/technician_login')->with('fail',"Not Approved by Admin Yet");
        }
     }

     public function tech_home()
     {
        if (session()->has('tech_mail')) 
        {
            $data=DB::table('categories')->join('technicians','technicians.tech_cat_id','=','categories.cat_id')->where('technicians.tech_email', session('tech_mail'))->first();
            $categories=category::all();
            return view('Technician/tech_home',compact('data','categories'));
        }
        else
        {
            return redirect('technician_login');
           
         }
     }
     public function update_tech(Request $req)
     {
        $data=technician::where([['tech_email',session('tech_mail')]])->first();
        $data->tech_name=$req->input('name');
        $data->tech_email=$req->input('email');
        $data->tech_phone=$req->input('phone');
        $data->tech_cat_id=$req->input('tech_cat');
        $data->location=$req->input('location');
        $data->password=$req->input('password');

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
            $extension1=$file1->getClientOriginalExtension();
            $filename1=time().'.'.$extension1;
            $file1->move('Admin/licence',$filename1);
            $data->licence=$filename1;
        }
        $data->update();
        return redirect('tech_home')->with('pass','Technician Updated Successfully');
     }

     public function manage_bookings()
     {
        if (session()->has('tech_mail'))
        {
            $bookings=DB::table('bookings')->join('technicians','technicians.tech_id','=','bookings.book_tech_id')
            ->join('customers','customers.customer_id','=','bookings.customer_id')->where([['tech_email',session('tech_mail')],['booking_status','pending']])->get();
            return view('Technician/manage_bookings',compact('bookings'));
        }
        else
        {
            return redirect ('/tech_login');
        }
     }

     public function approve_bookings($booking_id)
     {
        // dd($booking_id);
       if (session()->has('tech_mail')) 
       {

        // print_r(session('tech_mail'));
        $approve=bookings::where([['booking_id',$booking_id]])->first();
        // dd($approve->booking_status);
        $approve->booking_status='approved';
        $approve->update();
        return redirect('/manage_bookings')->with('pass','Bookings Approved Successfully');
       }
       else
       {
        return redirect('/index');
       }
     }

     public function reject_bookings($booking_id)
     {
        $reject=bookings::where([['booking_id',$booking_id]])->first();
        $reject->booking_status='rejected';
        $reject->update();
        return redirect('/manage_bookings')->with('pass','Bookings Rejected Successfully');
     }

     public function technician_logout(Request $req)
     {
        $req->session()->forget('tech_mail');
        return redirect('/index')->with('pass','Logout Successfully');
     }

     public function all_customer_bookings()
     {
        if (session()->has('tech_mail'))
        {
        $bookings=DB::table('bookings')->join('technicians','technicians.tech_id','=','bookings.book_tech_id')
        ->join('customers','bookings.customer_id','=','customers.customer_id')
        ->where([['tech_email',session('tech_mail')],['booking_status','<>','pending']])->get();
        return view('Technician/all_bookings',compact('bookings'));
        
        }
        else
        {
            return redirect('/index');
        }
    }

    public function tech_payment_details()
    {
        if (session()->has('tech_mail')) 
        {
           $payment=DB::table('payments')->join('customers','customers.customer_id','=','payments.customer_id')
           ->join('technicians','technicians.tech_id','=','payments.technician_id')
           ->where('technicians.tech_email',session('tech_mail'))->get();
           return view('Technician/payment_details',compact('payment'));
        }
        else
        {
            return redirect ('/index');
        }
    }

    public function contact_admin()
    {
        if (session()->has('tech_mail')) 
        {
            $complaint=technician::where([['tech_email',session('tech_mail')]])->first();
            return view('Technician/contact_admin',compact('complaint')); 
        }
        else
        {
            return redirect ('/index');
        }
    }
    
    public function technician_complaint_insert(Request $req)
    {
        $complaint=new complaints();
        $complaint->user_id=$req->input('technician_id');
        $complaint->name=$req->input('name');
        $complaint->email=$req->input('email');
        $complaint->subject=$req->input('subject');
        $complaint->message=$req->input('message');
        $complaint->reply='pending';
        $complaint->save();
        return redirect('/all_technician_complaints')->with('pass','Message Sended Successfully');
    }

    public function all_technician_complaints()
    {
        if (session()->has('tech_mail')) 
        {
            $complaints=complaints::where([['email',session('tech_mail')]])->get();
            return view('/Technician/all_complaints',compact('complaints'));
        }
        else
        {
            return redirect('/index');
        }
    }
}
