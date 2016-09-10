<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
   public function up()
   {
      Schema::create('order_details', function (Blueprint $table) {
         $table->integer('order_id')->unsigned();
         $table->integer('product_id')->unsigned();
         $table->integer('quantity')->unsigned();
         $table->integer('quantity_accepted')->unsigned();
         $table->string('observation');
      });

      Schema::table('order_details', function (Blueprint $table) {
         $table->foreign('order_id')
               ->references('id')
               ->on('purchase_orders')
               ->onDelete('cascade')
               ->onUpdate('cascade');

         $table->foreign('product_id')
               ->references('id')
               ->on('products')
               ->onDelete('cascade')
               ->onUpdate('cascade');
      });
   }

   public function down()
   {
      Schema::table('order_details', function(Blueprint $table) {
         $table->dropForeign('order_details_order_id_foreign');
         $table->dropForeign('order_details_product_id_foreign');
      });

      Schema::drop('order_details');
   }
}
