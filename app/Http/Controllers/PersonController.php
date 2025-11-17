<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePersonRequest;
use App\Http\Requests\UpdatePersonRequest;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        echo"Perosn index call";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
       return view('addperson');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         echo"Perosn store call";
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        //
         echo"Perosn show call";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Person $person)
    {
        //
         echo"Perosn edit call";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePersonRequest $request, Person $person)
    {
        //
         echo"Perosn update call";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        //
         echo"Perosn destroy     call";
    }
}
