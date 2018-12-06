<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductInvoiceLine extends Model
{
    protected $fillable = ['id', 'product_id', 'invoice_id'];

    public function Product()
    {
        return $this->hasOne('App\Product');
    }

    public function Invoice()
    {
        return $this->hasOne('App\Invoice');
    }
}
