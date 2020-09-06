<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meekouser1 extends Model
{
    protected $fillable = ['nom', 'prenom', 'email', 'motdepass'];
}
