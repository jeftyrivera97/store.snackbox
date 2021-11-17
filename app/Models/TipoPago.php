<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPago extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table="tipo_pagos"; 
    protected $primaryKey = 'id_tipo'; 
}
