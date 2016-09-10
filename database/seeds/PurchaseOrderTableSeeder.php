<?php

use Illuminate\Database\Seeder;

class PurchaseOrderTableSeeder extends Seeder
{
   public function run()
   {
      DB::table('purchase_orders')->insert([
         [
            'reception_date' => date('2015-12-01'),
         ],
         [
            'reception_date' => date('2016-01-01'),
         ],
         [
            'reception_date' => date('2016-02-01'),
         ],
         [
            'reception_date' => date('2016-03-01'),
         ],
         [
            'reception_date' => date('2016-04-01'),
         ],
         [
            'reception_date' => date('2016-05-01'),
         ],
      ]);
   }
}
