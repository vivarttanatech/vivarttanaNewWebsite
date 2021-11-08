<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentUsers extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'student_usn',
        'gender',
        'college',
        'school',
        'university',
        'degree_course',
        'branch',
        'semester',
        'degree_status',
        'address',
        'state',
        'city',
        'updated_by'
    ];
    protected $table = 'student_users';
}
