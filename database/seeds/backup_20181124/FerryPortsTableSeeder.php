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
        App\FerryPort::create([
            'ferry_port_name' => 'STARI GRAD',
            'city_id' => 3           
        ]);

        {
            App\FerryPort::create([
                'ferry_port_name' => 'SUPETAR',
                'city_id' => 4           
            ]);
    }
}

}
