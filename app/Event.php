<?php

namespace App;

class Event extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'events';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
