<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table="facturas"; 
    protected $primaryKey = 'id_factura'; 

    public function user()
    {
        return $this->belongsTo('App\Models\User','id_usuario');    
    }
}
