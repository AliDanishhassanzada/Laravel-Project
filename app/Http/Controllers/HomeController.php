<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\View;
use App\Models\Reservation;

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
        $reservations = Reservation::paginate(5);
        $viewpoints = View::paginate(5);

        $numberreservation = 1;
        $numberviewpoint = 1;
        return view('home',
        ["numberreservation" => $numberreservation,
        "numberviewpoint" => $numberviewpoint,
        "reservations" => $reservations,
        "viewpoints" => $viewpoints
     ]);
    }
}
