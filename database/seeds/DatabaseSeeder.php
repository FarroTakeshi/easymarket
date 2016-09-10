<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   public function run()
   {
   	Eloquent::unguard();

      //disable foreign key check for this connection before running seeders
      DB::statement('SET FOREIGN_KEY_CHECKS=0;');

      //Area
      $this->call(AreaTableSeeder::class);
      //Supplier
      $this->call(SupplierTableSeeder::class);
      //Payment type
      $this->call(PaymentTypeTableSeeder::class);
      //Purchase Order
      $this->call(PurchaseOrderTableSeeder::class);
      //User
      $this->call(UserTableSeeder::class);
      //Product
      $this->call(ProductTableSeeder::class);

      //enable foreign key check for this connection before running seeders
      DB::statement('SET FOREIGN_KEY_CHECKS=1;');
   }
}
