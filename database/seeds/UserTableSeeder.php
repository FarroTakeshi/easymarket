<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
   public function run()
   {
      DB::table('users')->truncate();
      DB::table('users')->insert([
         [
            'first_name' => 'Takeshi',
            'last_name'  => 'Farro',
            'email'      => 'takeshi.farro@gmail.com',
            'password'   => bcrypt('1234'),
         ],
         [
            'first_name' => 'Susana',
            'last_name'  => 'Escobar',
            'email'      => 'susana.escobar@gmail.com',
            'password'   => bcrypt('1234'),
         ],
      ]);
   }
}
