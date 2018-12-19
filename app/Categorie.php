<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = ['id', 'name'];

    public static function lists(string $string, string $string1)
    {
    }


    public function SubCatagorie()
    {
        return $this->hasMany('App/SubCatagorie');
    }
}
