<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = ['id', 'paid', 'customer_id'];

    public function ProductInvoiceLine()
    {
        return $this->hasMany('App\ProductInvoiceLine');
    }
}
