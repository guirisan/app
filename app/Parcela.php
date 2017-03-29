<?php

namespace App;

class Parcela extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'parceles';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bancal()
    {
        return $this->belongsTo(Bancal::class);
    }
    
    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }

    public function cultius()
    {
        return $this->hasMany(Cultiu::class);
    }

    public function events()
    {
        return $this->morphMany('App\Event', 'eventable');
    }
}
