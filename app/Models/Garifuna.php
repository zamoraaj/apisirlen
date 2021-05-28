<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garifuna extends Model
{
    use HasFactory;


      //Definiendo la tabla del modelo
      protected $table = 'garifuna';

      //Definiendo los campos de la tabla
      protected $fillable = [
         "palabra",
         "descripcion",
        
     ];
}
