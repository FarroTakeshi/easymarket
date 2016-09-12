<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
   protected $table = 'warehouses';

   public $timestamps = false;

   public function users()
   {
      return $this->hasMany(User::class);
   }

   public function products()
   {
      return $this->hasMany(Prooduct::class);
   }
}
