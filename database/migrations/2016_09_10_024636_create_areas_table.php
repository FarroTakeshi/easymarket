<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreasTable extends Migration
{
   public function up()
   {
      Schema::create('areas', function (Blueprint $table) {
         $table->increments('id')->unsigned();
         $table->string('name');
         $table->string('description');
      });
   }

   public function down()
   {
      Schema::drop('areas');
   }
}
