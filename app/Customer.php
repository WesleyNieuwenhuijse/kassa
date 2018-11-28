<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['id', 'name'];

    public function Invoice()
    {
        return $this->hasOne('App\Invoice');
    }
}
