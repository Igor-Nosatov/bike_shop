<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DrivetrainGroupsetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drivetrain_groupsets')->insert([
            [
                'name' => 'Ultegra',
            ],
            [
                'name' => 'Force',
            ],
            [
                'name' => 'Tiagra',
            ],
            [
                'name' => 'Claris',
            ],
            [
                'name' => 'Apex ',
            ],
            [
                'name' => 'Sora',
            ],
            [
                'name' => 'Tourney ',
            ],
            [
                'name' => 'Red',
            ],
        ]);
    }
}

