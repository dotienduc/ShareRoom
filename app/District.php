<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function rooms()
    {
        return $this->hasMany('App\Room');
    }

    public function streets()
    {
        return $this->hasMany('App\Street');
    }
}
