@extends('layouts.admin')

@section('content')
<html>

<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

</html>

<div class="card card-info col-md-8" style="margin-left:250px">
    <div class="info-box mb-3">
        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-map-marker"></i></span>
        <div class="info-box-content">
            <h3 class="card-title">Add a new Route</h3>
        </div>
        <br>
    </div>
    {!! Form::open(['action' => 'RouteController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    @csrf

    {!! Form::open(['action' => 'RouteController@index', 'method' => 'GET', 'enctype' => 'multipart/form-data']) !!}
    @csrf
    <form class="form-horizontal col-md-9" style="margin-left:100px">
        <div class="card-body">
            <div class="form-group row">
                <label for="inputLoadingSite" class="col-sm-2 col-form-label">Loading Site</label>
                <div class="col-sm-4">
                    <select name="loading_site" id="inputLoadingSite" class="form-control">
                        <option value="">Select Loading Site</option>
                        @if($loadings ?? '')
                        @foreach($loadings ?? '' as $loading)
                        <option value="{{$site->name}}">{{$loading->name}}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
                
            <label for="inputOffLoadingSite" class="col-sm-2 col-form-label">Off-Loading Site</label>
                <div class="col-sm-3">
                    <select name="loading_site" id="inputLoadingSite" class="form-control">
                        <option value="">Select Loading Site</option>
                        @if($offloadings ?? '')
                        @foreach($offloadings ?? '' as $offloading)
                        <option value="{{$site->name}}">{{$offloading->name}}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputDistance" class="col-sm-2 col-form-label">Distance</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="inputDistance" name="distance" placeholder="Distance" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputTAT" class="col-sm-2 col-form-label">Turn Around Time</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputTAT" name="turn_around_time" placeholder="Turn Around Time" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputLoadPossibleTrip" class="col-sm-2 col-form-label">Possible Trips</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="inputLoadPossibleTrip" name="possible_trips_per_month" placeholder="Possible Trips" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputRands" class="col-sm-2 col-form-label">Rands</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="inputRands" name="rands" placeholder="Rands" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputContractQuantity" class="col-sm-2 col-form-label">Contact Quantity</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="inputContractQuantity" name="contract_quantity_per_month" placeholder="Contract Quantity" required>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-info">Sign in</button>
            <button type="reset" class="btn btn-default float-right">Cancel</button>
        </div>
    </form>
</div>

@endsection()