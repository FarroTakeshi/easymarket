<?php

use Illuminate\Database\Seeder;

class WarehouseTableSeeder extends Seeder
{
   public function run()
   {
      DB::table('warehouses')->truncate();
      DB::table('warehouses')->insert([
         [
            'name'    => 'Almacen 1',
            'address' => 'Av. Bolivar #3345',
         ],
      ]);
   }
}
