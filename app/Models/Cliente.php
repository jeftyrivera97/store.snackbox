<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table="clientes"; 
    protected $primaryKey = 'id_cliente'; 
    protected $fillable = ['id_cliente','codigo_cliente','nombre','apellido','telefono','sexo','ciudad','departamento','estado','id_usuario'];

    public function venta()
    {
        return $this->hasMany('App\Models\Venta');
    }

    
    public function user()
    {
        return $this->belongsTo('App\Models\user','id_usuario');    
    }
}
