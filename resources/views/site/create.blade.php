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
        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-globe "></i></span>
        <div class="info-box-content">
                <h3 class="card-title">Add a new Site</h3>
        </div>
        <br>
    </div>
    {!! Form::open(['action' => 'SiteController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    @csrf
    <form class="form-horizontal col-md-9" style="margin-left:100px">
        <div class="card-body">
            <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Site's Name</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputName" name="name" placeholder="Site's Name" required>
                </div>
                <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="inputAddress" name="address" placeholder="Address" required>
                </div>
            </div>
            <div class="form-group row">                
            </div>
            <div class="form-group row">
                <label for="inputGPS" class="col-sm-2 col-form-label">GPS Co-ordinates</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputGPS" name="gps_coordinates" placeholder="GPS Co-ordinates" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputProduct" class="col-sm-2 col-form-label">Product</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputProduct" name="product" placeholder="Product" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputType" class="col-sm-2 col-form-label">Type</label>
                <div class="col-sm-9">
                    <select name="type_of_site" id="inputType" class="form-control" placeholder="Choose One">
                        <option value="">Choose One</option>
                        <option value="Loading">Loading</option>
                        <option value="Offloading">Offloading</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-info">Add Site</button>
            <button type="reset" class="btn btn-default float-right">Cancel</button>
        </div>
    </form>
</div>

@endsection()