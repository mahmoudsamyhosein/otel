<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ClientController extends Controller
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
        $allclients = Guest::latest()->paginate(10);
        
        $datahandler = include(resource_path('formhandler/data.php'));



        return view('admin/clients/index',compact('allclients','datahandler'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
            return view('clients.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request  $request)
    {
        $new_guest = new Guest();

        $new_guest->name = $request->name;
        $new_guest->guest_type = $request->guest_type;
        $new_guest->phone_of_work = $request->phone_of_work;
        $new_guest->approve_type = $request->approve_type;
        $new_guest->place_of_issue = $request->place_of_issue;
        $new_guest->date_of_birth = $request->date_of_birth;
        $new_guest->email = $request->email;
        $new_guest->category = $request->category;
        $new_guest->nationalty = $request->nationalty;
        $new_guest->id_copy = $request->id_copy;
        $new_guest->date_of_expiry = $request->date_of_expiry;
        $new_guest->kind = $request->kind;
        $new_guest->phone = $request->phone;
        $new_guest->place_of_work = $request->place_of_work;
        $new_guest->address = $request->address;
        $new_guest->note = $request->note;
        $new_guest->note_2 = $request->note_2;
        $new_guest->approve_number = $request->approve_number;

        $new_guest->save();

        
        return redirect()->route('clients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Guest $guest)
    {
        return view('clients.show',['guest' => $guest]);
        
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
        return view('clients.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,Guest $guest)
    {
        $guest->name = $request->name;
        $guest->guest_type = $request->guest_type;
        $guest->phone_of_work = $request->phone_of_work;
        $guest->approve_type = $request->approve_type;
        $guest->place_of_issue = $request->place_of_issue;
        $guest->date_of_birth = $request->date_of_birth;
        $guest->email = $request->email;
        $guest->category = $request->category;
        $guest->nationalty = $request->nationalty;
        $guest->id_copy = $request->id_copy;
        $guest->date_of_expiry = $request->date_of_expiry;
        $guest->kind = $request->kind;
        $guest->phone = $request->phone;
        $guest->place_of_work = $request->place_of_work;
        $guest->address = $request->address;
        $guest->note = $request->note;
        $guest->note_2 = $request->note_2;
        $guest->approve_number = $request->approve_number;

        $guest->save();

        return redirect(route('clients.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guest $guest)
    {
        $guest->delete();

        return redirect()->route('clients.index');
        
    }
}
