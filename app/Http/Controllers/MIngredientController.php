<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class MIngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ingredients = Ingredient::all();
        return view('crudmedewerkers.pizza.index', ['pizzas' => $ingredients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crudmedewerkers.ingredient.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'name' => 'required | max:255',
            'price' => 'required | max:255',
            'unit' => 'required | max:255',
        ]);
        Ingredient::create($validData);

        return redirect()->route('pizza.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ingredient $ingredient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ingredient $ingredient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ingredient $ingredient)
    {
        $validData = $request->validate([
            'name' => 'required | max:255',
            'price' => 'required | max:255',
            'unit' => 'required | max:255',
        ]);
        $ingredient->update($validData);
        return redirect()->route('pizza.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ingredient $ingredient)
    {
        $ingredient->delete();
        return back();
    }
}
