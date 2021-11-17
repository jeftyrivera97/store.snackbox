<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoDeposito extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table="pedido_depositos"; 
    protected $primaryKey = 'id'; 

    public function pedido()
    {
        return $this->belongsTo('App\Models\Pedido','id_pedido');    
    }
}
