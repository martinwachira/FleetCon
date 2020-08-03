@extends('admin')
@section('section')
    
    <div class="container">
        <h3>Add Horse.</h3>
        <form action="/postHorseData" method="POST">
            {{ csrf_field() }}
        <div class="row">
            <div class="col-md-4 offset-md-1">
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
            <div class="col-md-4 offset-md-1">
                <div class="row">
                    <div class="col-md-6">
                        Service Intervals (Kms)
                    </div>
                    <div class="col-md-6">
                        <input type="number" required class="form-control" name="service_intervals" placeholder="Enter Service Intervals">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        COF Expiry Date
                    </div>
                    <div class="col-md-6">
                        <input type="date" required class="form-control" name="cof_expiry_date"  placeholder="Enter COF Expiry Date">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        Rotran Expiry Date
                    </div>
                    <div class="col-md-6">
                        <input type="date" required name="rotran_expiry_date" class="form-control" placeholder="Enter Rotran Expiry Date">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        Truck Owner
                    </div>
                    <div class="col-md-6">
                        <input type="text" required name="truck_owner" class="form-control" placeholder="Enter Truck Owner">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        Bulk Product
                    </div>
                    <div class="col-md-6">
                        <input type="text" required name="bulk_product" class="form-control"  placeholder="Enter Bulk Product">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        Load Capacity (Tons)
                    </div>
                    <div class="col-md-6">
                        <input type="number" required name="load_capacity" class="form-control" placeholder="Enter Load Capacity (Tons)">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        Working Days Per Month
                    </div>
                    <div class="col-md-6">
                        <input type="number" required class="form-control" name="working_days_per_month" placeholder="Enter Working Days Per Month">
                    </div>
                </div>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <button type="submit" class="btn btn-lg btn-primary">Next <span class="fa fa-email"></span></button>
            </div>            
        </div>
    </form>
        
    </div>

@endsection