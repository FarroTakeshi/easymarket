<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentType extends Model
{
   protected $table = 'payment_types';

   public $timestamps = false;

   public function purchase_orders()
   {
      return $this->hasMany(PurchaseOrder::class);
   }
}
