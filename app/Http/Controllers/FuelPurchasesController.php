<?php

namespace App\Http\Controllers;

use App\FuelPurchases;
use Illuminate\Http\Request;
use App\Http\Resources\FuelPurchaseResource;
use App\Http\Resources\FuelPurchaseResourceCollection;
use Illuminate\Support\Facades\Validator;
class FuelPurchasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response(FuelPurchaseResourceCollection::collection(FuelPurchases::all()),200);
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
         $validator = Validator::make($request->all(), [
            'truck_id' => 'required|exists:trucks,id',
            'clock_in_id' => 'exists:clock_ins,id',
            'user_id' => 'required|exists:users,id',
            'mileage'=> 'integer',
            'litres_purchased'=> 'integer|required'
        ]);

        if ($validator->fails()) {
            
            // ! return the errors that have been gotten from posting the data.

            return response($validator->errors(),250);

        }

        $fuelPurchases = new FuelPurchases();
        $fuelPurchases->fill($request->all())->save();

        return response('Successfully Added A Fuel Purchase.',200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FuelPurchases  $fuelPurchases
     * @return \Illuminate\Http\Response
     */
    public function show($fuelPurchases)
    {
        //
        $fuelPurchasesArray = FuelPurchases::where('id',$fuelPurchases)->get();
        $newFuelPurchases = null;
        foreach ($fuelPurchasesArray as $fuelPurchase) {
            # code...
            $newFuelPurchases = $fuelPurchase;
        }
        return response(new FuelPurchaseResource($newFuelPurchases),200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FuelPurchases  $fuelPurchases
     * @return \Illuminate\Http\Response
     */
    public function edit(FuelPurchases $fuelPurchases)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FuelPurchases  $fuelPurchases
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $fuelPurchases)
    {
        //
        //! storing a single company.
        $validator = Validator::make($request->all(), [
            'truck_id' => 'exists:trucks,id',
            'clock_in_id' => 'exists:clock_ins,id',
            'user_id' => 'exists:users,id',
            'mileage'=> 'integer',
            'litres_purchased'=> 'integer'
        ]);

        if ($validator->fails()) {
            
            // ! return the errors that have been gotten from posting the data.

            return response($validator->errors(),250);

        }

        $fuelPurchasesArray = FuelPurchases::where('id',$fuelPurchases)->get();        
        foreach ($fuelPurchasesArray as $fuelPurchase) {
            # code...
            $fuelPurchase->update($request->all());
        }

        
        return response('Successfully Updated A Fuel Purchase.',200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FuelPurchases  $fuelPurchases
     * @return \Illuminate\Http\Response
     */
    public function destroy($fuelPurchases)
    {
        //
        $fuelPurchasesArray = FuelPurchases::where('id',$fuelPurchases)->get();        
        foreach ($fuelPurchasesArray as $fuelPurchase) {
            # code...
            $fuelPurchase->delete();
        }
        
        return response('Successfully Deleted A Fuel Purchase.',200);
    }
}
