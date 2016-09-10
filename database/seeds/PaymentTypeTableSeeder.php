<?php

use Illuminate\Database\Seeder;

class PaymentTypeTableSeeder extends Seeder
{
   public function run()
   {
   	DB::table('payment_types')->truncate();
      DB::table('payment_types')->insert([
         [
            'name' => 'Efectivo',
         ],
         [
            'name' => 'Credito',
         ],
      ]);
   }
}
