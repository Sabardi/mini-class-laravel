<?php

namespace App\Http\Controllers;

use App\Http\Requests\TravelRequest;
use App\Models\Travel;
use Illuminate\Http\Request;

class TravelPlatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $travels = Travel::all();
        return view('travel.index', compact('travels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('travel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TravelRequest $request)
    {
        $request->validated();
        Travel::create($request->all());

        return redirect()->route('travel.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Travel $travel)
    {
        return view('travel.edit', compact('travel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TravelRequest $request, Travel $travel)
    {
        $request->validated();
        $travel->update($request->all());
        return redirect()->route('travel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Travel $travel)
    {
        $travel->delete();

        return redirect()->route('travel.index');
    }
}
