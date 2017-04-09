<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class weather_forcast extends Model
{
    protected $table = 'weather_forecast_log';

    public function weather(){
        return $this -> belongsTo('App\weather');
    }
}
