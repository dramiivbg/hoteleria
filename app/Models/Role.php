<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $fillable = [
        'rol',
       
       
    ];

    public function perfil()
    {
        return $this->hasMany('App\models\Perfile' , 'id_rol');
    }
    use HasFactory;
}
