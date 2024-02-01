<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toeic extends Model
{
    use HasFactory;

    protected $table = 'toeic';

    protected $fillable = [
        'user_id',
        'title',
        'nilai',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
