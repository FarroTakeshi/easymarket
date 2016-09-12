<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $table = 'products';

   public $timestamps = false;

   public function warehouse()
   {
      return $this->belongsTo(Warehouse::class);
   }

   public function area()
   {
      return $this->belongsTo(Area::class);
   }

   public function purchase_orders()
   {
      return $this->belongsToMany(PurchaseOrder::class, 'order_details', 'product_id', 'order_id');
   }
}
