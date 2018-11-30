<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = ['id', 'paid', 'customer_id'];

    public function product_invoice_line()
    {
        return $this->hasMany('App\product_invoice_line');
    }
}
