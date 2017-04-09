<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trace extends Model
{
    protected $table = 'user_trace';
    public function registration(){
        return $this -> belongsTo('App\registration');
    }

    public function Routes(){
        return $this -> belongsTo('App\Routes');
    }
}
