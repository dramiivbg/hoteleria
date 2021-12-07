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

    public function admin(){

        return $this->belongsTo('App\models\User', 'id_admin');
    }

    public function Habitaciones(){

        return $this->hasMany('App\models\Habitacione', 'id_hotel');
    }
}
