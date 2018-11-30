<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['id', 'name', 'cost_price', 'sale_price', 'subcategorie_id'];
    public function subcatagorie()
    {
        return $this->hasOne('App\subcatagorie');
    }
}
