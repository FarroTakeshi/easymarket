<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword;

class User extends Authenticatable
{
   use Notifiable;

   protected $fillable = [ 'first_name', 'last_name', 'email', 'password'];

   protected $hidden = [ 'password', 'remember_token'];

   protected $table = 'users';

   public $timestamps = false;

   public function warehouse()
   {
      return $this->belongsTo(Warehouse::class);
   }
}