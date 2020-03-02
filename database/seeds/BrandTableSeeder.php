<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandTableSeeder extends Seeder
{

    
    public function run()
    {
        DB::table('brands')->insert([
            [
                'name' => 'Cannondale ',
                'image' => 'img/brands/1.jpg',
            ],
            [
                'name' => 'Specialized',
                'image' => 'img/brands/2.jpg',
            ],
            [
                'name' => 'Trek',
                'image' => 'img/brands/3.jpg',
            ],
            [
                'name' => 'Pinnacle',
                'image' => 'img/brands/4.jpg',
            ],
            [
                'name' => 'Cube',
                'image' => 'img/brands/5.jpg',
            ],
            [
                'name' => 'Bianchi',
                'image' => 'img/brands/6.jpg',
            ],
            [
                'name' => 'Colnago',
                'image' => 'img/brands/7.jpg',
            ],
            [
                'name' => '3T',
                'image' => 'img/brands/8.jpg',
            ],
            [
                'name' => 'Genesis',
                'image' => 'img/brands/9.jpg',
            ],
            [
                'name' => 'BMC',
                'image' => 'img/brands/10.jpg',
            ],
        ]);
    }
}






