<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcatagorie extends Model
{
    public function catagorie()
    {
        return $this->hasOne('App\catagorie');
    }
}
