<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $fillable=['id_user','libelle','fichier'];


      public $timestamps = false;
}
