<?php

use Illuminate\Database\Seeder;

class PurchaseOrderTableSeeder extends Seeder
{
   public function run()
   {
      DB::table('purchase_orders')->truncate();
      DB::table('purchase_orders')->insert([
         [
            'reception_date'  => date('2015-12-01'),
            'supplier_id'     => 1,
            'payment_type_id' => 1,
         ],
         [
            'reception_date'  => date('2016-01-01'),
            'supplier_id'     => 2,
            'payment_type_id' => 1,
         ],
         [
            'reception_date'  => date('2016-02-01'),
            'supplier_id'     => 3,
            'payment_type_id' => 1,
         ],
         [
            'reception_date'  => date('2016-03-01'),
            'supplier_id'     => 1,
            'payment_type_id' => 1,
         ],
         [
            'reception_date'  => date('2016-04-01'),
            'supplier_id'     => 1,
            'payment_type_id' => 2,
         ],
         [
            'reception_date'  => date('2016-05-01'),
            'supplier_id'     => 2,
            'payment_type_id' => 2,
         ],
      ]);
   }
}
