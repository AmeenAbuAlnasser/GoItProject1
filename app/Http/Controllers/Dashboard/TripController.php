<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trips=Trip::get();
        return view('dashboard.Trip.index',compact('trips'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.Trip.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $trip=trip::create([
            'Name'=>$request->Name,
            'Date'=>$request->Date,
            'City_id'=>$request->CityId,
            'details'=>$request->details,
            'Price'=>$request->Price,

        ]);

        return redirect(route('dashboard.Trip.index'));
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
    public function edit(string $id)
    {
        $trip=Trip::findorFail($id);

        return view('dashboard.Trip.edit',compact('trip'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $trip=Trip::findorFail($id);
        $trip->update([
            'Name'=>$request->Name,
            'Date'=>$request->Date,
            'City_id'=>$request->CityId,
            'details'=>$request->details,
            'Price'=>$request->Price,
        ]);
        return redirect(route('dashboard.Trip.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $trip=Trip::findorFail($id);
        $trip->delete();
        return redirect(route('dashboard.Trip.index'));
    }
}