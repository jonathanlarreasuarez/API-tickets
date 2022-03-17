<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('tickets')->insert([
            ['number_stopover' => 2, 'price' => 800, 'duration'=>150 , 'airline_id'=>1,'created_at' => now(), 'updated_at' => now()],
            ['number_stopover' => 3, 'price' => 500, 'duration'=>240 , 'airline_id'=>2, 'created_at' => now(), 'updated_at' => now()],
            ['number_stopover' => 1, 'price' => 1100, 'duration'=>120, 'airline_id'=>3, 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
