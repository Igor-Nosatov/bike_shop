<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DrivetrainBrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drivetrain_brands')->insert([
            [
                'name' => 'Shimano ',
            ],
            [
                'name' => 'SRAM',
            ],
        ]);
    }
}
