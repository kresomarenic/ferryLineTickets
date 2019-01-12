<?php

use Illuminate\Database\Seeder;

class PrepaidTicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\PrepaidTicket::create([
            'citizen_id' => 1, // G.Delisimunovic, Zagreb
            'ferry_line_id' => 3, // PRIZNA - ŽIGLJEN (PAG)
            'valid_from' => '2018-11-12',
            'valid_to' => '2019-11-12',          
        ]);

        App\PrepaidTicket::create([
            'citizen_id' => 2, // K. Marenic, Zagreb 
            'ferry_line_id' => 4, // VALBISKA (KRK) - LOPAR (RAB)
            'valid_from' => '2018-11-13',
            'valid_to' => '2019-11-13',          
        ]);
		
		App\PrepaidTicket::create([
            'citizen_id' => 4, // Srecko Razularko, Porozina
            'ferry_line_id' => 2, // BRESTOVA - POROZINA (CRES)
            'valid_from' => '2018-11-14',
            'valid_to' => '2019-11-14',          
        ]);
		
		App\PrepaidTicket::create([
            'citizen_id' => 5, // Goran Bare, Novalja
            'ferry_line_id' => 5, // RIJEKA - NOVALJA (PAG)
            'valid_from' => '2018-11-15',
            'valid_to' => '2019-11-15',          
        ]);

        App\PrepaidTicket::create([
            'citizen_id' => 6, // Spori Penzić, Susak
            'ferry_line_id' => 7, // MALI LOŠINJ SUSAK
            'valid_from' => '2018-11-16',
            'valid_to' => '2019-11-16',          
        ]);
    }
}


