<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;
    protected $table="ciudades"; 
    protected $primaryKey = 'id'; 
  
    public function estado()
    {
        return $this->hasMany('App\Models\Estado');
    }
}
