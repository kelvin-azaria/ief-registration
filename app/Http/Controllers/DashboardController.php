<?php

namespace App\Http\Controllers;

use App\Models\Contestant;
use Illuminate\Http\Request;

class DashboardController extends Controller
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
    public function show($id)
    {
        $contestant = Contestant::findOrFail($id);
        return view('pages.dashboard.show',['contestant' => $contestant]);
    }

    public function index()
    {
        $contestants = Contestant::paginate(10);
        return view('pages.dashboard.index',['contestants' => $contestants]);
    }
}
