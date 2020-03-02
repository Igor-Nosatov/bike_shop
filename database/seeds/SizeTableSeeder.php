<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sizes')->insert([
            [
                'name' => 'XX-Small, 43-48cm',
            ],
            [
                'name' => 'X-Small, 49-50cm',
            ],
            [
                'name' => 'Small, 51-53cm',
            ],
            [
                'name' => 'Medium, 54-55cm ',
            ],
            [
                'name' => 'Large, 56-58cm',
            ],
            [
                'name' => 'X-Large, 58-60cm ',
            ],
            [
                'name' => 'XX-Large, 61-63cm',
            ],
        ]);
    }
}

