<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['titulo','contenido','activo'];
    
    // Relacion con la tabla users
    public function usuario(){
       // Un post pertenece a un usuario
      return $this->belongsTo('App\User', 'user_id');
    }
    
}
