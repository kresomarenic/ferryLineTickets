<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FerryLineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ferryLines = \App\FerryLine::with(['departureFerryPort', 'destinationFerryPort'])->paginate();
        return view('ferryLines/index', ['ferryLines' => $ferryLines]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        $ferryPorts = \App\FerryPort::all();        
        return view('ferryLines/create', ['ferryPorts' => $ferryPorts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'destination_port_id' => 'different:departure_port_id'            
        ]);
    
        if ($validator->fails()) {
            return redirect()->action('FerryLineController@create')
                ->withErrors($validator);
        }

        $data = $request->input();
        \App\FerryLine::create($data);
        return redirect()->action('FerryLineController@index');
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
        \App\FerryLine::destroy($id);
        return redirect()->action('FerryLineController@index');
    }
}
