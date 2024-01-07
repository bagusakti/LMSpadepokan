<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'institusi',
        'whatsapp',
    ];

    // User.php

public function tugas()
{
    return $this->hasMany(Tugas::class);
}

}
