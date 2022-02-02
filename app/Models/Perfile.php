<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfile extends Model
{

    protected $fillable = [
        'id_user',
        'id_rol',
        
       
    ];

    public function User(){

        return $this->hasMany('App\models\User', 'id_user');
    }

    public function Rol()
    {
        return $this->hasMany('App\models\Role' , 'id_rol');
    }

    use HasFactory;
}
