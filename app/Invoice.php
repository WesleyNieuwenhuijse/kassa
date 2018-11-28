<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public function product_invoice_line()
    {
        return $this->hasMany('App\product_invoice_line');
    }
}
