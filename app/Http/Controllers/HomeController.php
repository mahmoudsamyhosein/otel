<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mail;
use RealRashid\SweetAlert\Facades\Alert;


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



    public function show()
    {
        return view('front-end-theme/index');
    }

    public function create()
    {
        return view('alerts/index');
    }


    public function store(Request $request)
    {
        $subscribed = new Mail;

        $subscribed->name = $request->name;
        $subscribed->email = $request->email;
        $subscribed->save();



        if ($subscribed) {
            Alert::success('نجاح', 'شكرا لتسجيلك في قائمتنا البريدية');
            return back();
        }
        else {
            Alert::error('فشل', 'لم يتم تسجيلك برجاء المحاولة مرة أخري ');
            return back();
        }
        
        return redirect()->view('alerts/index');
    }




}
