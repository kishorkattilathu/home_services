<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\category;
use App\Models\technician;
use App\Models\bookings;
use Illuminate\Support\Facades\DB;
use App\Models\payments;
use App\Models\complaints;

class Customer_controller extends Controller
{
	public function index()
	{
		return view('Customer/index');
	}

	public function customer_register()
	{
		return view('Customer/customer_register');
	}

	public function customer_login()
	{
		return view('Customer/customer_login');
	}

	public function customer_register_insert(Request $req)
	{
		$data=new customer();
		$data->customer_name=$req->input('name');
		$data->customer_email=$req->input('email');
		$data->customer_phone=$req->input('phone');
		$data->customer_address=$req->input('address');
		$pass=$data->customer_password=$req->input('password');
		$confirm_pass=$req->input('confirm_pass');
		if ($confirm_pass==$pass) 
		{
			$count=customer::where([['customer_email',$req->input('email')]])->count();
			if ($count==0) 
			{
			
				if ($req->hasfile('id_proof')) 
				{
					$file=$req->file('id_proof');
					$extension=$file->getClientOriginalExtension();
					$filename=time().'.'.$extension;
					$file->move('Customer/id_proof',$filename);
					$data->id_proof=$filename;
					$data->save();
					return redirect('/customer_login')->with('pass','Registered Successfully');

				}
			}
			else
			{
				return redirect('/customer_register')->with('fail','Email already exist');
			}
		}
		else
		{
				return redirect('/customer_register')->with('fail','Password Does not match');
		}
		
	}
	public function customer_login_insert(Request $req)
	{
		$count=customer::where([['customer_email',$req->input('email')],
		['customer_password',$req->input('password')]])->count();
		if ($count==1) 
		{
			$req->session()->put('customer_mail',$req->input('email'));
			return redirect('/customer_services')->with('pass',"Login successfully");
		}
		else
		{
			return redirect ('/customer_login')->with('fail','Wrong email or password');
		}
	}

	public function customer_home()
	{
		if (session()->has('customer_mail')) 
		{
			$data=customer::where([['customer_email',session('customer_mail')]])->first();
			return view('Customer/customer_home',compact('data'));
		}
		else
		{
			return redirect('customer_login');
		}
	}

	public function customer_update_profile(Request $req)
	{
		$data=customer::where([['customer_email',session('customer_mail')]])->first();
		$data->customer_name=$req->input('name');
		$data->customer_phone=$req->input('phone');
		$data->customer_address=$req->input('address');
		$data->customer_password=$req->input('password');
		if ($req->hasfile('id_proof')) 
		{
			$file=$req->file('id_proof');
			$extension=$file->getClientOriginalExtension();
			$filename=time().'.'.$extension;
			$file->move('Customer/id_proof',$filename);
			$data->id_proof=$filename;
		}
			$data->update();
			return redirect ('customer_home');

	}

	public function customer_services()
	{
		if (session()->has('customer_mail')) 
		{
			$data=category::all();
			return view('Customer/services',compact('data'));
		}
	}

	public function technician_selection(Request $req,$id)
	{
		$data=technician::where([['tech_cat_id',$id],['tech_status','Approved']])->get();
		return view('Customer/technician_selection',compact('data'));
	}

	public function customer_logout(Request $req)
	{
		$req->session()->forget('customer_mail');
		return redirect('/index')->with('pass','Logout Successfully');
	}

	public function calendar($tech_id)
	{
		if (session()->has('customer_mail')) 
		{
			$booking_data =bookings::where([['book_tech_id',$tech_id]])->get()->toArray();
			$customer=customer::where([['customer_email',session('customer_mail')]])->first();
			$tech=technician::where([['tech_id',$tech_id]])->first();
			
			// dd($booking_data);
			$calendar_data = array();
			foreach ($booking_data as $key => $value) 
			{
				// echo "<pre>"; print_r('key :'.$key);
				// echo "<pre>"; print_r($value['created_at']);
				// echo "<pre>"; print_r($value); die('emd of code');
				$calendar_data[$key]['title'] = "Booking ".($key+1);
				$calendar_data[$key]['start'] = $value['booking_date'];
			}
			// echo "<pre>"; print_r(($calendar_data)); //die('emd of code');
			// echo "<pre>"; print_r(json_encode($calendar_data)); die('emd of code');

			return view('Customer/calendar',compact('calendar_data','customer','tech'));
		}
		else
		{
			return redirect ('/customer_login');
		}
	}

