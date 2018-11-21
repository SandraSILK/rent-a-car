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
            // 'VehiclesSeeder',
        ];

        foreach ($seeders as $seeder) {
            $this->call($seeder);
        };
        
    }
}
