<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelFamilyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('model_families')->insert([
            [
                'name' => 'BMC Roadmachine',
            ],
            [
                'name' => 'BMC Teammachine SLR01',
            ],
            [
                'name' => 'Cannondale CAAD13',
            ],
            [
                'name' => 'Cannondale CAAD Optimo',
            ],
            [
                'name' => 'Specialized Roubaix',
            ],
            [
                'name' => 'Pinnacle Laterite',
            ],
            [
                'name' => 'Pinnacle Arkose',
            ],
            [
                'name' => 'Cannondale Topstone',
            ],
            [
                'name' => 'Cannondale Synapse',
            ],
            [
                'name' => 'Cannondale Supersix ',
            ],
        ]);
    }
}
