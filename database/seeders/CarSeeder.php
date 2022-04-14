<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert(array(
            array(
                'brand' => "BMW",
                'model' => 'M3',
                'production_year' => 2019,
            ),
            array(
                'brand' => "Mercedes Benz",
                'model' => 'CL',
                'production_year' => 2015,
            ),
            array(
                'brand' => "Skoda",
                'model' => 'Octavia A5',
                'production_year' => 2008,
            ),
            array(
                'brand' => "Alfa Romeo",
                'model' => '145',
                'production_year' => 1998,
            ),
            array(
                'brand' => "Volkswagen",
                'model' => 'Amarok',
                'production_year' => 2012,
            )
        ));
    }
}
