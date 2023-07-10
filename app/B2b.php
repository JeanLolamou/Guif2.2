<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class B2b extends Model
{
    protected $fillable=['date','heure','etat'];


      public $timestamps = false;
}
