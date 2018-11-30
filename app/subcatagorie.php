<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcatagorie extends Model
{
    public $fillable = ['id', 'name', 'categorie_id'];

    public function catagorie()
    {
        return $this->hasOne('App\catagorie');
    }
}
