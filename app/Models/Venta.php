<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

     
    public $timestamps = false;
    protected $table="ventas"; 
    protected $primaryKey = 'id_venta'; 

    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente','id_cliente');    
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User','id_usuario');    
    }
}
