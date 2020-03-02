<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Road Bikes',
                'image' => 'img/categories/1.jpg',
            ],
            [
                'name' => 'Adventure Road Bikes',
                'image' => 'img/categories/2.jpg',
            ],
            [
                'name' => 'Folding Bikes',
                'image' => 'img/categories/3.jpg',
            ],
            [
                'name' => 'Mountain Bikes',
                'image' => 'img/categories/4.jpg',
            ],
            [
                'name' => 'Hybrid Bikes',
                'image' => 'img/categories/5.jpg',
            ],
            [
                'name' => 'Cyclocross Bikes',
                'image' => 'img/categories/6.jpg',
            ],
            [
                'name' => 'Electric Bikes',
                'image' => 'img/categories/7.jpg',
            ],
            [
                'name' => 'Kid Bikes',
                'image' => 'img/categories/8.jpg',
            ],
        ]);
    }
}
