<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Producto extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table="productos";
    protected $primaryKey = 'id_producto'; 

    public function item()
    {
        return $this->belongsTo('App\Models\Item','id_item');    
    }
    
}
