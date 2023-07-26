<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Transportation;
use Illuminate\Http\Request;

class TransportationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transportation=Transportation::get();
        return view('dashboard.Transportation.index',compact('transportation'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.Transportation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $transportation=Transportation::create([
            'From_place'=>$request->FromPlace,
            'To_place'=>$request->ToPlace,
            'type'=>$request->Type,
            'price'=>$request->Price,
            'Contact_Number'=>$request->ContactNumber,
            'Note'=>$request->Note,

        ]);

        return redirect(route('dashboard.Transportation.index'));
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
        $transportation=Transportation::findorFail($id);

        return view('dashboard.Transportation.edit',compact('transportation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $transportation=Transportation::findorFail($id);
        $transportation->update([
            'From_place'=>$request->FromPlace,
            'To_place'=>$request->ToPlace,
            'type'=>$request->Type,
            'price'=>$request->Price,
            'Contact_Number'=>$request->ContactNumber,
            'Note'=>$request->Note,
        ]);
        return redirect(route('dashboard.Transportation.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transportation=Transportation::findorFail($id);
        $transportation->delete();
        return redirect(route('dashboard.Transportation.index'));
    }
}