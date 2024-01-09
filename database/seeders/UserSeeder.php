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
            'email' => 'bots@gmail.com',
            'institusi' => 'TimPadepokan',
            'whatsapp' => '081231231231',
            'password' => Hash::make('Bagusakti08123'),
            'status' => 1
        ]);
        $admin->assignRole('admin');

        $trainer = User::create([
            'name' => 'Trainer',
            'email' => 'bot@gmail.com',
            'institusi' => 'TimPadepokan',
            'whatsapp' => '081231231232',
            'password' => Hash::make('paneltrainer'),
            'status' => 1
        ]);
        $trainer2 = User::create([
            'name' => 'Rakha Moderator',
            'email' => 'RakhaMod@gmail.com',
            'institusi' => 'Moderator',
            'whatsapp' => '081231231232',
            'password' => Hash::make('paneltrainer'),
            'status' => 1
        ]);
        $trainer3 = User::create([
            'name' => 'Azriel Jonathan R.',
            'email' => 'AzrielTrainer@gmail.com',
            'institusi' => 'Padepokan Trainer',
            'whatsapp' => '081231231232',
            'password' => Hash::make('AzrielRamadhan321'),
            'status' => 1
        ]);
        $trainer->assignRole('trainer');
        $trainer2->assignRole('trainer');
        $trainer3->assignRole('trainer');

        $siswa = User::create([
            'name' => 'Rakha Bagus Sakti',
            'email' => 'Rakha@gmail.com',
            'institusi' => 'Moderator',
            'whatsapp' => '081231116091',
            'password' => Hash::make('Bagusakti081123'),
            'status' => 1
        ]);
        $siswa->assignRole('siswa');
    }
}
