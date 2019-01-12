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
        App\Citizen::create([
            'citizen_name' => 'Gordana',
            'citizen_surname' => 'Delišimunović', 
            'citizen_oib' => '12345678901', 
            'city_id' => 2, 
            'category_id' => 3            
        ]);

        App\Citizen::create([
            'citizen_name' => 'Krešimir',
            'citizen_surname' => 'Marenić', 
            'citizen_oib' => '10987654321', 
            'city_id' => 1, 
            'category_id' => 2            
        ]);
    }
}

