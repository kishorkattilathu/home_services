<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookings extends Model
{
    use HasFactory;
    protected $table='bookings';
    protected $fillable=['customer_id','book_tech_id','booking_status','payment_status','booking_date'];
    protected $primaryKey='booking_id';
}
