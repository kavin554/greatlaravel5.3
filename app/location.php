<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    protected $table = 'setup_location';

    public function place(){
        return $this -> belongsTo('App\place');
    }

    public function weather(){
        return $this ->hasOne('App\weather');
    }



}
