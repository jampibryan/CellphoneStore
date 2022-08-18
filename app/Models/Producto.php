<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    // fillable: Guarda solo los campos que están en el array
    // protected $fillable = ['codigo','marca','descripcion','precio'];

    // guarded: Guarda todos campos menos 'categoria'
    // protected $guarded = ['categoria'];
    
    
    // protected $table = 'productos';    

    // protected $primaryKey = 'codigoP';
    protected $guarded = [];
    // public $incrementing = false;

    // protected $keyType = 'string';


    public $timestamps=false;
}
