<?php

use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /* Comida Rapida */
        $data = [

            [
             'id'  => '1',
            'name' => "Pizza",
            'img' => "https://www.eluniverso.com/sites/default/files/styles/powgallery_1024/public/fotos/2020/05/pizza.jpg?itok=--6MaysS",
             'id_categories' => '1'
            ],
             [
             'id'  => '2',
            'name' => "Hamburguesa",
            'img' => "https://www.perfectplate.com.ve/wp-content/uploads/2018/06/cajas_hamburguesa_generic.jpg",
             'id_categories' => '1'
            ],
             [
             'id'  => '3',
            'name' => "Perros Calientes",
            'img' => "https://i1.wp.com/venezuelaparaelmundo.com/wp-content/uploads/2015/06/hot.jpg?resize=700%2C416&ssl=1",
             'id_categories' => '1'
            ],
            
        ];

        foreach ($data as $element ) 
            DB::table('articles')->insert($element );
        
        /*********************/

          /* Electrodomesticos  */
        $data = [

            [
             'id'  => '4',
            'name' => "Televisor",
            'img' => "https://www.partesdel.com/wp-content/uploads/Partes-del-Televisor...-400x339.jpg",
             'id_categories' => '2'
            ],
             [
             'id'  => '5',
            'name' => "Aire Acondicionado",
            'img' => "https://www.lg.com/cac/images/aire-acondicionado-residencial/MD06230976/gallery/1600_1.jpg",
             'id_categories' => '2'
            ],
             [
             'id'  => '6',
            'name' => "Nevera",
            'img' => "https://cdn3.volusion.com/fsnxc.yqvah/v/vspfiles/photos/B26FT70SNS-2.jpg?v-cache=1440417266",
             'id_categories' => '2'
            ],
            
        ];
        
        foreach ($data as $element ) 
            DB::table('articles')->insert($element );
        
        /*********************/



    }

}
