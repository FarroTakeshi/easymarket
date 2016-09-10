<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   public function run()
   {
      //Area
      $this->call(AreaTableSeeder::class);
      //Supplier
      $this->call(SupplierTableSeeder::class);
      //Purchase Order
      $this->call(PurchaseOrderTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
   }
}
