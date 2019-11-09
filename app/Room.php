<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function district()
    {
        return $this->belongsTo('App\District');
    }

    public function street()
    {
        return $this->belongsTo('App\Street');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
