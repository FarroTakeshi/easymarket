<?php

use Illuminate\Database\Seeder;

class AreaTableSeeder extends Seeder
{

   public function run()
   {
      DB::table('areas')->insert([
         [
            'name'        => 'Electrodomesticos',
            'description' => 'Artefactos electricos para el hogar',
         ],
         [
            'name'        => 'Computo',
            'description' => 'Computadoras de escritorio o portatiles y accesorios
                              de las mismas',
         ],
         [
            'name'        => 'Ropa Masculina',
            'description' => 'Prendas de vestir para hombres',
         ],
         [
            'name'        => 'Ropa Femenina',
            'description' => 'Prendas de vestir para mujeres',
         ],
         [
            'name'        => 'Juguetes',
            'description' => 'Juegos y juguetes para niños y niñas',
         ],
      ]);
   }
}
