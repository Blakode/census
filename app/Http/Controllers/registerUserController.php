<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use App\Models\LGA;
use App\Models\State;
use App\Models\Ward;
use Illuminate\Http\Request;

class registerUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */
    public function index()
    {
        $citizen =  \App\Models\Citizen::with('ward')->get();
        $ward = Ward::with('lga','citizen')->get();
        $lga = LGA::with('state')->get();

    


    return view('reports')->with([
        'citizen'=> $citizen, 
        'ward' => $ward,
        'lga' => $lga,

                    ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        // store into citizen database 
        $request->validate([
            'fname' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'ward' => 'required'
        ]);

    $name = $request->input('fname').' '. $request->input('lname');

        Citizen::create([
            'name' => $name,
            'gender' => $request->input('gender'),
            'address' => $request->input('phone'),
            'phone' => $request->input('address'),
            'ward_id' => $request->input('ward'), 

        ]);

        //association to a LGA & city would be written here 
        return redirect('dashboard')->with('message', 'citizen sucessfully resgistered'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
