<?php

namespace App\Http\Controllers;

use App\LoadTrucks;
use Illuminate\Http\Request;
use  App\Http\Resources\LoadTruckResource;
use  App\Http\Resources\LoadTruckResourceCollection;
use Illuminate\Support\Facades\Validator;
class LoadTrucksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response(LoadTruckResourceCollection::collection(LoadTrucks::all()),200);
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
        //! storing a single company.
       

         //! storing a single company.
         $validator = Validator::make($request->all(), [
            'truck_id'=> 'required|exists:trucks,id',
            'clock_in_id'=> 'required|exists:clock_ins,id',
            'user_id'=> 'required|exists:users,id',
            'route_id'=> 'exists:routes,id',            
            'loading_tonnage'=> 'integer',                        
            'offloading_tonnage'=> 'integer',
        ]);

        if ($validator->fails()) {
            
            // ! return the errors that have been gotten from posting the data.

            return response($validator->errors(),250);

        }

        $loadTrucks = new LoadTrucks;
        $loadTrucks->fill($request->all())->save();
        return response("Successfully Added Loading Truck. ",200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LoadTrucks  $loadTrucks
     * @return \Illuminate\Http\Response
     */
    public function show($loadTrucks)
    {
        //
        $loadTrucksArray =LoadTrucks::where('id',$loadTrucks)->get();
        $newLoadTruck = null;
        foreach ($loadTrucksArray as $truck) {
            $newLoadTruck = $truck;            
        }

        return response(new LoadTruckResource($newLoadTruck),200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LoadTrucks  $loadTrucks
     * @return \Illuminate\Http\Response
     */
    public function edit(LoadTrucks $loadTrucks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LoadTrucks  $loadTrucks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $loadTrucks)
    {
        //
        $validator = Validator::make($request->all(), [
            'truck_id'=> 'exists:trucks,id',
            'clock_in_id'=> 'exists:clock_ins,id',
            'user_id'=> 'exists:users,id',
            'route_id'=> 'exists:routes,id',            
            'loading_tonnage'=> 'integer',                        
            'offloading_tonnage'=> 'integer',            
        ]);

        if ($validator->fails()) {
            
            // ! return the errors that have been gotten from posting the data.

            return response($validator->errors(),250);

        }

        $loadTrucksArray =LoadTrucks::where('id',$loadTrucks)->get();
        $newLoadTruck = null;
        foreach ($loadTrucksArray as $truck) {
            $truck->update($request->all());       
        }
        return response("Successfully Updated Loading Truck. ",200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LoadTrucks  $loadTrucks
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoadTrucks $loadTrucks)
    {
        //
        $loadTrucksArray =LoadTrucks::where('id',$loadTrucks)->get();
        $newLoadTruck = null;
        foreach ($loadTrucksArray as $truck) {
            $truck->delete();       
        }
        return response("Successfully Deleted Loading Truck. ",200);
    }
}
