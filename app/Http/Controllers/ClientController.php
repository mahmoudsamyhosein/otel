<?php

namespace App\Http\Controllers;

use App\Http\Requests\Guest\StoreGuestRequest;
use App\Http\Requests\Guest\UpdateGuestRequest;

use App\Models\Guest;
use Illuminate\Http\Request;


class ClientController extends Controller
{
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allclients = Guest::latest()->paginate(10);

        return view('admin/clients/index',compact('allclients'));
        
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
    public function store( Guest $guest ,StoreGuestRequest  $request)
    {
        $guest->create(array_merge($request->validated(),[
        ]));
        
        return redirect()->route('clients.index')
            ->withSuccess('تم أنشاء العميل بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Guest $guest)
    {
        return view('clients.show',['guest' =>$guest]);
        
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
    public function edit(Guest $guest)
    {
        return view('clients.edit',['guest' =>$guest]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Guest $guest , UpdateGuestRequest $request)
    {
       $guest->update($request->validated());

        return redirect()->route('clients.index')
            ->withSuccess('تم تحديث بيانات العميل بنجاح');
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

        return redirect()->route('clients.index')
            ->withSuccess('تم الحذف بنجاح');
        

    }
}
