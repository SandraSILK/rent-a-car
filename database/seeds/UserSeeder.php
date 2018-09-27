<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Admin',
            'last_name'  => 'Admin',
            'phone'      => '123',
            'email'      => 'admin@example',
            'password'   => bcrypt('password123'),
            'role'       => 1,
            'api_token'  => Hash::make('password123'),
        ]);
    }
}
