<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recharge extends Model
{
    public function card()
    {
        return $this->belongsTo('App\Card');
    }
}
