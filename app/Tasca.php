<?php

namespace App;

class Tasca extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tasques';
    
    public function owner()
    {
        return $this->morphTo();
    }
    
}
