<?php

namespace App;


class Plaga extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'plagues';
    
    public function images()
    {
        return $this->morphMany('App\Image', 'owner');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plantes()
    {
    	return $this->hasMany(Planta::class)
    }
    
    public function remeis()
    {
    	return $this->hasMany(Remei::class)
    }
    
}
