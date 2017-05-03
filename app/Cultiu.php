<?php

namespace App;

class Cultiu extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cultius';

    protected $dates = [
        'created_at',
        'updated_at',
        'data_ini',
        'data_fi'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }

    public function events()
    {
        return $this->morphMany('App\Events', 'eventable');
    }

}
