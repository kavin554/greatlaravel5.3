<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    protected $table = 'country';
    public function embassy(){
        return $this ->hasOne('App\embassy');
    }

    public function registration(){
        return $this ->hasMany('App\registration');
    }


}


