<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests, DispatchesJobs;
    public function dashboard() {
        return view('dashboard');
    }

    public function main() {
        $events = Event::orderBy('date_event', 'desc')->take(3)->get();
        
        return view('homepage', compact('events'));
    }

    public function allEvents() {
        $events = Event::orderBy('date_event', 'desc')->get();
        
        return view('homepage', compact('events'));
    }
}
