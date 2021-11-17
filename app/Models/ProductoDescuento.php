<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoDescuento extends Model
{
    use HasFactory;
    protected $table="producto_descuentos"; 
    protected $primaryKey = 'id';

    public function combo()
    {
        return $this->belongsTo('App\Models\Combo','id_combo');    
    }
    public function producto()
    {
        return $this->belongsTo('App\Models\Producto','id_producto');    
    }

}
