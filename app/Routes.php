<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Routes extends Model
{
    protected $table = 'setup_route';

    public function photo(){
        return $this ->hasOne('App\photo');
    }

    public function route_itineraries(){
        return $this ->hasOne('App\routeitineraries');
    }

    public function Stop(){
        return $this ->hasOne('App\Stops');
    }

    public function trace(){
        return $this ->hasOne('App\trace');
    }
}
