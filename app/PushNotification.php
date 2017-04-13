<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PushNotification extends Model
{
    protected $table = 'push_notification';

    public function Routes(){
        return $this -> belongsTo('App\Routes');
    }

}
