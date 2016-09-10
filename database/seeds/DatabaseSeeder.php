<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   public function run()
   {
      //Area
      $this->call(AreaTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
   }
}
