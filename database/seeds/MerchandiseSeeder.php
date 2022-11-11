<?php

use Illuminate\Database\Seeder;

class MerchandiseSeeder extends Seeder
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
                'brand_name'=>'chicken oil',
                'product_name'=>'Chicken Oil Suace 150ml',
                'retail_price'=>'25.00',
                'wholesale_price'=>'5.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'100',
                'unit_id'=>'2',
                'category_id'=>'2'
            ],
            [
                'brand_name'=>'Surf',
                'product_name'=>'Surf Powder 530g',
                'retail_price'=>'8.00',
                'wholesale_price'=>'25.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'25',
                'unit_id'=>'2',
                'category_id'=>'1'
            ]


        ];

        foreach($data as $merchandises) {
            \App\Merchandise::create($merchandises);
        }
    }
}
