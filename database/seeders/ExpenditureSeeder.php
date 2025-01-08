<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpenditureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('expenditures')->insert([
            [
                'date' => '2024-01-02',
                'description' => 'Pembelian oli motor',
                'nominal' => '150000',
            ],
            [
                'date' => '2024-01-01',
                'description' => 'Gaji mekanik Januari',
                'nominal' => '2500000',
            ],
            [
                'date' => '2024-01-03',
                'description' => 'Pembelian ban motor',
                'nominal' => '800000',
            ],
            [
                'date' => '2024-01-05',
                'description' => 'Tagihan listrik bulan Desember',
                'nominal' => '450000',
            ],
            [
                'date' => '2024-01-06',
                'description' => 'Servis kompresor udara',
                'nominal' => '300000',
            ],
            [
                'date' => '2024-01-07',
                'description' => 'Pembelian kampas rem',
                'nominal' => '120000',
            ],
            [
                'date' => '2024-01-01',
                'description' => 'Gaji karyawan administrasi Januari',
                'nominal' => '2000000',
            ],
            [
                'date' => '2024-01-05',
                'description' => 'Tagihan air bulan Desember',
                'nominal' => '150000',
            ],
            [
                'date' => '2024-01-08',
                'description' => 'Pembelian alat cuci motor',
                'nominal' => '500000',
            ],
            [
                'date' => '2024-01-09',
                'description' => 'Biaya kebersihan bengkel',
                'nominal' => '200000',
            ],  
        ]);
    }
}
