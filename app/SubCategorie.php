<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategorie extends Model
{
    public $fillable = ['id', 'name', 'categorie_id'];

    protected $table = 'subcategories';

    public function Catagorie()
    {
        return $this->hasOne('App\Catagorie');
    }
}
