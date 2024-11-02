<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PizzaStatus extends Model
{
    use HasFactory;

    protected $table = 'status_pizza';

    protected $fillable = ['status_pizza'];

    public function PizzaOrders()
    {
        return $this->belongsToMany(PizzaOrder::class, 'pizza_order', 'status_pizza_id', 'order_id');
    }
}
