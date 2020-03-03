<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Events;
use app\User_events;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() { return view('home'); }

         public function event() {
            //    if (roleCheck()) {
                    return view('organize.event');
                // }
           }

    public function map() { return view('map.index'); }

    public function success() { return view('status.success'); }

    public function error() { return view('status.error'); }

    public function profile() { return view('user.profile.index'); }

    public function rsvp() { return view('user.rsvp.index'); }

    public function user_events (Request $request) {
        $validatedData = $request->validate([
            'name' => 'max:180|nullable',
            'username' => 'required',
            'email' => 'required',
            'address' => 'required',
            'rsvp' => 'required'

        ]);

        $gl = User_events::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'address' => $request->address,
            'rsvp' => $request->rsvp
        ]);
            return redirect('/');
    }

    public function postevent (Request $request) {
        $validatedData = $request->validate([
            'title' => 'max:180|nullable',
            'date' => 'required',
            'lat' => 'nullable',
            'lon' => 'nullable',
            'address' => 'nullable',
            'creator' => 'nullable'
        ]);

        $gl = Events::create([
            'title' => $request->title,
            'date' => $request->date,
            'lat' => $request->lat,
            'lon' => $request->lon,
            'address' => $request->address,
            'creator' => Auth::user()->username
        ]);
        return redirect("/success");
    }


}
