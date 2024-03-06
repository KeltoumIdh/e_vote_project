<?php

namespace App\Http\Controllers;

use App\Models\Election;
use Illuminate\View\View;

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
        $elections = Election::all();
        return view('app', compact('elections'));
    }
    public function adminHome(): View
    {
        return view('admin.index');
    }
}