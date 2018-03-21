<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name'     => 'Sandra',
        	'email'    => 'mrs0sandwich@gmail.com',
        	'password' => bcrypt('123sandra123'),
        ]);
    }
}
