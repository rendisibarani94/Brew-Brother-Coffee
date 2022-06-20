<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
    */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $this->call(AdminSeeder::class);
        $this->call(JenisSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(UserSeeder::class);
    }
}
