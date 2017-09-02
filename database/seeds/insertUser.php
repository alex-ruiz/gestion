<?php

use Illuminate\Database\Seeder;

class insertUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'name' => 'tomas',
          'email' => 'blacktarg16@gmail.com',
          'password' => Hash::make('tomas'),
          'remember_token' => str_random(10)
        ]);
    }
}
