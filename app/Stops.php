<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stops extends Model
{
    protected $table = 'stops';

    public function Routes(){
        return $this -> belongsTo('App\Routes');
    }

    public function location(){
        return $this -> belongsTo('App\location');
    }
}
