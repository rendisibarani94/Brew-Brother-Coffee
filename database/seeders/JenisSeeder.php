<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis')->insert([
        	'nama' => 'Coffee',
        ]);

        DB::table('jenis')->insert([
        	'nama' => 'Non Coffee',
        ]);

        DB::table('jenis')->insert([
        	'nama' => 'Additional',
        ]);

        DB::table('jenis')->insert([
        	'nama' => 'Main Course',
        ]);

        DB::table('jenis')->insert([
        	'nama' => 'Dim Sum',
        ]);

        DB::table('jenis')->insert([
        	'nama' => 'Pasta',
        ]);

        DB::table('jenis')->insert([
        	'nama' => 'Roti Bakar',
        ]);
    }
}
