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
                        @if (Session::get('horseDetailsSession'))
                        <input type="number" value="{{Session::get('horseDetailsSession')['fleet_number']}}"  required name="fleet_number" class="form-control" placeholder="Enter Fleet Number">
                        @else
                        <input type="number" required name="fleet_number" class="form-control" placeholder="Enter Fleet Number">
                        @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        Make
                    </div>
                    <div class="col-md-6">
                        @if (Session::get('horseDetailsSession'))
                        <input type="text"  required name="make" value="{{Session::get('horseDetailsSession')['make']}}" class="form-control" placeholder="Enter Make">
                        @else
                        <input type="text"  required name="make" class="form-control" placeholder="Enter Make">
                        @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        Model
                    </div>
                    <div class="col-md-6">
                        
                        @if (Session::get('horseDetailsSession'))
                        <input type="text" required name="model" value="{{Session::get('horseDetailsSession')['model']}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Model">
                        @else
                        <input type="text" required name="model" class="form-control" id="exampleInputEmail1" placeholder="Enter Model">
                        @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        VIN Number
                    </div>
                    <div class="col-md-6">
                        @if (Session::get('horseDetailsSession'))
                        <input type="number" required value="{{Session::get('horseDetailsSession')['vin_number']}}" name="vin_number" class="form-control" placeholder="Enter VIN Number">
                        @else
                        <input type="number" required name="vin_number" class="form-control" placeholder="Enter VIN Number">
                        @endif                        
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        Engine Number
                    </div>
                    <div class="col-md-6">
                        @if (Session::get('horseDetailsSession'))
                        <input type="number" value="{{Session::get('horseDetailsSession')['engine_number']}}" required class="form-control" name="engine_number" placeholder="Enter Engine Number">
                        @else
                        <input type="number" required class="form-control" name="engine_number" placeholder="Enter Engine Number">
                        @endif
                        
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        Horse Registration
                    </div>
                    <div class="col-md-6">
                        @if (Session::get('horseDetailsSession'))
                        <input type="number" value="{{Session::get('horseDetailsSession')['horse_registration']}}" required class="form-control" name="horse_registration" placeholder="Enter Horse Registration">
                        @else
                        <input type="number" required class="form-control" name="horse_registration" placeholder="Enter Horse Registration">
                        @endif
                        
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        Start Milage (Kms)
                    </div>
                    <div class="col-md-6">
                        @if (Session::get('horseDetailsSession'))
                        <input type="number" value="{{Session::get('horseDetailsSession')['start_milage']}}" required class="form-control" name="start_milage" placeholder="Enter Start Milage">
                        @else
                        <input type="number" required class="form-control" name="start_milage" placeholder="Enter Start Milage">
                        @endif                        
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
                        @if (Session::get('horseDetailsSession'))
                        <input type="number" value="{{Session::get('horseDetailsSession')['service_intervals']}}" required class="form-control" name="service_intervals" placeholder="Enter Service Intervals">
                        @else
                        <input type="number" required class="form-control" name="service_intervals" placeholder="Enter Service Intervals">
                        @endif
                        
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        COF Expiry Date
                    </div>
                    <div class="col-md-6">
                        @if (Session::get('horseDetailsSession'))
                        <input type="date" value="{{Session::get('horseDetailsSession')['cof_expiry_date']}}" required class="form-control" name="cof_expiry_date"  placeholder="Enter COF Expiry Date">
                        @else
                        <input type="date" required class="form-control" name="cof_expiry_date"  placeholder="Enter COF Expiry Date">
                        @endif
                        
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        Rotran Expiry Date
                    </div>
                    <div class="col-md-6">
                        @if (Session::get('horseDetailsSession'))
                        <input type="date" value="{{Session::get('horseDetailsSession')['rotran_expiry_date']}}" required name="rotran_expiry_date" class="form-control" placeholder="Enter Rotran Expiry Date">
                        @else
                        <input type="date" required name="rotran_expiry_date" class="form-control" placeholder="Enter Rotran Expiry Date">
                        @endif
                        
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        Truck Owner
                    </div>
                    <div class="col-md-6">
                        @if (Session::get('horseDetailsSession'))
                        <input type="text" value="{{Session::get('horseDetailsSession')['truck_owner']}}" required name="truck_owner" class="form-control" placeholder="Enter Truck Owner">
                        @else
                        <input type="text" required name="truck_owner" class="form-control" placeholder="Enter Truck Owner">
                        @endif
                        
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        Bulk Product
                    </div>
                    <div class="col-md-6">
                        @if (Session::get('horseDetailsSession'))
                        <input type="text" value="{{Session::get('horseDetailsSession')['bulk_product']}}" required name="bulk_product" class="form-control"  placeholder="Enter Bulk Product">
                        @else
                        <input type="text" required name="bulk_product" class="form-control"  placeholder="Enter Bulk Product">
                        @endif                        
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        Load Capacity (Tons)
                    </div>
                    <div class="col-md-6">                        
                        @if (Session::get('horseDetailsSession'))
                        <input type="number" value="{{Session::get('horseDetailsSession')['load_capacity']}}" required name="load_capacity" class="form-control" placeholder="Enter Load Capacity (Tons)">
                        @else
                        <input type="number" required name="load_capacity" class="form-control" placeholder="Enter Load Capacity (Tons)">
                        @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        Working Days Per Month
                    </div>
                    <div class="col-md-6">
                        @if (Session::get('horseDetailsSession'))
                        <input type="number" required value="{{Session::get('horseDetailsSession')['working_days_per_month']}}" class="form-control" name="working_days_per_month" placeholder="Enter Working Days Per Month">
                        @else
                        <input type="number" required class="form-control" name="working_days_per_month" placeholder="Enter Working Days Per Month">
                        @endif
                        
                    </div>
                </div>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="row">
                    <div class="col-md-6 offset-md-3 text-center">
                        <button type="submit" class="btn btn-block btn-lg btn-primary"> <strong>Next</strong>  <span class="fa fa-email"></span></button>
                    </div>  
                </div>
            </div>
                      
        </div>
    </form>
        
    </div>

@endsection