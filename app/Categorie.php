<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = ['id', 'name'];



    public function SubCatagorie()
    {
        return $this->hasMany('App/SubCatagorie');
    }
}
