<?php

use Illuminate\Database\Seeder;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            'brand'    => 'Volvo',
            'model'    => 'XC 90',
            'year'     => 2016,
            'mileage'  => '84 885',
            'price'    => 290,
            'colour'   => 'biały',
            'reserved' => 0,
           	'img_path' => 'images/volvo.jpg'
        ]);

        DB::table('cars')->insert([
            'brand'    => 'Mercedes',
            'model'    => 'CLS',
            'year'     => 2014,
            'mileage'  => '125 475',
            'price'    => 350,
            'colour'   => 'czerwony',
            'reserved' => 0,
            'img_path' => 'images/mercedes.jpg',
        ]);

        DB::table('cars')->insert([
            'brand'    => 'Volkswagen',
            'model'    => 'Polo',
            'year'     => 2017,
            'mileage'  => '12 052',
            'price'    => 129,
            'colour'   => 'czarny',
            'reserved' => 0,
            'img_path' => 'images/polo.jpg',
        ]);

        DB::table('cars')->insert([
            'brand'    => 'Audi',
            'model'    => 'Q7',
            'year'     => 2013,
            'mileage'  => '212 052',
            'price'    => 259,
            'colour'   => 'czerwony',
            'reserved' => 0,
            'img_path' => 'images/audi.jpg',
        ]);

        DB::table('cars')->insert([
            'brand'    => 'Alfa Romeo',
            'model'    => 'Giulietta',
            'year'     => 2017,
            'mileage'  => '312 052',
            'price'    => 259,
            'colour'   => 'metalik',
            'reserved' => 0,
            'img_path' => 'images/alfa.jpg',
        ]);
    }
}
