<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Miskito extends Model
{
    use HasFactory;


    
    //Definiendo la tabla del modelo
    protected $table = 'miskito';

     //Definiendo los campos de la tabla
     protected $fillable = [
        "palabra",
        "descripcion",
       
    ];
}
