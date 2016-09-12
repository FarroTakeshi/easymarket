<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
   public function run()
   {
      DB::table('products')->truncate();
      DB::table('products')->insert([
         [
            'name'         => 'Televisor Samsung 24 pulgadas',
            'price'        => 200.99,
            'description'  => 'Televisor Full HD Samsung, incluye sonido Dolby y garantía de 1 año',
            'stock'        => 20,
            'area_id'      => 1,
            'warehouse_id' => 1,
         ],
         [
            'name'         => 'Laptop HP Pavilion 14 de 14.5 pulgadas',
            'price'        => 1199.99,
            'description'  => 'Laptop de marca Hp procesador Intel core i3 memoria RAM 4GB, color rojo ',
            'stock'        => 5,
            'area_id'      => 2,
            'warehouse_id' => 1,
         ],
         [
            'name'         => 'Polo Star Wars varón',
            'price'        => 39.00,
            'description'  => 'Polo de la franquicia Star Wars manga corta, disponibles, talla S',
            'stock'        => 10,
            'area_id'      => 3,
            'warehouse_id' => 1,
         ],
         [
            'name'         => 'Vestido de fiesta',
            'price'        => 129.99,
            'description'  => 'Hermoso vestido de fiesta talla M, color celeste',
            'stock'        => 2,
            'area_id'      => 4,
            'warehouse_id' => 1,
         ],
      ]);
   }
}
