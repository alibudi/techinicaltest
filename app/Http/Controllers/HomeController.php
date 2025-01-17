<?php

namespace App\Http\Controllers;

use App\Models\Learning;
use App\Models\Package;
use App\Models\Setting;
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
        $this->middleware('auth')->except(['landing']);

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function landing()
    {
        $package = Package::take(3)->get();
        $learnings = Learning::all();
        $settings = Setting::all();
        return view('landing', compact('package','learnings','settings'));
    }
}
