@extends('admin')
@section('section')

<div class="container">
    <h3>Add Horse.</h3>
    <form action="/postTrailerData" method="POST">
        {{ csrf_field() }}
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="row">
                <div class="col-md-6">
                    Fleet Number
                </div>
                <div class="col-md-6">
                    <input type="number" required name="fleet_number" class="form-control" placeholder="Enter Fleet Number">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    Make
                </div>
                <div class="col-md-6">
                    <input type="text"  required name="make" class="form-control" placeholder="Enter Make">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    Model
                </div>
                <div class="col-md-6">
                    <input type="text" required name="model" class="form-control" id="exampleInputEmail1" placeholder="Enter Model">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    VIN Number
                </div>
                <div class="col-md-6">
                    <input type="number" required name="vin_number" class="form-control" placeholder="Enter VIN Number">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    Engine Number
                </div>
                <div class="col-md-6">
                    <input type="number" required class="form-control" name="engine_number" placeholder="Enter Engine Number">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    Horse Registration
                </div>
                <div class="col-md-6">
                    <input type="number" required class="form-control" name="horse_registration" placeholder="Enter Horse Registration">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    Start Milage (Kms)
                </div>
                <div class="col-md-6">
                    <input type="number" required class="form-control" name="start_milage" placeholder="Enter Start Milage">
                </div>
            </div>
            <br>
        </div>
    </div>
    <div class="row text-center" >
        <div class="col-md-4 offset-md-1 text-center">
            <a  type="submit" class="btn btn-lg btn-default">Back <span class="fa fa-email"></span></a>
        </div> 

        <div class="col-md-4 offset-md-1 text-center">
            <button type="submit" class="btn btn-lg btn-primary">Next <span class="fa fa-email"></span></button>
        </div> 
                   
    </div>
    </form>
</div>

@endsection