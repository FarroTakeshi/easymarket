<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
   protected $table = 'areas';

   public $timestamps = false;

   public function products()
   {
      return $this->hasMany(Product::class);
   }
}
