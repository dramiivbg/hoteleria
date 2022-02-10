<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacione extends Model
{
    protected $fillable = [
        'id_hotel',
        'nombre',
        'valor',
        'descripcion',
        'img'
        
    ];
    use HasFactory;

    public function Hoteles(){

        return $this->belongsTo('App\models\Hotele', 'id_hotel');
    }

    public function Calificaciones(){

        return $this->hasMany('App\models\Calificacione', 'id_habitacion');
    }

    
}
