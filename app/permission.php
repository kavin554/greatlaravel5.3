<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class permission extends Model
{
    protected $table = 'user_permission';
    public function registration(){
        return $this -> belongsTo('App\registration');
    }
}
