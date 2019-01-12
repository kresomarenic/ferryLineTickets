<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        App\City::create([
            'city_name' => 'ZAGREB'            
        ]);

        App\City::create([
            'city_name' => 'SPLIT'            
        ]);

        App\City::create([
            'city_name' => 'HVAR'            
        ]);

        App\City::create([
            'city_name' => 'BRAČ'            
        ]);
    }
}
