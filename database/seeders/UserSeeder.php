<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            [
                'name' => 'Venco',
                'email' => 'venco@gmail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Bert van Linge',
                'number' => 'L1029384719',
                'mobile' => '06-28493827',
                'contact_id' => 1,
            ],
            [
                'name' => 'Astra Sweets',
                'email' => 'astrasweets@gmail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Jasper del Monte',
                'number' => 'L1029284315',
                'mobile' => '06-39398734',
                'contact_id' => 2,
            ],
            [
                'name' => 'Haribo',
                'email' => 'haribo@gmail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Sven Stalman',
                'number' => 'L1029324748',
                'mobile' => '06-24383291',
                'contact_id' => 3,
            ],
            [
                'name' => 'Basset',
                'email' => 'basset@gmail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Joyce Stelterberg',
                'number' => 'L1023845773',
                'mobile' => '06-48293823',
                'contact_id' => 4,
            ],
            [
                'name' => 'De Bron',
                'email' => 'debron@gmail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Remco Veenstra',
                'number' => 'L1023857736',
                'mobile' => '06-34291234',
                'contact_id' => 5,
            ],
            [
                'name' => 'Quality Street',
                'email' => 'qualitystreet@gmail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Johan Nooij',
                'number' => 'L1029234586',
                'mobile' => '06-23458456',
                'contact_id' => 6,
            ],
            [
                'name' => 'Hom Ken Food',
                'email' => 'homkenfood@gmail.com',
                'password' => Hash::make('password'),
                'contact_person' => 'Hom Ken',
                'number' => 'L1029234599',
                'mobile' => '06-23458477',
                'contact_id' => null,
            ],
        ]);
    }
}
