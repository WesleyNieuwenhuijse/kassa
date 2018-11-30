<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catagorie extends Model
{
    protected $fillable = ['id', 'name'];

    public function subcatagorie()
    {
        return $this->hasMany('App/subcatagorie');
    }
}
