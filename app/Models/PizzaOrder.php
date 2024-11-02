<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PizzaOrder extends Model
{
    use HasFactory;

    protected $table = 'pizza_order';

    protected $fillable = ['Pizza_Id', 'Order_Id', 'status_pizza_id'];

    public $timestamps = false;

    public function pizzas()
    {
        return $this->belongsToMany(Pizza::class, 'pizza_order', 'Order_Id', 'Pizza_Id');
    }

    public function status()
    {
        return $this->belongsTo(PizzaStatus::class, 'status_pizza_id');
    }
}
