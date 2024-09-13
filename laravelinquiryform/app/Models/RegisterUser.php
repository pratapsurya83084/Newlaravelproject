<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterUser extends Model
{
    use HasFactory;


    protected $table = 'registerusers';

    protected $fillable = [
        'courseName',
        'course_Enroll_Date',
        'email',
        'username',
        'phone_Number',
        'country',
        'job_role',
        'service'
    ];

    public function get_all_data()
    {
        $data = self::all();
        return !empty($data) ? (array)$data : [];
    }
}
