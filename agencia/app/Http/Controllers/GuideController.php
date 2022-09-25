<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Guide;

use App\Models\City;

class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guides = Guide::all();

        $cities = City::all();
        return view('guide.index',compact('cities'))->with('guides',$guides);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        return view('guide.create',compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $guides = new Guide();
        $guides->guide_name = $request->get('guide_name');
        $guides->price_per_day = $request->get('price_per_day');
        $guides->guide_email = $request->get('guide_email');
        $guides->guide_phone = $request->get('guide_phone');
        $guides->guide_available = $request->get('guide_available');
        $guides->city_id = $request->get('city_id');

        $guides->save();

        return redirect('/guides');
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
        $guide = Guide::find($id);
        $cities = City::all();
        return view('guide.edit', compact('cities'))->with('guide',$guide);
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
        $guide = Guide::find($id);
        $guide->guide_name = $request->get('guide_name');
        $guide->price_per_day = $request->get('price_per_day');
        $guide->guide_email = $request->get('guide_email');
        $guide->guide_phone = $request->get('guide_phone');
        $guide->guide_available = $request->get('guide_available');
        $guide->city_id = $request->get('city_id');

        $guide->save();

        return redirect('/guides');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guide = Guide::find($id);
        $guide->delete();

        return redirect('/guides');
    }
}
