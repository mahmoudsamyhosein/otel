<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Room;
use RealRashid\SweetAlert\Facades\Alert;

class RoomController extends Controller
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
        $allrooms = Room::latest()->paginate(10);
        
        $datahandler = include(resource_path('formhandler/data.php'));



        return view('admin/config/rooms/index',compact('allrooms','datahandler'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('rooms.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request  $request)
    {
        $new_room = new Room();

        $new_room->name = $request->name;
        $new_room->flat_number_in_shomos = $request->flat_number_in_shomos;
        $new_room->level_name = $request->level_name;
        $new_room->rooms_count = $request->rooms_count;
        $new_room->bathroom_count = $request->bathroom_count;
        $new_room->single_bed_count = $request->single_bed_count;
        $new_room->double_bed_count = $request->double_bed_count;
        $new_room->closit_count = $request->closit_count;
        $new_room->tvs_count = $request->tvs_count;
        $new_room->conditioner_type = $request->conditioner_type;
        $new_room->flat_kind = $request->flat_kind;
        $new_room->note = $request->note;

        $new_room->save();

        
        return redirect(route('rooms.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        return view('rooms.show',['room' => $room]);
        
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
        return view('rooms.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,Room $room)
    {
        $room->name = $request->name;
        $room->flat_number_in_shomos = $request->flat_number_in_shomos;
        $room->level_name = $request->level_name;
        $room->rooms_count = $request->rooms_count;
        $room->bathroom_count = $request->bathroom_count;
        $room->single_bed_count = $request->single_bed_count;
        $room->double_bed_count = $request->double_bed_count;
        $room->closit_count = $request->closit_count;
        $room->tvs_count = $request->tvs_count;
        $room->conditioner_type = $request->conditioner_type;
        $room->flat_kind = $request->flat_kind;
        $room->note = $request->note;

        $room->save();

        
        return redirect(route('rooms.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        $room->delete();

        return redirect()->route('rooms.index');
    }
}
