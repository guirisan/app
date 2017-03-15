<?php

namespace App;

class Planta extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function grup()
    {
        return $this->belongsTo(Grup::class);
    }
    public function familia()
    {
        return $this->belongsTo(Familia::class);
    }
}
