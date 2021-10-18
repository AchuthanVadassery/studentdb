<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'email',
        'dob',
        'address',
        'pincode',
        'course_id',

    ];

    public function courseFind()
        {
            return $this->hasOne(Course::class,'id','course_id');
        }
}
