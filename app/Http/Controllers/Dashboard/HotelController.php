<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotels=Hotel::with(['city'])->get();
        return view("dashboard.hotels.index",compact("hotels"));

        // $cities = City::with(['country'])->get();
        // return view("dashboard.cities.index" , compact("cities"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities = City::all();
        return view("dashboard.hotels.create", compact("cities"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "City_id" => "required|string|exists:cities,id",
        ]);
        Hotel::create($request->except("_token"));

        return redirect()->route("dashboard.hotels.index");
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
    public function edit($id)
    {
           $hotel=Hotel::findorFail($id);
           $cities = City::all();
           $cs = City::find($hotel);
           return view("dashboard.hotels.edit", compact("hotel","cities","cs"));
       ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $hotel=Hotel::findorFail($id);

        $hotel->update([
            'Name'=>$request->Name,
            'Address'=>$request->Address,
            'City_id'=>$request->City_id,
        ]);
        return redirect()->route("dashboard.hotels.index");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Hotel::findorFail($id)->delete();
        return redirect()->route("dashboard.hotels.index");

    }
}