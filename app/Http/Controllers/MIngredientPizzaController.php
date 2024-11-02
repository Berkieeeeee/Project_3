<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\IngredientPizza;
use Illuminate\Http\Request;

class MIngredientPizzaController extends Controller
{
    public function store(string $ingredient_id, string $pizza_id)
    {
        $ingredient = Ingredient::findOrFail($ingredient_id);
        $ingredient->pizzas()->attach($pizza_id);
        return back();
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {

    }
}
