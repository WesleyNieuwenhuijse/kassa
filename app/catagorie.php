<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catagorie extends Model
{
    public function subcatagorie()
    {
        return $this->hasMany('App/subcatagorie');
    }
}
