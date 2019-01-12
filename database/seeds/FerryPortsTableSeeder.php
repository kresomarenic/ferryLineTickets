<?php

use Illuminate\Database\Seeder;

class FerryPortsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		// 1
        App\FerryPort::create([
            'ferry_port_name' => 'VALBISKA (KRK)',
            'city_id' => 5           
        ]);
        
		// 2
        App\FerryPort::create([
            'ferry_port_name' => 'MERAG (CRES)',
            'city_id' => 6           
        ]);
		
		// 3
		App\FerryPort::create([
            'ferry_port_name' => 'BRESTOVA',
            'city_id' => 7           
        ]);
		
		// 4
		App\FerryPort::create([
            'ferry_port_name' => 'POROZINA (CRES)',
            'city_id' => 8            
        ]);
        
		// 5
        App\FerryPort::create([
            'ferry_port_name' => 'PRIZNA',
            'city_id' => 9           
        ]);
		
		// 6
		App\FerryPort::create([
            'ferry_port_name' => 'ŽIGLJEN (PAG)',
            'city_id' => 10           
        ]);
		
		// 7
		App\FerryPort::create([
            'ferry_port_name' => 'LOPAR (RAB)',
            'city_id' => 11           
        ]);
        
		// 8
        App\FerryPort::create([
            'ferry_port_name' => 'RIJEKA',
            'city_id' => 12           
        ]);
		
		// 9
		App\FerryPort::create([
            'ferry_port_name' => 'NOVALJA (PAG)',
            'city_id' => 13           
        ]);
		
		// 10
		App\FerryPort::create([
            'ferry_port_name' => 'MALI LOŠINJ',
            'city_id' => 14           
        ]);

		// 11
        App\FerryPort::create([
            'ferry_port_name' => 'SUSAK',
            'city_id' => 15           
        ]);

    }
}
