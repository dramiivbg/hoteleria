<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotele extends Model
{

    protected $fillable = [
        'id_admin',
        'hombre',
        'direccion'
        
    ];
    use HasFactory;
}
