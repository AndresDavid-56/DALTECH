<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guide;
use App\Models\City;
use App\Models\Hotel;
use App\Models\Package;
use App\Models\Transport;
use App\Models\User;

class DropDownController extends Controller
{
    //
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $data['cities'] = City::get(["city_name", "id"]);
        return view('package.create', $data);
    }
    public function index2()
    {
        $data['cities'] = City::get(["city_name", "id"]);
        return view('/package_choose', $data);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function fetchGuide(Request $request)
    {
        $data['guides'] = Guide::where("city_id", $request->city_id)
                                ->get(["guide_name", "id"]);
  
        return response()->json($data);
    }

    public function fetchHotel(Request $request)
    {
        $data['hotels'] = Hotel::where("city_id", $request->city_id)
                                    ->get(["hotel_name", "id"]);
                                      
        return response()->json($data);
    }

    public function fetchTransport(Request $request)
    {
        $data['transports'] = Transport::where("city_id", $request->city_id)
                                    ->get(["description_transport", "id"]);
                                      
        return response()->json($data);
    }
}
