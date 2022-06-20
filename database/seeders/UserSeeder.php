<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        	'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin123',
            'alamat' => 'Tarutung',
            'nohp' => '081295060680',
            'role' => 'admin',
            'created_at' => '2022-06-18 13:38:40',
            'updated_at' => '2022-06-18 13:38:40',
        ]);
    }
}
