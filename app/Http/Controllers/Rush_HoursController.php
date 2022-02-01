<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RushHours;
class Rush_HoursController extends Controller
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
        $all_Rush_Hours = RushHours::latest()->paginate(10);
        
        $datahandler = include(resource_path('formhandler/data.php'));



        return view('admin/config/rush_hours/index',compact('all_Rush_Hours','datahandler'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('Rush_Hours.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request  $request)
    {
        $rush_hour = new RushHours();
        $rush_hour->from = $request->from;
        $rush_hour->to = $request->from;
        $rush_hour->category = $request->from;
        $rush_hour->sa = $request->sa;
        $rush_hour->su = $request->su;
        $rush_hour->mo = $request->mo;
        $rush_hour->tu = $request->tu;
        $rush_hour->we = $request->we;
        $rush_hour->th = $request->th;
        $rush_hour->fr = $request->fr;
        
        

        $rush_hour->save();

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(RushHours $rush_hour)
    {
        return view('Rush_Hours.show',['rush_hour' => $rush_hour]);
        
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
        return view('Rush_Hours.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,RushHours $rush_hour)
    {
        $rush_hour->from = $request->from;
        $rush_hour->to = $request->from;
        $rush_hour->category = $request->from;
        $rush_hour->sa = $request->sa;
        $rush_hour->su = $request->su;
        $rush_hour->mo = $request->mo;
        $rush_hour->tu = $request->tu;
        $rush_hour->we = $request->we;
        $rush_hour->th = $request->th;
        $rush_hour->fr = $request->fr;
        

        $rush_hour->save();

        
        return redirect(route('Rush_Hours.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RushHours $rush_hour)
    {
        $rush_hour->delete();

        return redirect()->route('Rush_Hours.index');
    }
}
