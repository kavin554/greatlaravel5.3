<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class embassy extends Model
{
    protected $table = 'embassy';
    public function country(){
        return $this -> belongsTo('App\country');
    }

}
