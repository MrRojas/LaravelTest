<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
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
             'id'  => '1',
            'name' => "Comida Rapida",
            'img' => "https://www.comidarapida.website/wp-content/uploads/2020/05/comida-rapida-fast-food.png",
            ],
            [
                'id'  => '2',
            'name' => "Electrodomesticos",
            'img' => "http://www.electrodomesticosrey.com/wp-content/uploads/2018/08/electrodomesticos.jpg",
            ]

        ];

        foreach ($data as $element ) 
            DB::table('categories')->insert($element );
        


    }
}
