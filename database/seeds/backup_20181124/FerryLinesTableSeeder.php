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
        App\FerryLine::create([
            'departure_port_id' => 1,
            'destination_port_id' => 2           
        ]);

        App\FerryLine::create([
            'departure_port_id' => 2,
            'destination_port_id' => 1           
        ]);
    }
}