<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductEndDateDelivery;

class ProductEndDateDeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductEndDateDelivery::create([
            'product_id' => 1,
            'end_date_delivery' => '2024-06-24',
        ]);

        ProductEndDateDelivery::create([
            'product_id' => 2,
            'end_date_delivery' => '2024-05-22',
        ]);

        ProductEndDateDelivery::create([
            'product_id' => 3,
            'end_date_delivery' => '2024-05-30',
        ]);

        ProductEndDateDelivery::create([
            'product_id' => 4,
            'end_date_delivery' => '2024-05-12',
        ]);

        ProductEndDateDelivery::create([
            'product_id' => 7,
            'end_date_delivery' => '2024-05-27',
        ]);

        ProductEndDateDelivery::create([
            'product_id' => 10,
            'end_date_delivery' => '2024-05-03',
        ]);

        ProductEndDateDelivery::create([
            'product_id' => 11,
            'end_date_delivery' => '2024-02-09',
        ]);

        ProductEndDateDelivery::create([
            'product_id' => 14,
            'end_date_delivery' => '2024-01-01',
        ]);
    }
}
