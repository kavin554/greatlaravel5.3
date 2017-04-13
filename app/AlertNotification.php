<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlertNotification extends Model
{
    protected $table = 'alert_notification';

    public function Routes(){
        return $this -> belongsTo('App\Routes');
    }
}
