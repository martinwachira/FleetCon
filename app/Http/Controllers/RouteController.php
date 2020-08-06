<?php

namespace App\Http\Controllers;

use App\Route;
use App\Site;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routes = Route::OrderBy('created_at')->paginate(10);
        $loadings = Site::all();
        // return view('route.view')->with('routes', $routes);
        return view('route.view', compact('routes', 'loadings'));
    }

    public function getSites()
    {
        // $loadings = Site::all()->where('type', 'Loading');
        $loadings = Site::where('type_of_site', 'Loading')->get();
        $offloadings = Site::where('type_of_site', 'Offloading')->get();
        return $loadings;
        // return view('route.view')->with('loadings', 'offloadings');
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
    public function store(Request $request, Route $route)
    {
        $data = $request->all();
        // dd($data);
        $route->fill($data)->save();

        return redirect('/routes')->with('success', 'Route added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function show(Route $route)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function edit(Route $route)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Route $route)
    {
        $data = $request->all();
        $route->fill($data)->save();

        return redirect('/routes')->with('success', 'ROute Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->idSite;
        $routes = Route::where('id',$id)->get();          
        foreach ($routes as $route) {
            # code...
            $route->delete();
        }    
        // return back();
        return redirect('/routes')->with('success', 'Route Deleted');
    }

    // ! function to get the the form to add the route. 

    public function addRoute(){
        $loadings = Site::where('type_of_site', 'Loading')->get();
        $offloading = Site::where('type_of_site', 'Offloading')->get();

        return view('route.create')->with(['loadings'=>$loadings,'offloadings'=>$offloading]);

    }
}