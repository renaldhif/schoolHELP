<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResourceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resource_categories')->insert([
            'category_name' => 'Mobile Device',
        ]);

        DB::table('resource_categories')->insert([
            'category_name' => 'Personal Computer',
        ]);
        DB::table('resource_categories')->insert([
            'category_name' => 'Networking Equipment',
        ]);
    }
}