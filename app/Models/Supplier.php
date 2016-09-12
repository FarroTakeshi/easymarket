<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
   protected $table = 'suppliers';

   public $timestamps = false;

   public function purchase_orders()
   {
      return $this->hasMany(PurchaseOrder::class);
   }
}
