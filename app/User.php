<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Give user show path
     * 
     * @return /user/{id}
     */
    public function path()
    {
        return ('/user/' . $this->id);
    }

    public function plantes()
    {
        return $this->hasMany(Planta::class);
    }

    public function grups()
    {
        return $this->hasMany(Grup::class);
    }

    public function families()
    {
        return $this->hasMany(Familia::class);
    }

    public function plagues()
    {
        return $this->hasMany(Plaga::class);
    }

    public function remeis()
    {
        return $this->hasMany(Remei::class);
    }

    public function bancals()
    {
        return $this->hasMany(Bancal::class);
    }

    public function parceles()
    {
        return $this->hasMany(Parcela::class);
    }

    public function cultius()
    {
        return $this->hasMany(Cultiu::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
