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

		// 1
        App\City::create([
            'city_name' => 'ZAGREB'            
        ]);

		// 2
        App\City::create([
            'city_name' => 'SPLIT'            
        ]);

		// 3
        App\City::create([
            'city_name' => 'HVAR'            
        ]);

		// 4
        App\City::create([
            'city_name' => 'BRAČ'            
        ]);
		
		// 5
		App\City::create([
            'city_name' => 'VALBISKA'            
        ]);
		
		// 6
		App\City::create([
            'city_name' => 'MERAG'            
        ]);
		
		// 7
		App\City::create([
            'city_name' => 'BRESTOVA'            
        ]);
		
		// 8
		App\City::create([
            'city_name' => 'POROZINA'            
        ]);
		
		// 9
		App\City::create([
            'city_name' => 'PRIZNA'            
        ]);
		
		// 10
		App\City::create([
            'city_name' => 'ŽIGLJEN'            
        ]);
		
		// 11
		App\City::create([
            'city_name' => 'LOPAR'            
        ]);
			
		// 12
		App\City::create([
            'city_name' => 'RIJEKA'            
        ]);
		
		// 13		
		App\City::create([
            'city_name' => 'NOVALJA'            
        ]);
			
		// 14
		App\City::create([
            'city_name' => 'MALI LOŠINJ'            
        ]);
		
		// 15		
		App\City::create([
            'city_name' => 'SUSAK'            
        ]);
		
    }
}
