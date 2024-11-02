<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\Ingredient_Pizza;
use App\Models\IngredientPizza;
use App\Models\Pizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MPizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pizzas = Pizza::all();
        return view('crudmedewerkers.pizza.index', ['pizzas' => $pizzas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crudmedewerkers.pizza.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'pizzaName' => 'required | max:255',
            'pizzaPrice' => 'required | max:255',
            'pizzaSize' => 'required | max:255',
            'pizzaIngrediënts' => 'required | max:255',
            'pizzaImage' => 'required | max:255'
        ]);
        Pizza::create($validData);

        return redirect()->route('pizza.index');
    }

    /**
     * Update the specified resource in storage.
     */

    /**
     * Display the specified resource.
     */
    public function show(Pizza $pizza)
    {
        return view('crudmedewerkers.pizza.index', ['pizza' => Pizza::findOrFail($pizza)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pizza $pizza)
    {
        $ingredients = Ingredient::all()->keyBy('id');

        $ingredient_pizza = Ingredient_Pizza::all();
        return view('crudmedewerkers.pizza.edit', [
            'pizza' => $pizza,
            'ingredients' => $ingredients,
            'ingredient_pizza' => $ingredient_pizza
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pizza $pizza)
    {
        $validData = $request->validate([
            'pizzaName' => 'max:255',
            'pizzaPrice' => 'max:255',
            'pizzaSize' => ' max:255',
            'ingredient_pizza' => 'max:255'
        ]);
        $pizza->update($validData);
        return redirect()->route('pizza.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pizza $pizza)
    {
        $pizza->delete();
        return redirect()->route('pizza.index');
    }

    public function deleteIngredient(IngredientPizza $ingredientPizza)
    {
        // delete specific ingredient from pizza
        $ingredientPizza->delete();
        return redirect()->route('pizza.index');
    }


    public function deleteIngredient_pizza(Ingredient $ingredient, Pizza $pizza)
    {
        $ingredient->pizzas()->detach($pizza->PizzaId);
        return back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeIngredient(Ingredient $ingredient, Pizza $pizza)
    {
        $ingredient->pizzas()->attach($pizza->PizzaId);
        return back();
    }
}
