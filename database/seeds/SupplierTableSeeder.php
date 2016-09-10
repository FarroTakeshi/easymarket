<?php

use Illuminate\Database\Seeder;

class SupplierTableSeeder extends Seeder
{
   public function run()
   {
      DB::table('suppliers')->truncate();
      DB::table('suppliers')->insert([
         [
            'name' => 'CompuSell',
            'ruc'  => '1028237102',
         ],
         [
            'name' => 'Bananitos',
            'ruc'  => '1073568291',
         ],
         [
            'name' => 'Moliclass',
            'ruc'  => '1009019281',
         ],
      ]);
   }
}
