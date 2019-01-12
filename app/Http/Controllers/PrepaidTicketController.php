<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrepaidTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prepaidTickets = \App\PrepaidTicket::with(['citizen', 'ferryLine'])->paginate();
        return view('prepaidTickets/index', ['prepaidTickets' => $prepaidTickets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $citizens = \App\Citizen::all();
        $ferryLines = \App\FerryLine::all();
        return view('prepaidTickets/create', ['citizens' => $citizens, 'ferryLines' => $ferryLines]);
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
            'valid_from' => 'required|date' ,          
            'valid_to' => 'required|date|after:valid_from'
        ]);
    
        if ($validator->fails()) {
            return redirect()->action('PrepaidTicketController@create')
                ->withErrors($validator);
        }

        $data = $request->input();
        \App\PrepaidTicket::create($data);
        return redirect()->action('PrepaidTicketController@index');
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
        \App\PrepaidTicket::destroy($id);
        return redirect()->action('PrepaidTicketController@index');
    }
}
