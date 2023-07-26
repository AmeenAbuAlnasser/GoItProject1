<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\MealPlanes;
use Illuminate\Http\Request;

class MealPlanesController extends Controller
{

    public function index()
    {
        $plans = MealPlanes::get();
        return view("dashboard.mealPlanes.index" , compact("plans"));
    }


    public function create()
    {
        return view("dashboard.mealPlanes.create");
    }


    public function store(Request $request)
    {
        MealPlanes::create([
            'Name'=>$request->Name,
        ]);

        return redirect(route('dashboard.mealPlanes.index'));
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
        $plan=MealPlanes::findorFail($id);

        return view('dashboard.mealPlanes.edit',compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $plan=MealPlanes::findorFail($id);
        $plan->update([
            'Name'=>$request->Name,
        ]);
        return redirect(route('dashboard.mealPlanes.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $plan=MealPlanes::findorFail($id);
        $plan->delete();
        return redirect(route('dashboard.mealPlanes.index'));

    }
}