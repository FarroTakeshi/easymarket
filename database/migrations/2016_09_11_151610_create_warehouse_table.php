<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarehouseTable extends Migration
{
   public function up()
   {
      Schema::create('warehouses', function (Blueprint $table) {
         $table->increments('id')->unsigned();
         $table->string('name');
         $table->string('address');
      });
   }

   public function down()
   {
      Schema::drop('warehouses');
   }
}
