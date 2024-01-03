<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;

    protected $table = 'tugas';

    protected $fillable = [
        'user_id',
        'link_gbook',
        'link_blog',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
