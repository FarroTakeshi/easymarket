<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Models\User;
use App\Models\Supplier;

class SupplierRegisterTest extends TestCase
{
   use DatabaseTransactions;
   use WithoutMiddleware;

   protected $user;

   public function setUp()
   {
      parent::setUp();
      $this->user = User::find(1);
   }

   public function testRegister()
   {
      $supplier = factory(Supplier::class)->make();

      $this->actingAs($this->user)
           ->post(route('suppliers.store'), [
               '_token' => csrf_token(),
               'name' => $supplier->name,
               'ruc'  => $supplier->ruc,
            ])
           ->assertRedirectedTo(route('suppliers.index'), $with = ['message']);
   }
}
