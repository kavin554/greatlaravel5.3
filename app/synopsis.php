<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class synopsis extends Model
{
    protected $table = 'synopsis';

    public function weather(){
        return $this -> belongsTo('App\weather');
    }
}
