<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assigment extends Model
{
    public function adviser()
    {
        return $this->belongsTo('App\Adviser');
    }
}
