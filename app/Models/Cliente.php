<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // protected $fillable = ['dni', 'codigo','nombre', 'correo', 'celular'];
    protected $guarded = [];
    // protected $primaryKey = 'codigoC';
    public $timestamps=false;
}
