<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms =RoomType::get();
        return view("dashboard.roomType.index" , compact("rooms"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.roomType.create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rooms=RoomType::create([
            'Name'=>$request->Name,
        ]);

        return redirect(route('dashboard.roomType.index'));
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
        $room=RoomType::findorFail($id);

        return view('dashboard.roomType.edit',compact('room'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $room=RoomType::findorFail($id);
        $room->update([
            'Name'=>$request->Name,
        ]);
        return redirect(route('dashboard.roomType.index'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $room=RoomType::findorFail($id);
        $room->delete();
        return redirect(route('dashboard.roomType.index'));

    }
}