<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//index//
Route::get('index','App\Http\Controllers\Customer_controller@index');

//Admin//
Route::get('admin_login','App\Http\Controllers\Admin_controller@admin_login');
Route::get('admin_register','App\Http\Controllers\Admin_controller@admin_register');
Route::post('admin_register_insert','App\Http\Controllers\Admin_controller@admin_register_insert');
Route::post('admin_login_insert','App\Http\Controllers\Admin_controller@admin_login_insert');
Route::get('admin_home','App\Http\Controllers\Admin_controller@admin_home');
Route::post('admin_profile_update','App\Http\Controllers\Admin_controller@admin_profile_update');
Route::get('add_technician','App\Http\Controllers\Admin_controller@add_technician');
Route::post('add_insert_technician','App\Http\Controllers\Admin_controller@add_insert_technician');
Route::get('manage_technician','App\Http\Controllers\Admin_controller@manage_technician');
Route::get('edit_admin_tech/{tech_id}','App\Http\Controllers\Admin_controller@edit_admin_tech');
Route::post('update_admin_tech/{tech_id}','App\Http\Controllers\Admin_controller@update_admin_tech');
Route::get('delete_admin_tech/{tech_id}','App\Http\Controllers\Admin_controller@delete_admin_tech');
Route::get('approve_reject','App\Http\Controllers\Admin_controller@approve_reject');
Route::get('approve_tech/{tech_id}','App\Http\Controllers\Admin_controller@approve_tech');
Route::get('reject_tech/{tech_id}','App\Http\Controllers\Admin_controller@reject_tech');
Route::get('admin_logout','App\Http\Controllers\Admin_controller@admin_logout');
Route::get('add_categories','App\Http\Controllers\Admin_controller@add_categories');
Route::post('insert_category','App\Http\Controllers\Admin_controller@insert_category');
Route::get('all_categories','App\Http\Controllers\Admin_controller@all_categories');
Route::get('edit_cat/{cat_id}','App\Http\Controllers\Admin_controller@edit_cat');
Route::post('update_cat/{cat_id}','App\Http\Controllers\Admin_controller@update_cat');
Route::get('delete_cat/{cat_id}','App\Http\Controllers\Admin_controller@delete_cat');
Route::get('pending_complaints','App\Http\Controllers\Admin_controller@pending_complaints');
Route::get('reply_complaints/{complaint_id}','App\Http\Controllers\Admin_controller@reply_complaints');
Route::post('update_complaints/{complaint_id}','App\Http\Controllers\Admin_controller@update_complaints');
Route::get('all_replied_complaints','App\Http\Controllers\Admin_controller@all_replied_complaints');
Route::get('user_details','App\Http\Controllers\Admin_controller@user_details');
Route::get('booking_details','App\Http\Controllers\Admin_controller@booking_details');
Route::get('payment_details','App\Http\Controllers\Admin_controller@payment_details');


//Technician//
Route::get('technician_login','App\Http\Controllers\Technician_controller@technician_login');
Route::get('technician_register','App\Http\Controllers\Technician_controller@technician_register');
Route::post('insert_register_technician','App\Http\Controllers\Technician_controller@insert_register_technician');
Route::post('technician_login_insert','App\Http\Controllers\Technician_controller@technician_login_insert');
Route::get('tech_home','App\Http\Controllers\Technician_controller@tech_home');
Route::post('update_tech','App\Http\Controllers\Technician_controller@update_tech');
Route::get('manage_bookings','App\Http\Controllers\Technician_controller@manage_bookings');
Route::get('approve_bookings/{booking_id}','App\Http\Controllers\Technician_controller@approve_bookings');
Route::get('reject_bookings/{booking_id}','App\Http\Controllers\Technician_controller@reject_bookings');
Route::get('technician_logout','App\Http\Controllers\Technician_controller@technician_logout');
Route::get('all_customer_bookings','App\Http\Controllers\Technician_controller@all_customer_bookings');
Route::get('contact_admin','App\Http\Controllers\Technician_controller@contact_admin');
Route::post('technician_complaint_insert','App\Http\Controllers\Technician_controller@technician_complaint_insert');
Route::get('all_technician_complaints','App\Http\Controllers\Technician_controller@all_technician_complaints');
Route::get('tech_payment_details','App\Http\Controllers\Technician_controller@tech_payment_details');


//Customer//
Route::get('customer_login','App\Http\Controllers\Customer_controller@customer_login');
Route::get('customer_register','App\Http\Controllers\Customer_controller@customer_register');
Route::post('customer_register_insert','App\Http\Controllers\Customer_controller@customer_register_insert');
Route::post('customer_login_insert','App\Http\Controllers\Customer_controller@customer_login_insert');
Route::get('customer_home','App\Http\Controllers\Customer_controller@customer_home');
Route::post('customer_update_profile','App\Http\Controllers\Customer_controller@customer_update_profile');
Route::get('customer_services','App\Http\Controllers\Customer_controller@customer_services');
Route::get('technician_selection/{cat_id}','App\Http\Controllers\Customer_controller@technician_selection');
Route::get('customer_logout','App\Http\Controllers\Customer_controller@customer_logout');
Route::get('calendar/{tech_id}','App\Http\Controllers\Customer_controller@calendar');
Route::post('book_now','App\Http\Controllers\Customer_controller@book_now');
Route::get('my_bookings','App\Http\Controllers\Customer_controller@my_bookings');
Route::get('payment/{booking_id}','App\Http\Controllers\Customer_controller@payment');
Route::post('payment_insert','App\Http\Controllers\Customer_controller@payment_insert');
Route::get('all_bookings','App\Http\Controllers\Customer_controller@all_bookings');
Route::get('contact','App\Http\Controllers\Customer_controller@contact');
Route::post('customer_complaint_insert','App\Http\Controllers\Customer_controller@customer_complaint_insert');
Route::get('all_complaints','App\Http\Controllers\Customer_controller@all_complaints');
