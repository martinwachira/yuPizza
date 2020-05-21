<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $fillable = ['name','description','price', 'imgUrl'];

    public function orders()
    {
        return $this->belongsToMany(Order::class,'order_details');
    }
}


