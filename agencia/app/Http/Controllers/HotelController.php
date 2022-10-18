<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

use App\Models\City;

class HotelController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('can:hotel.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotel::all();

        $cities = City::all();
        return view('hotel.index',compact('cities'))->with('hotels',$hotels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        return view('hotel.create',compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hotels = new Hotel();
        $hotels->hotel_name = $request->get('hotel_name');
        $hotels->room_number = $request->get('room_number');
        $hotels->price_per_night = $request->get('price_per_night');
        $hotels->hotel_email = $request->get('hotel_email');
        $hotels->hotel_phone = $request->get('hotel_phone');
        $hotels->room_types = $request->get('room_types');
        $hotels->city_id = $request->get('city_id');

        $hotels->save();

        return redirect('/hotels');
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
        $hotel = Hotel::find($id);
        $cities = City::all();
        return view('hotel.edit', compact('cities'))->with('hotel',$hotel);
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
        $hotel = Hotel::find($id);
        $hotel->hotel_name = $request->get('hotel_name');
        $hotel->room_number = $request->get('room_number');
        $hotel->price_per_night = $request->get('price_per_night');
        $hotel->hotel_email = $request->get('hotel_email');
        $hotel->hotel_phone = $request->get('hotel_phone');
        $hotel->room_types = $request->get('room_types');
        $hotel->city_id = $request->get('city_id');

        $hotel->save();

        return redirect('/hotels');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel = Hotel::find($id);
        $hotel->delete();

        return redirect('/hotels');
    }
}
