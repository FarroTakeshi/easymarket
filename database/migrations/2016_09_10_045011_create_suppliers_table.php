<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
   public function up()
   {
      Schema::create('suppliers', function (Blueprint $table) {
         $table->increments('id')->unsigned();
         $table->string('name');
         $table->string('ruc')->unique();
      });
   }

   public function down()
   {
      Schema::drop('suppliers');
   }
}
