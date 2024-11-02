<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id', 'total_price', 'message', 'status_order'];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function pizzas()
    {
        return $this->belongsToMany(Pizza::class, 'pizza_order', 'order_id', 'pizza_id');
    }
}
