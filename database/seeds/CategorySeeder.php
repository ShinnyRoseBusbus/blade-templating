<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'category'=>'Oil',
                'description'=>'any of numerous greasy flammable usually liquid substances from plant, animal, or mineral sources that do not dissolve in water and are used especially as lubricants, fuels, and food..'
            ],
            [
                'category'=>'Powder',
                'description'=>'A powder is a dry, bulk solid composed of many very fine particles that may flow freely when shaken or tilted.'
            ],
           
        ];

        foreach($data as $categories) {
            \App\Category::create($categories);
        }
    }
}
