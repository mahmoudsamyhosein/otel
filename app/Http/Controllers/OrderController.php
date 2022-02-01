<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;

class OrderController extends Controller
{
    public function form_create_1()
    {
        return view('front-end-theme/index');
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

        return view('front-end-theme/index');
    }

}
