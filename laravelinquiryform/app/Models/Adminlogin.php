<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adminlogin extends Model
{
    use HasFactory ;

    protected $table='adminlogin';
    
    protected $fillable = [
        'email', 
        'password'
    ];
}
