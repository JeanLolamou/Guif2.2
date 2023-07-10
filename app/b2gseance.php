<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class b2gseance extends Model
{
    protected $fillable=['id_b2g','id_gov','id_invite','etat','actif'];


      public $timestamps = false;
}
