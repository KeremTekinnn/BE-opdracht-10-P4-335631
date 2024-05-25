<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $products = [
            ['name' => 'Mintnopjes', 'barcode' => '8719587231278'],
            ['name' => 'Schoolkrijt', 'barcode' => '8719587326713'],
            ['name' => 'Honingdrop', 'barcode' => '8719587327836'],
            ['name' => 'Zure Beren', 'barcode' => '8719587321441'],
            ['name' => 'Cola Flesjes', 'barcode' => '8719587321237'],
            ['name' => 'Turtles', 'barcode' => '8719587322245'],
            ['name' => 'Witte Muizen', 'barcode' => '8719587328256'],
            ['name' => 'Reuzen Slangen', 'barcode' => '8719587325641'],
            ['name' => 'Zoute Rijen', 'barcode' => '8719587322739'],
            ['name' => 'Winegums', 'barcode' => '8719587327527'],
            ['name' => 'Drop Munten', 'barcode' => '8719587322345'],
            ['name' => 'Kruis Drop', 'barcode' => '8719587322265'],
            ['name' => 'Zoute Ruitjes', 'barcode' => '8719587323256'],
            ['name' => 'Drop Ninjas', 'barcode' => '8719587323277'],
        ];

        foreach ($products as $product) {
            DB::table('products')->insert($product);
        }
    }
}
