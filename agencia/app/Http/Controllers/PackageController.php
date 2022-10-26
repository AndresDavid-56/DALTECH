<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

use App\Models\Hotel;
use App\Models\City;
use App\Models\Guide;
use App\Models\User;
use App\Models\Transport;
use Carbon\Carbon;

class PackageController extends Controller
{


    public function __construct(){
        $this->middleware('auth');
        $this->middleware('can:package.index')->only('index');
        $this->middleware('can:package.edit')->only('edit','create','destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::all();
        $cities = City::all();
        return view('package.index',compact('cities'))->with('packages',$packages);
    }

    public function showAll()
    {
        $packages = Package::all();

        $cities = City::all();
        $users = User::all();
        $transports = Transport::all();
        $guides = Guide::all();
        $hotels = Hotel::all();

        return view('/package_choose',compact('cities','guides','transports',
    'hotels','users'))->with('packages',$packages);
    }

    public function charts()
    {
        $packages = Package::all();

        $cities = City::all();
        $users = User::all();
        $transports = Transport::all();
        $guides = Guide::all();
        $hotels = Hotel::all();

        $conteo = "SELECT MonthName(created_at) as Month, count(*) as numRecords from packages";

        //Meses
        $Enero = Package::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', Carbon::now()->month)->count();

        return view('/dashboard',compact('cities','guides','transports',
    'hotels','users','Enero'))->with('packages',$packages, 'Enero', $Enero);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        $users = User::all();
        $transports = Transport::all();
        $guides = Guide::all();
        $hotels = Hotel::all();
        return view('package.create',compact('cities','guides','transports',
    'hotels','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $packages = new Package();
        $packages->start_date = $request->get('start_date');
        $packages->exit_date = $request->get('exit_date');
        $packages->subtotal = $request->get('subtotal');
        $packages->adults_number = $request->get('adults_number');
        $packages->children_number = $request->get('children_number');
        $packages->elderly_number = $request->get('elderly_number');
        $packages->from = $request->get('from');
        $packages->to = $request->get('to');
        $packages->guides_id = $request->get('guides_id');
        $packages->transports_id = $request->get('transports_id');
        $packages->hotels_id = $request->get('hotels_id');
        $packages->user_id = $request->get('user_id');

        $packages->save();

        return redirect('/createpaypal');
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
        $package = Package::find($id);

        $cities = City::all();
        $users = User::all();
        $transports = Transport::all();
        $guides = Guide::all();
        $hotels = Hotel::all();
        return view('package.edit',compact('cities','guides','transports',
    'hotels','users'))->with('package',$package);
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
        $package = Package::find($id);
        $package->start_date = $request->get('start_date');
        $package->exit_date = $request->get('exit_date');
        $package->subtotal = $request->get('subtotal');
        $package->adults_number = $request->get('adults_number');
        $package->children_number = $request->get('children_number');
        $package->elderly_number = $request->get('elderly_number');
        $package->from = $request->get('from');
        $package->to = $request->get('to');
        $package->guides_id = $request->get('guides_id');
        $package->transports_id = $request->get('transports_id');
        $package->hotels_id = $request->get('hotels_id');
        $package->user_id = $request->get('user_id');

        $package->save();

        return redirect('/packages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $package = Package::find($id);
        $package->delete();

        return redirect('/packages');
    }
}
