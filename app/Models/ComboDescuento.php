<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComboDescuento extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table="combo_descuentos"; 
    protected $primaryKey = 'id';

    public function combo()
    {
        return $this->belongsTo('App\Models\Combo','id_combo');    
    }
    public function descuento()
    {
        return $this->belongsTo('App\Models\Descuento','id_descuento');    
    }

}
