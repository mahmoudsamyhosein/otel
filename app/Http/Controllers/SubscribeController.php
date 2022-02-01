<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mail;

use RealRashid\SweetAlert\Facades\Alert;


class SubscribeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function subscribe_create()
    {
        return view('alerts/index');
    }



    public function subscribe_store(Request $request)
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
