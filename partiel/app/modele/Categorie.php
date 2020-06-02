<?php

namespace App\modele;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //On ne prendra pas en charge le timestamp associé à la table
    public $timestamps = false;

    public function films(){
        return $this->hasMany(Film::class);
    }
}
