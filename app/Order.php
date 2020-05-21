<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function pizzas()
    {
        return $this->belongsToMany(Pizza::class,'order_details')->withPivot(['quantity']);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
