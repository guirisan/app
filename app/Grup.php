<?php

namespace App;

class Grup extends Model
{
    //
    /**
     * Give grup show path
     * 
     * @return /grups/{id}
     */
    public function path()
    {
        return ('/grups/' . $this->id);
    }
}
