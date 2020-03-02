<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrakeTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brake__types')->insert([
            [
                'name' => 'Hydraulic Disc',
            ],
            [
                'name' => 'Rim',
            ],
            [
                'name' => 'Mechanical Disc',
            ],
        ]);
    }
}

