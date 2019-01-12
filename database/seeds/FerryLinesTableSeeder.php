<?php

use Illuminate\Database\Seeder;

class FerryLinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		// 1
        App\FerryLine::create([
            'departure_port_id' => 1,
            'destination_port_id' => 2            
        ]);
		
		// 2
		App\FerryLine::create([
            'departure_port_id' => 3,
            'destination_port_id' => 4           
        ]);
		
		// 3
		App\FerryLine::create([
            'departure_port_id' => 5,
            'destination_port_id' => 6           
        ]);
		
		// 4
		App\FerryLine::create([
            'departure_port_id' => 1,
            'destination_port_id' => 7           
        ]);
		
		// 5
		App\FerryLine::create([
            'departure_port_id' => 8,
            'destination_port_id' => 9           
        ]);
		
		// 6
		App\FerryLine::create([
            'departure_port_id' => 8,
            'destination_port_id' => 10           
        ]);
		
		// 7
		App\FerryLine::create([
            'departure_port_id' => 10,
            'destination_port_id' => 11           
        ]);

        
    }
}