<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseOrdersTable extends Migration
{
   public function up()
   {
      Schema::create('purchase_orders', function (Blueprint $table) {
         $table->increments('id')->unsigned();
         $table->date('reception_date');
      });
   }

   public function down()
   {
      Schema::drop('purchase_orders');
   }
}
