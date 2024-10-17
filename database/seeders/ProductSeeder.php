<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'category_id' => 1, // Oli & Pelumas
                'code' => 'OLI001',
                'name' => 'Oli Mesin Castrol 10W-40',
                'brand' => 'Castrol',
                'stock' => '50',
                'price_buy' => '50000',
                'price_sell' => '70000',
                'unit' => 'Litre',
            ],
            [
                'category_id' => 2, // Suku Cadang Mesin
                'code' => 'SCM001',
                'name' => 'Busi NGK',
                'brand' => 'NGK',
                'stock' => '200',
                'price_buy' => '15000',
                'price_sell' => '25000',
                'unit' => 'Piece',
            ],
            [
                'category_id' => 3, // Ban & Velg
                'code' => 'BAN001',
                'name' => 'Ban Bridgestone 185/70 R14',
                'brand' => 'Bridgestone',
                'stock' => '30',
                'price_buy' => '400000',
                'price_sell' => '500000',
                'unit' => 'Piece',
            ],
            [
                'category_id' => 4, // Aki & Baterai
                'code' => 'AKI001',
                'name' => 'Aki GS Astra 45Ah',
                'brand' => 'GS Astra',
                'stock' => '20',
                'price_buy' => '650000',
                'price_sell' => '750000',
                'unit' => 'Piece',
            ],
            [
                'category_id' => 5, // Filter Udara
                'code' => 'FLU001',
                'name' => 'Filter Udara Ferrox',
                'brand' => 'Ferrox',
                'stock' => '100',
                'price_buy' => '100000',
                'price_sell' => '150000',
                'unit' => 'Piece',
            ],
        ]);
        
    }
}
