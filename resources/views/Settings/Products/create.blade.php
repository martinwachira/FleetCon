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
        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-user-plus"></i></span>
        <div class="info-box-content">
                <h3 class="card-title">Add a new Product</h3>
        </div>
        <br>
    </div>
    {!! Form::open(['action' => 'ProductController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    @csrf
    <form class="form-horizontal col-md-9" style="margin-left:100px">
        <div class="card-body">            
        <div class="form-group row">
                <label for="inputPhone" class="col-sm-2 col-form-label">Product Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputName" name="name" placeholder="Name" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Unit of Measure</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputUnit" name="unit_of_measure" placeholder="Unit" required>
                </div>
                <label for="inputId" class="col-sm-1 col-form-label">Symbol</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputSymbol" name="symbol" placeholder="Symbol" required>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-info">New Product</button>
            <button type="reset" class="btn btn-default float-right">Cancel</button>
        </div>
    </form>
</div>

@endsection()