<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $table='customers';
    protected $fillable=['customer_name','customer_email','customer_phone','customer_address','id_proof','customer_password'];
    protected $primaryKey='customer_id';
}
