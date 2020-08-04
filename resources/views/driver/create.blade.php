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
                <h3 class="card-title">Add a new Driver</h3>
        </div>
        <br>
    </div>
    {!! Form::open(['action' => 'DriverController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    @csrf
    <form class="form-horizontal col-md-9" style="margin-left:100px">
        <div class="card-body">
            <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputName" name="name" placeholder="Driver's Names" required>
                </div>
                <label for="inputId" class="col-sm-2 col-form-label">ID Number</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" id="inputId" name="id_number" placeholder="Driver's Id" required>
                </div>
            </div>
            <div class="form-group row">                
            </div>
            <div class="form-group row">
                <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputPhone" name="phone_number" placeholder="Phone" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputSalary" class="col-sm-2 col-form-label">Salary</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputSalary" name="driver_salary" placeholder="Salary" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputLoadBonus" class="col-sm-2 col-form-label">Load Bonus (%)</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="inputLoadBonus" name="load_bonus" placeholder="Load Bonus" required>
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