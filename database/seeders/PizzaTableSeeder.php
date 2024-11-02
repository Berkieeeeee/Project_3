<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pizza;

class PizzaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pizzas = [
            [
                'pizzaName' => 'Barbecue Chicken Pizza',
                'pizzaPrice' => 10.99,
                'pizzaImage' => 'PizzaFotos/BarbecueChicken.png',
            ],
            [
                'pizzaName' => 'Hawaii Pizza',
                'pizzaPrice' => 10.99,
                'pizzaImage' => 'PizzaFotos/HawaiiPizza.png',
            ],
            [
                'pizzaName' => 'Salami Pizza',
                'pizzaPrice' => 10.99,
                'pizzaImage' => 'PizzaFotos/SalamiPizza.png',
            ],
            [
                'pizzaName' => 'Tonijn Pizza',
                'pizzaPrice' => 10.99,
                'pizzaImage' => 'PizzaFotos/TonijnPizza.png',
            ],
            [
                'pizzaName' => 'Doner Pizza',
                'pizzaPrice' => 10.99,
                'pizzaImage' => 'PizzaFotos/doner.png',
            ],
            [
                'pizzaName' => 'Mixed BBQ Grill Pizza',
                'pizzaPrice' => 10.99,
                'pizzaImage' => 'PizzaFotos/BBQ_mixed_grill-.png',
            ],
            [
                'pizzaName' => 'Californian Veggie Pizza',
                'pizzaPrice' => 10.99,
                'pizzaImage' => 'PizzaFotos/californian_veggie.png',
            ],
            [
                'pizzaName' => 'Vierkaas Pizza',
                'pizzaPrice' => 10.99,
                'pizzaImage' => 'PizzaFotos/VierKaasPizza.png',
            ],
        ];

        foreach ($pizzas as $pizza) {
            Pizza::create($pizza);
        }
    }
}
