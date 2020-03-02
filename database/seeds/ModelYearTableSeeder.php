<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelYearTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('model_years')->insert([
            [
                'name' => '2020',
            ],
            [
                'name' => '2019',
            ],
            [
                'name' => '2017',
            ],
        ]);
    }
}
