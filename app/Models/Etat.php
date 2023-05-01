<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etat extends Model
{
    use HasFactory;
    public function commande()
    {
        return $this->belongsTo('App\Models\Commande','cmd_id');
    }
}
