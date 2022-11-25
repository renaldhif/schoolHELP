<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_level_categories')->insert([
            'category_name' => 'Elementary School',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('student_level_categories')->insert([
            'category_name' => 'Junior High School',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('student_level_categories')->insert([
            'category_name' => 'Senior High School',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}