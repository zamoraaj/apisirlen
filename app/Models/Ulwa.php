<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulwa extends Model
{
    use HasFactory;

      //Definiendo la tabla del modelo
      protected $table = 'ulwa';

      //Definiendo los campos de la tabla
      protected $fillable = [
         "palabra",
         "descripcion",
        
     ];
}
