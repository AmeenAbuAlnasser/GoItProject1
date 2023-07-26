<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\TicketType;
use Illuminate\Http\Request;

class TicketTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets=TicketType::get();
        return view('dashboard.TicketType.index',compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.TicketType.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rooms=TicketType::create([
            'Name'=>$request->Name,
        ]);

        return redirect(route('dashboard.TicketType.index'));
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
        $ticket=TicketType::findorFail($id);

        return view('dashboard.TicketType.edit',compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $ticket=TicketType::findorFail($id);
        $ticket->update([
            'Name'=>$request->Name,
        ]);
        return redirect(route('dashboard.TicketType.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ticket=TicketType::findorFail($id);
        $ticket->delete();
        return redirect(route('dashboard.TicketType.index'));
    }
}