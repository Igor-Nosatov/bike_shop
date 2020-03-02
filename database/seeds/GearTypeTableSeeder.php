<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GearTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gear_types')->insert([
            [
                'name' => 'Mechanical',
            ],
            [
                'name' => 'Electronic',
            ],
        ]);
    }
}

