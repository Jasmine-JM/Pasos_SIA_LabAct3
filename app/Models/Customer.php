<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
    'student_id',
    'name',
    'gender',
    'department',
    'dob',
    'time_in',
    'time_out',
    'reason'
];
}
