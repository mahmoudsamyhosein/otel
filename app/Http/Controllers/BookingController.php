<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;


class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allbookings = Booking::latest()->paginate(10);

        return view('admin/bookings/index',compact('allbookings'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookings.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request  $request)
    {
        $new_bookings = new Booking();

        $new_bookings->contract_no = $request->contract_no;
        $new_bookings->booking_status = $request->booking_status;
        $new_bookings->flat = $request->flat;
        $new_bookings->flat_total = $request->flat_total;
        $new_bookings->booking_total = $request->booking_total;
        $new_bookings->sign_in = $request->sign_in;
        $new_bookings->sign_out = $request->sign_out;
        $new_bookings->duration = $request->duration;
        $new_bookings->rent_value = $request->rent_value;
        $new_bookings->amount = $request->amount;
        $new_bookings->taxes = $request->taxes;
        $new_bookings->total = $request->total;
        $new_bookings->insurances = $request->insurances;
        $new_bookings->paid_up = $request->paid_up;
        $new_bookings->Balance = $request->Balance;
        

        $new_bookings->save();

        session()->flash('flash_message', 'تمت أضافة العميل بنجاح');
        
        return redirect()->route('bookings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $Booking)
    {
        return view('bookings.show',['guest' => $Booking]);
        
    }

    public function view(Request $request)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('bookings.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,Booking $Booking)
    {
        $Booking->contract_no = $request->contract_no;
        $Booking->booking_status = $request->booking_status;
        $Booking->flat = $request->flat;
        $Booking->flat_total = $request->flat_total;
        $Booking->booking_total = $request->booking_total;
        $Booking->sign_in = $request->sign_in;
        $Booking->sign_out = $request->sign_out;
        $Booking->duration = $request->duration;
        $Booking->rent_value = $request->rent_value;
        $Booking->amount = $request->amount;
        $Booking->taxes = $request->taxes;
        $Booking->total = $request->total;
        $Booking->insurances = $request->insurances;
        $Booking->paid_up = $request->paid_up;
        $Booking->Balance = $request->Balance;
        

        $Booking->save();

        session()->flash('flash_message', 'تم نعديل العميل بنجاح');
        return redirect(route('bookings.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $Booking)
    {
        $Booking->delete();

        return redirect()->route('bookings.index')
            ->withSuccess('تم الحذف بنجاح');
    }
}
