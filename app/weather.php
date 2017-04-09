<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class weather extends Model
{
    protected $table = 'weather_data';

    public function location(){
        return $this -> belongsTo('App\location');
    }

    public function weather_forcast(){
        return $this ->hasOne('App\weather_forcast');
    }
}
