<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FrameMaterialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('frame_materials')->insert([
            [
                'name' => 'Aluminium',
            ],
            [
                'name' => 'Carbon',
            ],
            [
                'name' => 'Steel',
            ],
        ]);
    }
}

