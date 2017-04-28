<?php

namespace App;


class Familia extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'families';
    
    /**
     * Give familia show path
     * 
     * @return /families/{id}
     */
    public function path()
    {
        return ('/families/' . $this->id);
    }
}
