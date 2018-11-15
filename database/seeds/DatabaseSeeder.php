<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$seeders = [
    		// 'CarsSeeder',
    		// 'UserSeeder'
    	];

    	foreach ($seeders as $seeder) {
    		$this->call($seeder);
    	};
        
    }
}
