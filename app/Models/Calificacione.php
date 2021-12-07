<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificacione extends Model
{

    protected $fillable = [
        'id_habitacion',
        'id_user',
        'calificacion',
        'comentario'
       
    ];
    use HasFactory;


    public function User(){

        return $this->belongsTo('App\models\User', 'id_user');
    }

    public function habitacion(){

        return $this->belongsTo('App\models\Habitacione', 'id_habitacion');
    }
}
