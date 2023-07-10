<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable=['id_album','lien','nom_photo','nom_photoFr','date','suprim_photo'];


      public $timestamps = false;
}
