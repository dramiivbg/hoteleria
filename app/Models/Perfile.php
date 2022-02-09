<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfile extends Model
{

    protected $fillable = [
        'id_user',
        'rol',
        
       
    ];

    public function User(){

        return $this->hasMany('App\models\User', 'id_user');
    }

  

    use HasFactory;
}
