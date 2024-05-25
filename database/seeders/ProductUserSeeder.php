<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


     public function run()
     {
         DB::table('product_users')->insert([
             ['product_id' => 1, 'user_id' => 1, 'amount' => 23, 'datedelivery' => '2024-04-09', 'datenextdelivery' => '2024-04-16'],
             ['product_id' => 1, 'user_id' => 1, 'amount' => 21, 'datedelivery' => '2024-04-18', 'datenextdelivery' => '2024-04-25'],
             ['product_id' => 2, 'user_id' => 1, 'amount' => 12, 'datedelivery' => '2024-04-09', 'datenextdelivery' => '2024-04-16'],
             ['product_id' => 3, 'user_id' => 1, 'amount' => 11, 'datedelivery' => '2024-04-10', 'datenextdelivery' => '2024-04-17'],
             ['product_id' => 4, 'user_id' => 2, 'amount' => 16, 'datedelivery' => '2024-04-14', 'datenextdelivery' => '2024-04-21'],
             ['product_id' => 4, 'user_id' => 2, 'amount' => 23, 'datedelivery' => '2024-04-21', 'datenextdelivery' => '2024-04-28'],
             ['product_id' => 5, 'user_id' => 2, 'amount' => 45, 'datedelivery' => '2024-04-14', 'datenextdelivery' => '2024-04-21'],
             ['product_id' => 6, 'user_id' => 2, 'amount' => 30, 'datedelivery' => '2024-04-14', 'datenextdelivery' => '2024-04-21'],
             ['product_id' => 7, 'user_id' => 3, 'amount' => 12, 'datedelivery' => '2024-04-12', 'datenextdelivery' => '2024-04-19'],
             ['product_id' => 7, 'user_id' => 3, 'amount' => 23, 'datedelivery' => '2024-04-19', 'datenextdelivery' => '2024-04-26'],
             ['product_id' => 8, 'user_id' => 3, 'amount' => 12, 'datedelivery' => '2024-04-10', 'datenextdelivery' => '2024-04-17'],
             ['product_id' => 9, 'user_id' => 3, 'amount' => 1, 'datedelivery' => '2024-04-11', 'datenextdelivery' => '2024-04-18'],
             ['product_id' => 10, 'user_id' => 4, 'amount' => 24, 'datedelivery' => '2024-04-16', 'datenextdelivery' => '2024-04-30'],
             ['product_id' => 11, 'user_id' => 5, 'amount' => 47, 'datedelivery' => '2024-04-10', 'datenextdelivery' => '2024-04-17'],
             ['product_id' => 11, 'user_id' => 5, 'amount' => 60, 'datedelivery' => '2024-04-19', 'datenextdelivery' => '2024-04-26'],
             ['product_id' => 12, 'user_id' => 5, 'amount' => 45, 'datedelivery' => '2024-04-11', 'datenextdelivery' => null],
             ['product_id' => 13, 'user_id' => 5, 'amount' => 23, 'datedelivery' => '2024-04-12', 'datenextdelivery' => null],
             ['product_id' => 14, 'user_id' => 7, 'amount' => 20, 'datedelivery' => '2024-04-14', 'datenextdelivery' => null],
         ]);
     }
}
