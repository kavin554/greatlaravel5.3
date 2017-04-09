<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class routeiteneraries extends Model
{
    protected $table = 'route_itineraries';

    public function Routes(){
        return $this -> belongsTo('App\Routes');
    }
}
