<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	'name' => 'Espresso Single',
            'harga' => 18000,
            'deskripsi' => 'Minuman Kopi Esspresso dengan ukuran gelas esspresso one shot.',
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Espresso Double',
            'deskripsi' => 'Minuman Kopi Esspresso dengan ukuran gelas esspresso two shot.',
            'harga' => 25000,
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Cappucino',
            'deskripsi' => 'Minuman Kopi Cappucino dengan ukuran gelas sedang.',
            'harga' => 22000,
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Cafe Late',
            'deskripsi' => 'Minuman Kopi Cafe late dengan ukuran gelas sedang.',
            'harga' => 24000,
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Machiato',
            'deskripsi' => 'Minuman Kopi Machiato dengan ukuran gelas sedang.',
            'harga' => 22000,
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Piccollo',
            'deskripsi' => 'Minuman Kopi Picollo dengan ukuran gelas sedang.',
            'harga' => 20000,
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Flat White',
            'deskripsi' => 'Minuman Kopi Flat White dengan ukuran gelas sedang.',
            'harga' => 22000,
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Mocha',
            'deskripsi' => 'Minuman Kopi Mocha dengan ukuran gelas sedang.',
            'harga' => 23000,
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Tiramisu',
            'deskripsi' => 'Minuman Kopi Tiramisu dengan ukuran gelas sedang.',
            'harga' => 23000,
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Affogato Single',
            'deskripsi' => 'Minuman Kopi Affogato Single dengan ukuran gelas affogato single.',
            'harga' => 23000,
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Affogato Double',
            'deskripsi' => 'Minuman Kopi Affogato Single dengan ukuran gelas affogato double.',
            'harga' => 28000,
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Affogato Orgasm',
            'deskripsi' => 'Minuman Kopi Affogato Orgasm dengan ukuran gelas sedang.',
            'harga' => 33000,
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Americano',
            'deskripsi' => 'Minuman Kopi Americano Orgasm dengan ukuran gelas sedang.',
            'harga' => 20000,
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Espresso Susu',
            'deskripsi' => 'Minuman Kopi Espresso Susu dengan ukuran gelas sedang.',
            'harga' => 25000,
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Ice Coffee',
            'deskripsi' => 'Minuman Ice Coffee dengan ukuran gelas sedang.',
            'harga' =>25000,
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Romano Coffee',
            'deskripsi' => 'Minuman Kopi Romano Coffee dengan ukuran gelas sedang.',
            'harga' => 28000,
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Strawberry Coffe',
            'deskripsi' => 'Minuman Kopi Strawberry Coffee dengan ukuran gelas sedang.',
            'harga' => 28000,
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Sanger Coffe',
            'deskripsi' => 'Minuman Kopi Sanger Coffee dengan ukuran gelas kecil.',
            'harga' => 25000,
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Caramel Machiato',
            'deskripsi' => 'Minuman Kopi Caramel Machiato dengan ukuran gelas sedang.',
            'harga' => 26000,
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Aren Coffee',
            'deskripsi' => 'Minuman Kopi Aren Coffee dengan ukuran gelas sedang.',
            'harga' => 23000,
            'jenis_id' => 1,
        ]);

        DB::table('products')->insert([
        	'name' => 'Red Velvet Flavour',
            'deskripsi' => 'Minuman Non Kopi Red Velvet dengan ukuran gelas sedang.',
            'harga' => 22000,
            'jenis_id' => 2,
        ]);

        DB::table('products')->insert([
        	'name' => 'Green Matcha',
            'deskripsi' => 'Minuman Green Matcha dengan ukuran gelas sedang.',
            'harga' => 22000,
            'jenis_id' => 2,
        ]);

        DB::table('products')->insert([
        	'name' => 'Charcoal',
            'deskripsi' => 'Minuman Charcoal dengan ukuran gelas sedang.',
            'harga' => 22000,
            'jenis_id' => 2,
        ]);

        DB::table('products')->insert([
        	'name' => 'Taro',
            'deskripsi' => 'Minuman Taro dengan ukuran gelas sedang.',
            'harga' => 22000,
            'jenis_id' => 2,
        ]);

        DB::table('products')->insert([
        	'name' => 'Caramel',
            'deskripsi' => 'Minuman Caramel dengan ukuran gelas sedang.',
            'harga' => 22000,
            'jenis_id' => 2,
        ]);

        DB::table('products')->insert([
        	'name' => 'Thai Tea',
            'deskripsi' => 'Minuman Thai Tea dengan ukuran gelas sedang.',
            'harga' => 25000,
            'jenis_id' => 2,
        ]);

        DB::table('products')->insert([
        	'name' => 'Lemon Tea',
            'deskripsi' => 'Minuman Lemon Tea dengan ukuran gelas sedang.',
            'harga' => 15000,
            'jenis_id' => 2,
        ]);

        DB::table('products')->insert([
        	'name' => 'Lychee Tea',
            'deskripsi' => 'Minuman Lychee Tea dengan ukuran gelas sedang.',
            'harga' => 22000,
            'jenis_id' => 2,
        ]);

        DB::table('products')->insert([
        	'name' => 'Sweet Tea',
            'deskripsi' => 'Minuman Sweet Tea dengan ukuran gelas sedang.',
            'harga' => 8000,
            'jenis_id' => 2,
        ]);

        DB::table('products')->insert([
        	'name' => 'Chocolate',
            'deskripsi' => 'Minuman Chocolate dengan ukuran gelas sedang.',
            'harga' => 22000,
            'jenis_id' => 2,
        ]);

        DB::table('products')->insert([
        	'name' => 'Milo Dyno',
            'deskripsi' => 'Minuman Milo Dyno dengan ukuran gelas sedang.',
            'harga' => 22000,
            'jenis_id' => 2,
        ]);

        DB::table('products')->insert([
        	'name' => 'Vanilla',
            'deskripsi' => 'Minuman Vanilla dengan ukuran gelas sedang.',
            'harga' => 22000,
            'jenis_id' => 2,
        ]);

        DB::table('products')->insert([
        	'name' => 'Badak',
            'deskripsi' => 'Minuman Badak dengan ukuran gelas sedang.',
            'harga' => 10000,
            'jenis_id' => 2,
        ]);

        DB::table('products')->insert([
        	'name' => 'Mineral Water',
            'deskripsi' => 'Air Minheral dengan ukuran gelas sedang.',
            'harga' => 5000,
            'jenis_id' => 2,
        ]);

        DB::table('products')->insert([
        	'name' => 'Extra Syrup',
            'deskripsi' => 'Tambahan extra syrup pada Minuman',
            'harga' => 8000,
            'jenis_id' => 3,
        ]);

        DB::table('products')->insert([
        	'name' => 'Extra Shoot',
            'deskripsi' => 'Tambahan extra shoot pada Minuman',
            'harga' => 8000,
            'jenis_id' => 3,
        ]);

        DB::table('products')->insert([
        	'name' => 'Extra Float',
            'deskripsi' => 'Tambahan extra float pada Minuman',
            'harga' => 8000,
            'jenis_id' => 3,
        ]);

        DB::table('products')->insert([
        	'name' => 'Nasi Goreng',
            'deskripsi' => 'Nasi Goreng ukuran Reguler',
            'harga' => 25000,
            'jenis_id' => 4,
        ]);

        DB::table('products')->insert([
        	'name' => 'Indomie Rebus Normal',
            'deskripsi' => 'Indomie Rebus Normal ukuran Regular',
            'harga' => 18000,
            'jenis_id' => 4,
        ]);

        DB::table('products')->insert([
        	'name' => 'Indomie Rebus Abnormal',
            'deskripsi' => 'Nasi Goreng Abnormal ukuran Regular',
            'harga' => 20000,
            'jenis_id' => 4,
        ]);

        DB::table('products')->insert([
        	'name' => 'Indomie Goreng Normal',
            'deskripsi' => 'Mie Goreng Normal ukuran Regular',
            'harga' => 18000,
            'jenis_id' => 4,
        ]);

        DB::table('products')->insert([
        	'name' => 'Indomie Goreng Oriental',
            'deskripsi' => 'Mie Goreng Oriental ukuran Regular',
            'harga' => 20000,
            'jenis_id' => 4,
        ]);

        DB::table('products')->insert([
        	'name' => 'Chicken Teriyaki',
            'deskripsi' => 'Chicken Teriyaki ukuran Regular',
            'harga' => 28000,
            'jenis_id' => 4,
        ]);

        DB::table('products')->insert([
        	'name' => 'Bakso',
            'deskripsi' => 'Bakso ukuran Regular',
            'harga' => 23000,
            'jenis_id' => 4,
        ]);

        DB::table('products')->insert([
        	'name' => 'Siomay',
            'deskripsi' => 'Bakso ukuran Regular',
            'harga' => 25000,
            'jenis_id' => 4,
        ]);

        DB::table('products')->insert([
        	'name' => 'Pangsit Goreng',
            'deskripsi' => 'Pangsit Goreng ukuran Regular',
            'harga' => 24000,
            'jenis_id' => 5,
        ]);

        DB::table('products')->insert([
        	'name' => 'Dimsum Ayam',
            'deskripsi' => 'Dimsum Ayam ukuran Regular',
            'harga' => 20000,
            'jenis_id' => 5,
        ]);

        DB::table('products')->insert([
        	'name' => 'Dimsum Kepitinng',
            'deskripsi' => 'Dimsum Kepiting ukuran Regular',
            'harga' => 22000,
            'jenis_id' => 5,
        ]);

        DB::table('products')->insert([
        	'name' => 'Dimsum Rumput Laut',
            'deskripsi' => 'Dimsum Rumput Laut ukuran Regular',
            'harga' => 23000,
            'jenis_id' => 5,
        ]);

        DB::table('products')->insert([
        	'name' => 'Dimsum Udang',
            'deskripsi' => 'Dimsum Udang ukuran Regular',
            'harga' => 23000,
            'jenis_id' => 5,
        ]);

        DB::table('products')->insert([
        	'name' => 'Fettucini',
            'deskripsi' => 'Pasta Futtucini ukuran Regular',
            'harga' => 27000,
            'jenis_id' => 6,
        ]);

        DB::table('products')->insert([
        	'name' => 'Spaghetti',
            'deskripsi' => 'Pasta Spaghetti ukuran Regular',
            'harga' => 27000,
            'jenis_id' => 6,
        ]);

        DB::table('products')->insert([
        	'name' => 'Coklat',
            'deskripsi' => 'Roti Bakar dengan Rasa Coklat',
            'harga' => 17000,
            'jenis_id' => 7,
        ]);

        DB::table('products')->insert([
        	'name' => 'Coke',
            'deskripsi' => 'Roti Bakar dengan Rasa Coke',
            'harga' => 20000,
            'jenis_id' => 7,
        ]);

        DB::table('products')->insert([
        	'name' => 'Strawberry',
            'deskripsi' => 'Roti Bakar dengan Rasa Strawberry',
            'harga' => 17000,
            'jenis_id' => 7,
        ]);

        DB::table('products')->insert([
        	'name' => 'Kacang',
            'deskripsi' => 'Roti Bakar dengan Rasa Kacang',
            'harga' => 17000,
            'jenis_id' => 7,
        ]);

        DB::table('products')->insert([
        	'name' => 'Keju',
            'deskripsi' => 'Roti Bakar dengan Rasa Keju',
            'harga' => 18000,
            'jenis_id' => 7,
        ]);

        DB::table('products')->insert([
        	'name' => 'Srikaya',
            'deskripsi' => 'Roti Bakar dengan Rasa Srikaya',
            'harga' => 18000,
            'jenis_id' => 7,
        ]);

        DB::table('products')->insert([
        	'name' => 'Nanas',
            'deskripsi' => 'Roti Bakar dengan Rasa Nanas',
            'harga' => 17000,
            'jenis_id' => 7,
        ]);

        DB::table('products')->insert([
        	'name' => 'Milo',
            'deskripsi' => 'Roti Bakar dengan Rasa Milo',
            'harga' => 22000,
            'jenis_id' => 7,
        ]);

        DB::table('products')->insert([
        	'name' => 'Rovamaltine',
            'deskripsi' => 'Roti Bakar dengan Rasa Rovamaltine',
            'harga' => 25000,
            'jenis_id' => 7,
        ]);

        DB::table('products')->insert([
        	'name' => 'Pisang Coklat',
            'deskripsi' => 'Roti Bakar dengan Rasa Pisang Coklat',
            'harga' => 22000,
            'jenis_id' => 7,
        ]);

        DB::table('products')->insert([
        	'name' => 'Red Velvet',
            'deskripsi' => 'Roti Bakar dengan Rasa Red Velvet',
            'harga' => 22000,
            'jenis_id' => 7,
        ]);

        DB::table('products')->insert([
        	'name' => 'Cappucion',
            'deskripsi' => 'Roti Bakar dengan Rasa Cappucion',
            'harga' => 22000,
            'jenis_id' => 7,
        ]);

        DB::table('products')->insert([
        	'name' => 'Hazelnut',
            'deskripsi' => 'Roti Bakar dengan Rasa Hazelnut',
            'harga' => 22000,
            'jenis_id' => 7,
        ]);

        DB::table('products')->insert([
        	'name' => 'Green Matcha Flavour',
            'deskripsi' => 'Roti Bakar dengan Rasa Green Matcha',
            'harga' => 22000,
            'jenis_id' => 7,
        ]);

        DB::table('products')->insert([
        	'name' => 'Nutella',
            'deskripsi' => 'Roti Bakar dengan Rasa Nuttela',
            'harga' => 25000,
            'jenis_id' => 7,
        ]);
    }
}
