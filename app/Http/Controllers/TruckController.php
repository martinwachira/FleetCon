<?php

namespace App\Http\Controllers;

use App\Truck;
use Illuminate\Http\Request;
use Session;

class TruckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //! getting all the trucks registered. 
        $allTrucks = Truck::all();
        return view('Truck.viewAllTrucks')->with(['trucks'=>$allTrucks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function show(Truck $truck)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function edit(Truck $truck)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Truck $truck)
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $id = $request->idOfTruck;
        $trucks = Truck::where('id',$id)->get();          
        foreach ($trucks as $truck) {
            # code...
            $truck->delete();
        }    
        return back();
    }

    // ! this is the function to get the first step os adding the truck. 
    public function addHorse(){
        return view('Truck.AddTruck.addHorse');
    }

    // ! this is the method to post the horse data. 

    public function postHorseData(Request $request){

        // ! initialize array to hold data.
        $horseDetails = [];
        $postedData = $request->all();
        foreach($postedData as $key => $data){
            if ($key != '_token') {
                # code...
                $horseDetails[$key] = $data;
            }                        
        }

        // ! creating session to hold the horse data. 

            Session::put('horseDetailsSession', $horseDetails);      

        return view('Truck.AddTruck.addTrailer');

    }

    // ! this is the function that is used to get the AddingTrailer View.
    public function gettingAddTrailer(){
        return view('Truck.AddTruck.addTrailer');
    }

    // ! this is the function to post the addTrailer Data. 

    public function postAddTrailerData(Request $request){

        $trailerDetails = [];
        $postedData = $request->all();        
        $mergingHorseAndTrailerDetails = Session::get('horseDetailsSession');
        foreach($postedData as $key => $data){
            if ($key != '_token') {
                # code...
                $trailerDetails[$key] = $data;
                $mergingHorseAndTrailerDetails[$key] = $data;
            }                        
        }
    
        // ! creating session to hold the trailer data. 

        Session::put('TrailerDetailsSession', $trailerDetails);

        // ! creating the session that holds both the trailer and the horse details.
        Session::put('HorseAndTrailerDetailsSession', $mergingHorseAndTrailerDetails);

        return view('Truck.AddTruck.addFinancialData');

    }

    public function postFinancial(Request $request){
        
        $postedData = $request->all();
        // dd($postedData);         
        $allTruckData = Session::get('HorseAndTrailerDetailsSession');

        foreach($postedData as $key => $data){
            if ($key != '_token') {
                # code...
                
                $allTruckData[$key] = $data;
            }                        
        }

        // ! creating Truck object. 
        $newTruck = new Truck();

        foreach($allTruckData as $key => $data){

            $newTruck->$key = $data;

        }

        $newTruck->save();
        
        // ! forgetting all sessions. 
        Session::forget('HorseAndTrailerDetailsSession');
        Session::forget('TrailerDetailsSession');
        Session::forget('horseDetailsSession');
        
        return view('Truck.AddTruck.addHorse');
    }

    
}
