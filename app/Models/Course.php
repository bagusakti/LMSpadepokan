<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'course';

    protected $fillable = [
        'user_id',
        'name',
        'category',
        'image',
        'd1',
        'd2',
        'p1',
        'p2',
        'p3',
        'dp1',
        'dp2',
        'dp3',
        'pendaftaran'
    ];

    public function users() {
        return $this->belongsToMany(User::class, 'users_course', 'course_id' , 'users_id')->withPivot('status_kelulusan');
    }


}
