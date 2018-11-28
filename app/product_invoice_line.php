<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_invoice_line extends Model
{
    public function Product()
    {
       return $this->hasOne('App\Product');
    }

    public function Invoice()
    {
        return $this->hasOne('App\Invoice');
    }
}
