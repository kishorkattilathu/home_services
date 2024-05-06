<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class technician extends Model
{
    use HasFactory;
    protected $table='technicians';
    protected $fillable=['tech_name','tech_email','tech_phone','tech_cat_id','type','location','profile','licence','password','tech_status'];
    protected $primaryKey='tech_id';

}
