<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClockIns;
use App\Http\Resources\ClockInResource;
use App\Http\Resources\ClockInResourceCollection;
use Illuminate\Support\Facades\Validator;
class ClockInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response(ClockInResourceCollection::collection(ClockIns::all()));
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
        //! storing a single company.
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'truck_id' => 'required|exists:trucks,id',
            'clock_in_milage' => 'integer',
            'clock_out_milage'=> 'integer'
        ]);

        if ($validator->fails()) {
            
            // ! return the errors that have been gotten from posting the data.

            return response($validator->errors(),250);

        }

        $clockIns = new ClockIns ();
        $clockIns->fill($request->all())->save();

        return response("Successfully Added A New ClockIn.",200);
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
        $clockIns = ClockIns::where('id',$id)->get();
        $newClockIn = null;
        foreach ($clockIns as $clockIn) {
            # code...
            $newClockIn = $clockIn;
        }
        return response(new ClockInResource($newClockIn),200);
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
        //! storing a single company.
        $validator = Validator::make($request->all(), [
            'user_id' => 'exists:users,id',
            'truck_id' => 'exists:trucks,id',
            'clock_in_milage' => 'integer',
            'clock_out_milage'=> 'integer'
        ]);

        if ($validator->fails()) {
            
            // ! return the errors that have been gotten from posting the data.

            return response($validator->errors(),250);

        }
        $clockIns = ClockIns::where('id',$id)->get();
        $newClockIn = null;
        foreach ($clockIns as $clockIn) {
            # code...
            $newClockIn = $clockIn;
        }
        $newClockIn->update($request->all());
        return response("Successfully Updated A ClockIn.",200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //        
        $clockIns = ClockIns::where('id',$id)->get();        
        foreach ($clockIns as $clockIn) {
            # code...
            $clockIn->delete();
        }
        return response("Successfully Delete A ClockIn.",200);
    }
}
