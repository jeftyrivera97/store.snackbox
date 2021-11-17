<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Decoracion extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table="decoraciones"; 
    protected $primaryKey = 'id_decoracion'; 
}
