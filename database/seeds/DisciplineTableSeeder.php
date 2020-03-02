<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DisciplineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('disciplines')->insert([
            [
                'name' => 'Road Endurance',
            ],
            [
                'name' => 'Road Race',
            ],
            [
                'name' => 'Cyclocross',
            ],
            [
                'name' => 'Adventure Road',
            ],
            [
                'name' => 'Electric',
            ],
        ]);
    }
}
