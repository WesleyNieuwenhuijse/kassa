<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['id', 'name', 'cost_price', 'sale_price', 'subcategorie_id'];

    public static function create(array $array, array $array1, array $array2)
    {
    }

    public function subcatagorie()
    {
        return $this->hasOne('App\subcatagorie');
    }
}
