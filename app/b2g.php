<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class b2g extends Model
{
    protected $fillable=['date','heure','etat'];


      public $timestamps = false;
}
