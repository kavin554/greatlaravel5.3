<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class place extends Model
{
    protected $table = 'place_type';
    public function location(){
        return $this ->hasMany('App\location');
    }

}
