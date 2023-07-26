<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Country::withCount(['cities'])->get();
        return view("dashboard.countries.index" , compact("countries"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.countries.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "Code" => "required|string|max:5",
        ]);

        Country::create($request->except("_token"));

        return redirect()->route("dashboard.countries.index");
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
        $country=Country::findorFail($id);

        return view("dashboard.countries.edit", compact("country"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $country=Country::findorFail($id);

        $country->update([
            'NameE'=>$request->NameE,
            'NameA'=>$request->NameA,
            'Code'=>$request->Code,
        ]);
        return redirect()->route("dashboard.countries.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id) {

        // Find the Country record by its ID
        $country = Country::findOrFail($id);

        // Check if there are associated City records
        $citiesCount = City::where('country_id', $id)->count();


        if ($citiesCount > 0) {

            return redirect()->back();
        }

        // If no associated cities, proceed with deleting the Country

       $country->delete();
       return redirect()->route("dashboard.countries.index");
       

        // Optionally, you can redirect to a specific route after the deletion


}
}