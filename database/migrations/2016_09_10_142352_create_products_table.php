<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
   public function up()
   {
      Schema::create('products', function (Blueprint $table) {
         $table->increments('id')->unsigned();
         $table->string('name');
         $table->double('price', 8, 2);
         $table->string('description');
         $table->integer('stock');
         $table->integer('area_id')->unsigned();
      });

      Schema::table('products', function (Blueprint $table) {
         $table->foreign('area_id')
               ->references('id')
               ->on('areas')
               ->onDelete('cascade')
               ->onUpdate('cascade');
      });
   }

   public function down()
   {
      Schema::table('products', function(Blueprint $table) {
         $table->dropForeign('products_area_id_foreign');
      });

      Schema::drop('products');
   }
}
