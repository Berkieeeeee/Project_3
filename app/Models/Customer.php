<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['firstname', 'lastname', 'e-mail', 'phone-number', 'address', 'city'];

    public function orders()
    {
        return $this->hasMany(Order::class, 'customer_id');
    }

}
