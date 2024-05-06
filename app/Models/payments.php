<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payments extends Model
{
    use HasFactory;
    protected $table='payments';
    protected $primaryKey='payment_id';
    protected $fillable=['customer_id','technician_id','card_holder_name','card_number',
                        'expiry_year','expiry_month','cvv','amount','booking_id'];
}
