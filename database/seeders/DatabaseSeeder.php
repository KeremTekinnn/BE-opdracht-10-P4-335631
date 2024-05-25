<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ContactSeeder::class,
            Userseeder::class,
            ProductSeeder::class,
            AllergySeeder::class,
            ProductAllergySeeder::class,
            ProductUserSeeder::class,
            StoreSeeder::class,
            ProductEndDateDeliverySeeder::class,
        ]);
    }
}
