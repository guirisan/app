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
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    /**
     * Give plaga show path
     * 
     * @return /plagues/{id}
     */
    public function path()
    {
        return ('/plagues/' . $this->id);
    }

    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }


    public function plantes()
    {
    	return $this->belongsToMany(Planta::class)->withPivot('descripcio');
    }
    
    public function remeis()
    {
    	return $this->belongsToMany(Remei::class)->withPivot('descripcio');
    }
    
}
