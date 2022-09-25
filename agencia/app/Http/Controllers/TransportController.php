<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transport;

use App\Models\City;

class TransportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transports = Transport::all();

        $cities = City::all();
        return view('transport.index',compact('cities'))->with('transports',$transports);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        return view('transport.create',compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transports = new Transport();
        $transports->description_transport = $request->get('description_transport');
        $transports->capacity_transport = $request->get('capacity_transport');
        $transports->price_one_way = $request->get('price_one_way');
        $transports->price_round_trip = $request->get('price_round_trip');
        $transports->seat_number = $request->get('seat_number');
        $transports->transport_type = $request->get('transport_type');
        $transports->transport_email = $request->get('transport_email');
        $transports->transport_phone = $request->get('transport_phone');
        $transports->city_id = $request->get('city_id');

        $transports->save();

        return redirect('/transports');
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
        $transport = Transport::find($id);
        $cities = City::all();
        return view('transport.edit', compact('cities'))->with('transport',$transport);
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
        $transport = Transport::find($id);
        $transport->description_transport = $request->get('description_transport');
        $transport->capacity_transport = $request->get('capacity_transport');
        $transport->price_one_way = $request->get('price_one_way');
        $transport->price_round_trip = $request->get('price_round_trip');
        $transport->seat_number = $request->get('seat_number');
        $transport->transport_type = $request->get('transport_type');
        $transport->transport_email = $request->get('transport_email');
        $transport->transport_phone = $request->get('transport_phone');
        $transport->city_id = $request->get('city_id');
        $transport->save();

        return redirect('/transports');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transport = Transport::find($id);
        $transport->delete();

        return redirect('/transports');
    }
}
