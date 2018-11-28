<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function subcatagorie()
    {
        return $this->hasOne('App\subcatagorie');
    }
}
