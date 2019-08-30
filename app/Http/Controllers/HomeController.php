<?php

namespace App\Http\Controllers;

use App\LocationData;
use Illuminate\Http\Request;

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
    public function index()
    {
        $data = LocationData::join('locations', 'location_data.location', '=', 'locations.id')
            ->orderBy('locations.name', 'desc')
            ->orderBy('paid', 'desc')
            ->select('location_data.*')
            ->with('loc')
            ->get();

        return view('home', [
            'data' => $data
        ]);
    }
}
