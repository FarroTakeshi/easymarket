<?php

use Illuminate\Database\Seeder;

class OrderDetailTableSeeder extends Seeder
{
   public function run()
   {
      DB::table('order_details')->truncate();
      DB::table('order_details')->insert([
         [
            'order_id'          => 1,
            'product_id'        => 1,
            'quantity'          => 10,
            'quantity_accepted' => 10,
            'observation'       => '',
         ],
         [
            'order_id'          => 1,
            'product_id'        => 2,
            'quantity'          => 3,
            'quantity_accepted' => 2,
            'observation'       => 'Pantalla en malas condiciones',
         ],
      ]);
   }
}
