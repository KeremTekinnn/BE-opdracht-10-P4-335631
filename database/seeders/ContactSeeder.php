<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            [
                'street' => 'Van Gilslaan',
                'housenumber' => '34',
                'zipcode' => '1045CB',
                'city' => 'Hilvarenbeek',
            ],
            [
                'street' => 'Den Dolderpad',
                'housenumber' => '2',
                'zipcode' => '1067RC',
                'city' => 'Utrecht',
            ],
            [
                'street' => 'Fredo Raalteweg',
                'housenumber' => '257',
                'zipcode' => '1236OP',
                'city' => 'Nijmegen',
            ],
            [
                'street' => 'Bertrand Russellhof',
                'housenumber' => '21',
                'zipcode' => '2034AP',
                'city' => 'Den Haag',
            ],
            [
                'street' => 'Leon van Bonstraat',
                'housenumber' => '213',
                'zipcode' => '145XC',
                'city' => 'Lunteren',
            ],
            [
                'street' => 'Bea van Lingenlaan',
                'housenumber' => '234',
                'zipcode' => '2197FG',
                'city' => 'Sint Pancras',
            ],
        ]);
    }
}
