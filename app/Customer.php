<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['id', 'name', 'invoice_id'];

    public function Invoice()
    {
        return $this->hasOne('App\Invoice');
    }
}
