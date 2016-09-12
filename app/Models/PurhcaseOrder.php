<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PurhcaseOrder extends Model
{
   protected $table = 'purchase_orders';

   public $timestamps = false;

   public function supplier()
   {
      return $this->belongsTo(Suplier::class);
   }

   public function payment_type()
   {
      return $this->belongsTo(PaymentType::class);
   }
}
