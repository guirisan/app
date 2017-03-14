<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planta extends Model
{
    public function user()
    {
        return $this->belongsTo(User::Class);
    }
    
}
