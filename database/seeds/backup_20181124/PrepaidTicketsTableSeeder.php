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
            'citizen_id' => 1,
            'ferry_line_id' => 1,
            'valid_from' => '2018-11-12',
            'valid_to' => '2019-11-12',          
        ]);

        App\PrepaidTicket::create([
            'citizen_id' => 2,
            'ferry_line_id' => 2,
            'valid_from' => '2018-11-12',
            'valid_to' => '2019-11-12',          
        ]);
    }
}


