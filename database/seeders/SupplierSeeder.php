<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('suppliers')->insert([
            [
                'name' => 'PT Sukses Motor Jambi',
                'address' => 'Jl. Orang Kayo Pingai, No. 40-A, RT 008, Payo Selincah, Kec. Jambi Tim., Kota Jambi, Jambi 36254',
                'contact_person' => '081276543210',
            ],
            [
                'name' => 'CV Jaya Motorindo',
                'address' => 'Jambi Trade Center No. 1, Jl. Lingkar Selatan No.RT. 26, Kenali Asam Bawah, Kec. Kota Baru, Kota Jambi, Jambi 36129',
                'contact_person' => '081234567890',
            ],
            [
                'name' => 'Toko Sparepart Motor Kasang',
                'address' => 'Jl. Raya Kasang Pudak No. 34, Kasang Pudak, Kec. Kumpeh Ulu, Kabupaten Muaro Jambi, Jambi 36383',
                'contact_person' => '081266898989',
            ],
            [
                'name' => 'PT Sentosa Motor Jambi',
                'address' => 'Jl. Hayam Wuruk, Jelutung, Kec. Jelutung, Kota Jambi, Jambi 36124',
                'contact_person' => '074125484',
            ],
            [
                'name' => 'CV Berkah Motor',
                'address' => 'Jl. Jend. A. Thalib No.2 Blok E, Simpang IV Sipin, Kec. Telanaipura, Kota Jambi, Jambi 36361',
                'contact_person' => '0741668263',
            ],
            [
                'name' => 'PT Zokkas Motor Parts',
                'address' => 'Jl. KH. Hasyim Ashari, Rajawali, Kec. Jambi Tim., Kota Jambi, Jambi 36123',
                'contact_person' => '081987654321',
            ],
            [
                'name' => 'UD Cipta Sparepart',
                'address' => 'Lorong Marene No.104, Eka Jaya, Kec. Jambi Sel., Kota Jambi, Jambi 36134',
                'contact_person' => '0741570310',
            ],
            [
                'name' => 'PT Prima Auto Parts',
                'address' => 'Jl. Makalam, Cempaka Putih, Kec. Jelutung, Kota Jambi, Jambi 36123',
                'contact_person' => '0741667815',
            ],
        ]);
    }
    
}
