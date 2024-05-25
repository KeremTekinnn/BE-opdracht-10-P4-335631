<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        // Get all product IDs
        $productIds = DB::table('products')->pluck('id');

        $firstProduct = true;

        foreach ($productIds as $productId) {
            DB::table('stores')->insert([
                'id' => $productId,
                'product_id' => $productId,
                'unit' => $faker->randomDigitNotNull,
                'amount' => $firstProduct ? null : $faker->randomNumber(3), // Make the first product have NULL amount
            ]);

            $firstProduct = false;
        }
    }
}
