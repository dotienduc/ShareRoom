<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function rooms()
    {
        return $this->hasMany('App\Room');
    }

    public function districts()
    {
        return $this->hasMany('App\District');
    }
}
