<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table="items"; 
    protected $primaryKey = 'id_item'; 

    public function producto()
    {
        return $this->hasMany('App\Models\Producto');
    }

    public function combo()
    {
        return $this->hasMany('App\Models\Combo');
    }

    public function descuentos()
    {
        return $this->hasMany('App\Models\ItemDescuento');
    }
}
