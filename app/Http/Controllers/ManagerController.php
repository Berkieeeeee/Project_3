<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staff = Staff::all();
        return view('crudmedewerkers.managers.index', ['staff' => $staff]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crudmedewerkers.managers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'firstname' => 'required | max:255',
            'lastname' => 'required | max:255',
            'email' => 'required | max:255',
            'phonenumber' => 'required | max:255',
            'address' => 'required | max:255',
            'city' => 'required | max:255',
        ]);
        Staff::create($validData);
        return redirect()->route('manager.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(Staff $staff)
    {
        return view('crudmedewerkers.managers.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Staff $employee)
    {
        return view('crudmedewerkers.managers.edit', [
            'employee' => $employee
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Staff $employee)
    {
        $validData = $request->validate([
            'firstname' => 'max:255',
            'lastname' => 'max:255',
            'email' => ' max:255',
            'phonenumber' => 'max:255',
            'address' => 'max:255',
            'city' => 'max:255'
        ]);
        $employee->update($validData);
        return redirect()->route('manager.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Staff $employee)
    {
        $employee->delete();
        return redirect()->route('manager.index');
    }
}
