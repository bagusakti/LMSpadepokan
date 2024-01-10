<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $namacourse = [
            'Pelatihan literasi',
            'Lomba Technopreneur',
            'Lomba Pembuatan Game',
            'Persiapan Golden Ticket',
            'Simulasi Game NIB',
            'Pelatihan Metaverse Dasar',
            'Pelatihan Metaverse Intermediate',
            'Pelatihan Metaverse Lanjut',
            'Pelatihan Storytelling',
            'Pelatihan FrontEnd dan BackEnd',
        ];

        $deskripsi = [
            'Lorem20',
            'Lomba Technopreneur',
            'Lomba Pembuatan Game',
            'Persiapan Golden Ticket',
            'Simulasi Game NIB',
            'Pelatihan Metaverse Dasar',
            'Pelatihan Metaverse Intermediate',
            'Pelatihan Metaverse Lanjut',
            'Pelatihan Storytelling',
            'Pelatihan FrontEnd dan BackEnd',
        ];

        for ($i = 0; $i < count($namacourse); $i++) {
            DB::table('course')->insert([
                'name' => $namacourse[$i],
                'deskripsi' => $deskripsi[$i]
            ]);
        }




    }
}
