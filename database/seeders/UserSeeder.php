<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'school_id' => 1,
            'name' => 'Diani Chandra',
            'email' => 'chandra@schoolhelp.org',
            'username' => 'chandra',
            'password' => bcrypt('chandra'),
            'phone_number' => '0123456789',
            'role' => 'schooladmin',
            'staff_id' => '123456',
            'position' => 'Headmaster',
        ]);
    }
}