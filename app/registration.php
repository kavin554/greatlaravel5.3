<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registration extends Model
{
    protected $table = 'user_registration';

    public function permission(){
        return $this ->hasOne('App\permission');
    }

    public function trace(){
        return $this ->hasOne('App\trace');
    }

    public function country()
    {
        return $this->belongsTo('App\country');
    }
}
