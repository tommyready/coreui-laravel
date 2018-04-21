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
        	'email' => 'john.doe@example.com',
        	'password' => bcrypt('321ewq'),
        ]);
    }
}
