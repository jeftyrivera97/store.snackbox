<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table="ordenes"; 
    protected $primaryKey = 'id_orden'; 

    public function venta()
    {
        return $this->belongsTo('App\Models\Venta','id_venta');    
    }
}
