<?php

namespace App;

// use App\Image;

class Planta extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'plantes';
    
    public function images()
    {
        return $this->morphMany('App\Image', 'owner');
    }

    public function tasques()
    {
        return $this->morphMany('App\Tasca', 'owner');
    }

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
