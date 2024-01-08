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
            'name' => 'admin',
            'email' => 'mungkinadmin@gmail.com',
            'institusi' => 'TimPadepokan',
            'whatsapp' => '081231231231',
            'password' => Hash::make('Bagusakti08123'),
            'status' => 1
        ]);
        $admin->assignRole('admin');

        $trainer = User::create([
            'name' => 'trainer',
            'email' => 'mungkintrainer@gmail.com',
            'institusi' => 'TimPadepokan',
            'whatsapp' => '081231231232',
            'password' => Hash::make('trainerrawr1122'),
            'status' => 1
        ]);

        $trainer = User::create([
            'name' => 'Azriel Jonathan R.',
            'email' => 'AzrielTrainer@gmail.com',
            'institusi' => 'Padepokan Trainer',
            'whatsapp' => '081231231232',
            'password' => Hash::make('AzrielRamadhan321'),
            'status' => 1
        ]);

        
        $trainer->assignRole('trainer');

        $siswa = User::create([
            'name' => 'siswa',
            'email' => 'mungkinsiswa@gmail.com',
            'institusi' => 'TimPadepokan',
            'whatsapp' => '081231231233',
            'password' => Hash::make('Bagusakti08123'),
            'status' => 1
        ]);
        $siswa->assignRole('siswa');
    }
}
