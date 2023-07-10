<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class b2bseance extends Model
{
     protected $fillable=['id_b2b','id_entrep','id_invite','etat','actif'];


      public $timestamps = false;
}