	public function book_now(Request $req)
	{
		$booking_data=new bookings();
		$booking_data->customer_id=$req->input('customer_id');
		$booking_data->book_tech_id=$req->input('technician_id');
		$booking_data->booking_status='pending';
		$booking_data->payment_status='pending';
		$booking_data->booking_date=$req->input('date');
		$book=$booking_data->save();
		if ($book==1) 
		{
			return redirect ('/my_bookings')->with('pass',"Successfully Booked waiting for approval");
		}
		else
		{
			return redirect('/customer_services')->with('fail',"Failed Try Again");
		}
	}

	public function my_bookings()
	{
		if (session()->has('customer_mail')) 
		{
			$bookings=DB::table('bookings')->join('customers','bookings.customer_id','=','customers.customer_id')
			->join('technicians','technicians.tech_id','=','bookings.book_tech_id')
			->join('categories','categories.cat_id','=','technicians.tech_cat_id')
			->where([['customer_email',session('customer_mail')],['payment_status','<>','paid']])->get();
			return view('Customer/my_bookings',compact('bookings'));
		}
		else
		{
			return redirect ('/customer_login');
		}
		
	}

	public function payment($booking_id)
	{
		$payment=DB::table('bookings')->join('customers','customers.customer_id','=','bookings.customer_id')
		->join('technicians','technicians.tech_id','=','bookings.book_tech_id')->where([['booking_id',$booking_id]])->first();
		return view ('Customer/payment',compact('payment'));
	}

	public function payment_insert(Request $req)
	{
		$payment=new payments();
		$payment->customer_id=$req->input('customer_id');
		$payment->technician_id=$req->input('tech_id');
		$payment->card_holder_name=$req->input('name');
		$payment->card_number=$req->input('card');
		$payment->expiry_year=$req->input('year');
		$payment->expiry_month=$req->input('month');
		$payment->cvv=$req->input('cvv');
		$payment->amount=$req->input('amount');
		$payment->booking_id=$req->input('booking_id');
		$pay=$payment->save();
		
		if ($pay) 
		{
			$book=bookings::where([['booking_id',$req->input('booking_id')]])->first();
			$book->payment_status='paid';
			$book->update();
			return redirect ('/all_bookings')->with('pass','Payment Done Successfully');
		}
		else
		{
			return redirect('/my_bookings')->with('fail','payment failed try again');
		}
		
	}

	public function all_bookings()
	{
		if (session()->has('customer_mail')) 
		{
			$booked=DB::table('payments')->join('bookings','bookings.booking_id','=','payments.booking_id')
			->join('technicians','technicians.tech_id','=','payments.technician_id')
			->join('customers','customers.customer_id','=','payments.customer_id')
			->join('categories','categories.cat_id','=','technicians.tech_cat_id')->where([['customer_email',session('customer_mail')]])->get();
			return view('Customer/all_bookings',compact('booked'));
		}
		else
		{
			return redirect('/index');
		}

	}

	public function contact()
	{
		if(session('customer_mail'))
		{
			$customer=customer::where([['customer_email',session('customer_mail')]])->first();
			return view('Customer/contact',compact('customer'));
		}
		else
		{
			return redirect('/index');
		}
	}

	public function customer_complaint_insert(Request $req)
	{
		$complaint=new complaints();
		$complaint->user_id=$req->input('customer_id');
		$complaint->name=$req->input('name');
		$complaint->email=$req->input('email');
		$complaint->subject=$req->input('subject');
		$complaint->message=$req->input('message');
		$complaint->reply='pending';
		$complaint->save();
		return redirect('/all_complaints')->with('pass','Message seneded successfully');
	}

	public function all_complaints()
	{
		if (session()->has('customer_mail')) 
		{
			$complaints=complaints::where([['email',session('customer_mail')]])->get();
			return view('Customer/all_complaints',compact('complaints'));
		}
		else
		{
			return redirect('/index');
		}
	}
	
}
