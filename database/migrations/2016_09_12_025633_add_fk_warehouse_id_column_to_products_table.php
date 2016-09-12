<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkWarehouseIdColumnToProductsTable extends Migration
{

   public function up()
   {
      Schema::table('products', function (Blueprint $table) {
         $table->integer('warehouse_id')->unsigned();
      });

      Schema::table('products', function (Blueprint $table) {
         $table->foreign('warehouse_id')
               ->references('id')
               ->on('warehouses')
               ->onDelete('cascade')
               ->onUpdate('cascade');
      });
   }

   public function down()
   {
      Schema::table('products', function (Blueprint $table) {
         $table->dropForeign('products_warehouse_id_foreign');
      });
   }
}
