<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('site_settings')->insert([
            'logo' => 'GoldMateWhite.png',
            'phone' => '0812-3432-4224',
            'email' => 'mediapunggawatech@gmail.com',
            'address' => 'Jl. Bambe Dukuh Menanggal No.6, Dukuh Menanggal, Kec. Gayungan, Surabaya, Jawa Timur 60234',
            'facebook' => 'https://www.facebook.com/PunggawaStudio/',
            'twitter' => 'https://x.com',
            'copyright' => '© 2024 Example1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
