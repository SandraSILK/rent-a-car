<?php

use Illuminate\Database\Seeder;

class VehiclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicles')->insert([
            'brand'    => 'Volvo',
            'model'    => 'XC 90',
            'year'     => 2016,
            'mileage'  => '84 885',
            'price'    => 290,
            'colour'   => 'czarny',
           	'file'     => 'images/volvo.jpg',
            'slug'     => 'volvo-xc-90',
        ]);

        DB::table('vehicles')->insert([
            'brand'    => 'Mercedes',
            'model'    => 'CLS',
            'year'     => 2014,
            'mileage'  => '125 475',
            'price'    => 350,
            'colour'   => 'biały',
            'file'     => 'images/mercedes.jpg',
            'slug'     => 'mercedecs-cls',
        ]);

        DB::table('vehicles')->insert([
            'brand'    => 'Volkswagen',
            'model'    => 'Passat',
            'year'     => 2017,
            'mileage'  => '12 052',
            'price'    => 129,
            'colour'   => 'srebrny',
            'file'     => 'images/passat.jpg',
            'slug'     => 'volkswagen-passat',
        ]);

        DB::table('vehicles')->insert([
            'brand'    => 'Audi',
            'model'    => 'Q7',
            'year'     => 2013,
            'mileage'  => '212 052',
            'price'    => 259,
            'colour'   => 'czarny',
            'file'     => 'images/audi.jpg',
            'slug'     => 'audi-q7',
        ]);

        DB::table('vehicles')->insert([
            'brand'    => 'Alfa Romeo',
            'model'    => 'Giulietta',
            'year'     => 2017,
            'mileage'  => '312 052',
            'price'    => 259,
            'colour'   => 'biały',
            'file'     => 'images/alfa-romeo.jpg',
            'slug'     => 'alfa-romeo-giulietta',
        ]);
    }
}
