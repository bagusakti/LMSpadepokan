<?php

namespace Database\Seeders;

use App\Models\Trainer;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'institusi' => 'Moderator',
            'whatsapp' => '081231231231',
            'password' => Hash::make('Bagusakti08123'),
        ]);
        $admin1 = User::create([
            'name' => 'Moderator',
            'email' => 'moderator@gmail.com',
            'institusi' => 'Moderator',
            'whatsapp' => '081231231231',
            'password' => Hash::make('paneladmin'),
        ]);
        $admin2 = User::create([
            'name' => 'Trainer',
            'email' => 'bot@gmail.com',
            'institusi' => 'TimPadepokan',
            'whatsapp' => '081231231232',
            'password' => Hash::make('paneltrainer'),
        ]);
        $admin->assignRole('admin');
        $admin1->assignRole('admin');
        $admin2->assignRole('admin');

        $siswa = User::create([
            'name' => 'Rakha Bagus Sakti',
            'email' => 'Rakha@gmail.com',
            'institusi' => 'Moderator',
            'whatsapp' => '081231116091',
            'password' => Hash::make('Bagusakti081123'),
        ]);
        $siswa1 = User::create([
            'name' => 'Siswa Moderator',
            'email' => 'siswa@gmail.com',
            'institusi' => 'Moderator',
            'whatsapp' => '081231116091',
            'password' => Hash::make('panelsiswa'),
        ]);
        $siswa->assignRole('siswa');
        $siswa1->assignRole('siswa');
    }
}
