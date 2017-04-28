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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Give planta show path
     * 
     * @return /plantes/{id}
     */
    public function path()
    {
        return ('/plantes/' . $this->id);
    }
            
    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }
    
    public function tasques()
    {
        return $this->morphMany('App\Tasca', 'tasqueable');
    }


    public function grup()
    {
        return $this->belongsTo(Grup::class);
    }
    public function familia()
    {
        return $this->belongsTo(Familia::class);
    }

    public function plagues()
    {
        return $this->belongsToMany(Plaga::class)->withPivot('descripcio');
    }
    

}
