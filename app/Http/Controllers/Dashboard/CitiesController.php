<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\Hotel;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = City::with(['country'])->get();
        return view("dashboard.cities.index" , compact("cities"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::all();
        return view("dashboard.cities.create", compact("countries"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "Country_id" => "required|string|exists:countries,id",
        ]);
        City::create($request->except("_token"));

        return redirect()->route("dashboard.cities.index");
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
        $cities=City::findorFail($id);
        $countries = Country::all();
        return view("dashboard.cities.edit", compact("cities","countries"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $city=City::findorFail($id);

        $city->update([
            'NameE'=>$request->NameE,
            'NameA'=>$request->NameA,
            'Country_id'=>$request->Country_id,
        ]);
        return redirect()->route("dashboard.cities.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

         // Find the Country record by its ID
         $country = City::findOrFail($id);

         // Check if there are associated City records
         $citiesCount = Hotel::where('City_id', $id)->count();


         if ($citiesCount > 0) {

             return redirect()->back();
         }

         // If no associated cities, proceed with deleting the Country

        $country->delete();
        return redirect()->route("dashboard.cities.index");


         // Optionally, you can redirect to a specific route after the deletion



        // City::findorFail($id)->delete();
        // return redirect()->route("dashboard.cities.index");
    }
}