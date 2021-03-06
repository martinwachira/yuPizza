<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'phoneNo','currentAddress', 'password',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
