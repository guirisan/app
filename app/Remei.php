<?php

namespace App;

class Remei extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'remeis';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function images()
    {
        return $this->morphMany('App\Image', 'owner');
    }

    public function tasques()
    {
        return $this->morphMany('App\Tasca', 'owner');
    }

    public function plagues()
    {
        return $this->hasMany(Plaga::class);
    }
}
