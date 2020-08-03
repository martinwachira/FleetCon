<?php

namespace App\Http\Controllers;

use App\Truck;
use Illuminate\Http\Request;

class TruckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function destroy(Truck $truck)
    {
        //
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

        return view('Truck.AddTruck.addTrailer')->with(['horseDetails'=>$horseDetails]);

    }
}
