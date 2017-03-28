<?php

use Illuminate\Database\Seeder;

class CreatePostSeeder extends Seeder {

   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run() {
      DB::table('posts')->insert([
          ['titulo' => 'Post 1', 'contenido' => 'Contenido del post 1','activo'=>true],
          ['titulo' => 'Post 2', 'contenido' => 'Contenido del post 2','activo'=>true],
          ['titulo' => 'Post 3', 'contenido' => 'Contenido del post 3','activo'=>true],
          ['titulo' => 'Post 4', 'contenido' => 'Contenido del post 4','activo'=>true],
          ['titulo' => 'Post 5', 'contenido' => 'Contenido del post 5','activo'=>true],          
      ]);
   }

}
