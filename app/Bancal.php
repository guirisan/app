<?php

namespace App;

class Bancal extends Model
{
        /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bancals';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }

    public function parceles()
    {
        return $this->hasMany(Parcela::class);
    }
}
