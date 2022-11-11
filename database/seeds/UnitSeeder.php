<?php

use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
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
                'unit_type'=>'gram(s)',
                'description'=>'This stands as the gram unit.'
            ],
            [
                'unit_type'=>'miligram(s)',
                'description'=>'This stands as the miligram unit.'
            ]
        ];

        foreach($data as $units) {
            \App\Unit::create($units);
        }
    }
}
