<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mail;
use App\Models\Order;
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

    public function form_create()
    {
        return view('alerts/index');
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


    public function form_store_1(Request $request)
    {
        $Otel_Software_Order = new Order();

        $Otel_Software_Order->name           = $request->name;
        $Otel_Software_Order->email          = $request->email;
        $Otel_Software_Order->city           = $request->city;
        $Otel_Software_Order->address        = $request->address;
        $Otel_Software_Order->how_know_us    = $request->how_know_us;
        $Otel_Software_Order->hotel_name     = $request->hotel_name;

        $Otel_Software_Order->save();



        if ($Otel_Software_Order) {
            Alert::success(' نجاح', 'شكرا لطلب نسخة تجريبة');
            return back();
        }
        else {
            Alert::error('فشل', 'لم يتم تسجيلك برجاء المحاولة مرة أخري ');
            return back();
        }
        
        return redirect()->view('alerts/index');
    }




}
