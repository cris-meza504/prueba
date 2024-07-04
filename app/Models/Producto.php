<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    //protected $primarykey = 'idProducto'; //para indicarle la llave primaria id si se le cambio el nombre
    //protected $table = 'inventario_productos'; sirve para modificar la tabla a la que hace referencia el modelo idProducto

    public $timestamps = false;
}
