<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schools')->insert([
            'school_name' => 'School Kebangsaan HELP',
            'school_address' => 'Jl. Danau Ranau, Kampung Baru, 93050 Kuching, Sarawak',
            'school_city' => 'Kuching',
        ]);

        DB::table('schools')->insert([
            'school_name' => 'Wisma HELP',
            'school_address' => 'Pusat Kota Damansara, 50490 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur',
            'school_city' => 'Kuala Lumpur',
        ]);

        DB::table('schools')->insert([
            'school_name' => 'HELP University',
            'school_address' => 'Jalan Semantan, Bukit Damansara, 50490 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur',
            'school_city' => 'Kuala Lumpur',
        ]);
    }
}