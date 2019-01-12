<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        App\Category::create([
            'category_name' => 'Redovni',
            'label' => 'RE',
            'discount' => 0
        ]);
        
        // 2
        App\Category::create([
            'category_name' => 'Studenti',
            'label' => 'ST',
            'discount' => 35
        ]);

        // 3
        App\Category::create([
            'category_name' => 'Umirovljenici',
            'label' => 'UM',
            'discount' => 50
        ]);
    }
}


