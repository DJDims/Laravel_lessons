<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Register_event;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegister(Event $event){
        return view('events.register', compact('event'));
    }

    public function register(Request $request, Event $event){
        $request->validate([
            'contact_person' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'group_name' => 'required',
            'number_members' => 'required',
            'events_id' => 'required'
        ]);

        $data = $request->all();
        Register_event::create($data);
        return view('events.registerSuccess', compact('event'));
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Register_event $register_event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Register_event $register_event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Register_event $register_event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Register_event $register_event)
    {
        //
    }
}
