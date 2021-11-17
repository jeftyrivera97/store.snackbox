<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoCategoria extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table="producto_categorias"; 
    protected $primaryKey = 'id'; 

    public function producto()
    {
        return $this->belongsTo('App\Models\Producto','id_producto');    
    }

    public function categoria()
    {
        return $this->belongsTo('App\Models\Categoria','id_categoria');    
    }
}
