<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Oli & Pelumas'],
            ['name' => 'Suku Cadang Mesin'],
            ['name' => 'Ban & Velg'],
            ['name' => 'Aki & Baterai'],
            ['name' => 'Filter Udara'],
            ['name' => 'Sistem Rem'],
            ['name' => 'Lampu & Aksesoris'],
            ['name' => 'Knalpot'],
            ['name' => 'Sistem Suspensi'],
            ['name' => 'Peralatan & Perlengkapan Bengkel'],
        ]);
    }
}
