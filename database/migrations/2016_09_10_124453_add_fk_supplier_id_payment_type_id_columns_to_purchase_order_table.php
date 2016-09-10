<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkSupplierIdPaymentTypeIdColumnsToPurchaseOrderTable extends Migration
{
   public function up()
   {
      Schema::table('purchase_orders', function (Blueprint $table) {
         $table->integer('payment_type_id')->unsigned();
         $table->integer('supplier_id')->unsigned();
      });

      Schema::table('purchase_orders', function (Blueprint $table) {
         $table->foreign('payment_type_id')
               ->references('id')
               ->on('payment_types')
               ->onDelete('cascade')
               ->onUpdate('cascade');

         $table->foreign('supplier_id')
               ->references('id')
               ->on('suppliers')
               ->onDelete('cascade')
               ->onUpdate('cascade');
      });
   }

   public function down()
   {
      Schema::table('purchase_orders', function(Blueprint $table) {
         $table->dropForeign('purchase_orders_payment_type_id_foreign');
         $table->dropForeign('purchase_orders_supplier_id_foreign');
      });
   }
}
