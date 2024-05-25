<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllergySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $allergies = [
            ['name' => 'gluten', 'description' => 'This product contains gluten.'],
            ['name' => 'gelatine', 'description' => 'This product contains gelatine.'],
            ['name' => 'AZO', 'description' => 'This product contains AZO.'],
            ['name' => 'Lactos', 'description' => 'This product contains Lactos.'],
            ['name' => 'Soja', 'description' => 'This product contains Soja.'],
        ];

        foreach ($allergies as $allergy) {
            DB::table('allergies')->insert($allergy);
        }
    }
}
