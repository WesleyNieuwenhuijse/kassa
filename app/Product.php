<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['id', 'name', 'cost_price', 'sale_price', 'subcategorie_id'];
    public function SubCatagorie()
    {
        return $this->hasOne('App\SubCatagorie');
    }
    public function ProductInvoiceLine()
    {
        return $this->hasMany('App\ProductInvoiceLine');
    }
}
