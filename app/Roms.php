<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roms extends Model
{
   protected $fillable=[        
        'name',
        'console',
        'identifier',        
   ];
}
