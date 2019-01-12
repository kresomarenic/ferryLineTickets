<?php

use Illuminate\Database\Seeder;

class CitizensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		// 1
        App\Citizen::create([
            'citizen_name' => 'Gordana',
            'citizen_surname' => 'Delišimunović', 
            'citizen_oib' => '12345678901', 
            'city_id' => 1, 
            'category_id' => 1            
        ]);

		// 2
        App\Citizen::create([
            'citizen_name' => 'Krešimir',
            'citizen_surname' => 'Marenić', 
            'citizen_oib' => '10987654321', 
            'city_id' => 1, 
            'category_id' => 1            
        ]);
		
		// 3
		App\Citizen::create([
            'citizen_name' => 'Pero',
            'citizen_surname' => 'Studoš', 
            'citizen_oib' => '87329063891', 
            'city_id' => 2, 
            'category_id' => 2            
        ]);

		// 4
        App\Citizen::create([
            'citizen_name' => 'Srećko',
            'citizen_surname' => 'Razularko', 
            'citizen_oib' => '28740193681', 
            'city_id' => 8, 
            'category_id' => 2            
        ]);
		
		// 5
		App\Citizen::create([
            'citizen_name' => 'Goran',
            'citizen_surname' => 'Bare', 
            'citizen_oib' => '28730947531', 
            'city_id' => 13, 
            'category_id' => 3            
        ]);

		// 6
        App\Citizen::create([
            'citizen_name' => 'Spori',
            'citizen_surname' => 'Penzić', 
            'citizen_oib' => '57480154962', 
            'city_id' => 15, 
            'category_id' => 3            
        ]);
    }
}