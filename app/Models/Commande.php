<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    public function  user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function etat()
    {
        return $this->hasOne('App\Models\Etat','id');
    }
}
