<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class Subject extends Model
{
    use HasApiTokens, HasFactory;
    protected $fillable = [
         'course_id',
        'name'
    ];
    public function user(){
        return $this->hasOne(Course::class,'id','course_id');
    }
}
