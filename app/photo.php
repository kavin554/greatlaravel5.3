<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    protected $table = 'route_photo';

    public function Routes(){
        return $this -> belongsTo('App\Routes');
    }
}
