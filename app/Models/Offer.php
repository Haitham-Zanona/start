<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    //protected $table = 'my_offers'; when the table in the phpMyAdmin has different name with the model
    protected $fillable = ['id', 'name', 'price', 'details', 'created_at', 'updated_at'];
    // protected $hidden = ['created_at', 'updated_at'];
    // public $timestamps = false;
}
