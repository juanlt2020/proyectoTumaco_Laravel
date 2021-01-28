<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    //protected $primaryKey = 'identificador';
    //public $timestamps = false;

    public function product(){
        return $this->hasMany(Producto::class, 'id');
    }
}
