<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Literasi extends Model
{
    use HasFactory;

    protected $table = 'literasi';

    protected $fillable = [
        'user_id',
        'title',
        'link_gbook',
        'link_blog',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
