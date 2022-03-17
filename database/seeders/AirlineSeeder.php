<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AirlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('airlines')->insert([
            ['model' => 'Airbus A330', 'description' => 'Ideal for medium and long haul flight', 'capacity'=>47000 ,'created_at' => now(), 'updated_at' => now()],
            ['model' => 'Airbus A321', 'description' => 'It has the lowest emissions, noise levels and fuel consumption', 'capacity'=>24200 ,'created_at' => now(), 'updated_at' => now()],
            ['model' => 'Airbus A320', 'description' => 'An efficient, quiet and ecological plane with a load capacity of approximately 6300 kilograms, takeoff from sea leve', 'capacity'=>17600,'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
