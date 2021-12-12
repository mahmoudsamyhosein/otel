<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControlPanel_Controller extends Controller
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
    public function show()
    {
        return view('admin/controlpanel');
    }


    public function configration()
    {
        return view('admin/config/index');
    }
}
