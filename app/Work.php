<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    public function images()
    {
        return $this->hasMany('App\Image');
    }
}
