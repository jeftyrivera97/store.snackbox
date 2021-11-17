<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DecoracionCategoria extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table="decoracion_categorias"; 
    protected $primaryKey = 'id';
}
