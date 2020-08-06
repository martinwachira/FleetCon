@extends('admin')
@section('section')
<section class="content">
  <div class="card card-success">
    <div class="card-header">
      <h3>Edit Truck.</h3>
    </div>
    <div class=" container card-body">            
      <br>
      <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
        <div class="row">
          <div class="col-sm-6 offset-sm-3">
                @if (session('update'))
                <div role="alert" class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span class="text-center" id="text">Successfully Updated.</div>
                @endif
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-12">
              @foreach ($trucks as $truck)                                
            <form action="/updateTruck/{{$truck->id}}" method="POST">
                {{ csrf_field() }}
                <h3 class="text-center">Horse Details</h3>
                <br>
            <div class="row">

                <div class="col-md-4 offset-md-1">
                    <div class="row">
                        <div class="col-md-6">                            
                            <strong>Fleet Number</strong>
                        </div>
                        <div class="col-md-6">
                            <input type="number" value="{{$truck->fleet_number}}" required name="fleet_number" class="form-control" placeholder="Enter Fleet Number">                            
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                           <strong>Make</strong> 
                        </div>
                        <div class="col-md-6">
                            <input type="text" value="{{$truck->make}}" required name="make" class="form-control" placeholder="Enter Make">                            
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <strong> Model</strong>
                           
                        </div>
                        <div class="col-md-6">
                            <input type="text" required value="{{$truck->model}}" name="model" class="form-control" id="exampleInputEmail1" placeholder="Enter Model">                            
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <strong> VIN Number</strong>                         
                        </div>
                        <div class="col-md-6">
                            <input type="number" required value="{{$truck->vin_number}}" name="vin_number" class="form-control" placeholder="Enter VIN Number">                                                  
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <strong> Engine Number</strong>                            
                        </div>
                        <div class="col-md-6">
                            <input type="number" required value="{{$truck->engine_number}}" class="form-control" name="engine_number" placeholder="Enter Engine Number">                            
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                           <strong> Horse Registration</strong>
                        </div>
                        <div class="col-md-6">
                            <input type="number" required value="{{$truck->horse_registration}}" class="form-control" name="horse_registration" placeholder="Enter Horse Registration">                                                        
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Start Milage (Kms)</strong>
                            
                        </div>
                        <div class="col-md-6">
                            <input type="number" required value="{{$truck->start_milage}}" class="form-control" name="start_milage" placeholder="Enter Start Milage">                                                  
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-md-4 offset-md-1">
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Service Intervals (Kms)</strong>
                            
                        </div>
                        <div class="col-md-6">
                            <input type="number" required value="{{$truck->service_intervals}}" class="form-control" name="service_intervals" placeholder="Enter Service Intervals">                            
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <strong>COF Expiry Date</strong>
                            
                        </div>
                        <div class="col-md-6">
                            <input type="date" required value="{{$truck->cof_expiry_date}}" class="form-control" name="cof_expiry_date"  placeholder="Enter COF Expiry Date">                                                        
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Rotran Expiry Date</strong>
                            
                        </div>
                        <div class="col-md-6">
                            <input type="date" required value="{{$truck->rotran_expiry_date}}" name="rotran_expiry_date" class="form-control" placeholder="Enter Rotran Expiry Date">                                                        
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Truck Owner</strong>                            
                        </div>
                        <div class="col-md-6">
                            <input type="text" required value="{{$truck->truck_owner}}" name="truck_owner" class="form-control" placeholder="Enter Truck Owner">                                                        
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Bulk Product</strong>
                            
                        </div>
                        <div class="col-md-6">
                            <input type="text" required value="{{$truck->bulk_product}}" name="bulk_product" class="form-control"  placeholder="Enter Bulk Product">                                                
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Load Capacity (Tons)</strong>
                            
                        </div>
                        <div class="col-md-6">                        
                            <input type="number" required value="{{$truck->load_capacity}}" name="load_capacity" class="form-control" placeholder="Enter Load Capacity (Tons)">                            
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Working Days Per Month</strong>
                            
                        </div>
                        <div class="col-md-6">
                            <input type="number" required class="form-control" value="{{$truck->working_days_per_month}}" name="working_days_per_month" placeholder="Enter Working Days Per Month">                                                        
                        </div>
                    </div>
                    <br>
                </div>                              
            </div>
            <div class="row" >
                <div class="col-md-10 col-offset-1" style="text-align: right" >
                    <button type="submit" class=" btn  btn-md btn-success"><span class="fa fa-save"></span> Update Horse Details. </button>
                </div> 
            </div> 
            <h3 class="text-center">Trailer Details</h3>
            <br>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="row">
                        <div class="col-md-6">
                            
                            <strong>Leader Registration</strong>
                        </div>
                        <div class="col-md-6">
                                <input type="number" required value="{{$truck->leader_registration}}" name="leader_registration" class="form-control" placeholder="Enter Leader Registration">                                                            
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <strong>COF Expiry Date</strong>
                            
                        </div>
                        <div class="col-md-6">
                                <input type="date" value="{{$truck->trailer_cof_expiry_date}}" required name="trailer_cof_expiry_date" class="form-control" placeholder="Enter COF Expiry Date">                                                            
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Rotran Expiry Date</strong>
                            
                        </div>
                        <div class="col-md-6">
                                <input type="date" required value="{{$truck->trailer_rotran_expiry_date}}" name="trailer_rotran_expiry_date" class="form-control" id="exampleInputEmail1" placeholder="Enter Rotran Expiry Date">                                                            
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Follower Registration</strong>
                            
                        </div>
                        <div class="col-md-6">
                                <input type="number" required name="follower_registration" value="{{$truck->follower_registration}}" class="form-control" placeholder="Enter Follower Registration">                                                            
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <strong>COF Expiry Date</strong>
                            
                        </div>
                        <div class="col-md-6">
                                <input type="date" value="{{$truck->follower_cof_expiry_date}}" required class="form-control" name="follower_cof_expiry_date" placeholder="Enter COF Expiry Date">                                                            
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Rotran Expiry Date</strong>
                            
                        </div>
                        <div class="col-md-6">
                                <input type="date" value="{{$truck->follower_rotran_expiry_date}}" required class="form-control" name="follower_rotran_expiry_date" placeholder="Enter Rotran Expiry Date">                                                            
                        </div>
                    </div>
                    <br>            
                    <br>
                </div>
            </div>
            <div class="row" >
                <div class="col-md-10 col-offset-1" style="text-align: right" >
                    <button type="submit" class=" btn  btn-md btn-success"><span class="fa fa-save"></span> Update Trailer Details. </button>
                </div> 
            </div> 
            <h3 class="text-center">Financial Details</h3>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Horse Instalment (Rands)</strong>
                            
                        </div>
                        <div class="col-md-6">
                                <input type="number" required value="{{$truck->horse_installment}}" name="horse_installment" class="form-control" placeholder="Horse Instalment (Rands)">                                                            
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Trailer Instalment (Rands)</strong>
                            
                        </div>
                        <div class="col-md-6">
                                <input type="number" value="{{$truck->trailer_installment}}"  required name="trailer_installment" class="form-control" placeholder="Trailer Instalment (Rands)">                                                            
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Horse Insurance (Rands)</strong>
                            
                        </div>
                        <div class="col-md-6">
                                <input type="number" value="{{$truck->horse_insurance}}" required name="horse_insurance" class="form-control" id="exampleInputEmail1" placeholder="Horse Insurance (Rands)">                                                            
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Trailer Insurance (Rands)</strong>
                            
                        </div>
                        <div class="col-md-6">
                                <input type="number" required value="{{$truck->trailer_insurance}}" name="trailer_insurance" class="form-control" placeholder="Trailer Insurance (Rands)">                                                            
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Tracker Cost (Rands)</strong>
                            
                        </div>
                        <div class="col-md-6">
                                <input type="number" required class="form-control" value="{{$truck->tracker_cost}}" name="tracker_cost" placeholder="Tracker Cost (Rands)">                                                            
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <strong>FleetCon Premiums (Rands)</strong>
                            
                        </div>
                        <div class="col-md-6">
                                <input type="number" required class="form-control" value="{{$truck->fleet_con_premiums}}" name="fleet_con_premiums" placeholder="FleetCon Premiums (Rands)">                                                            
                        </div>
                    </div>            
                    <br>  
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Mobile Airtime And Data (Rands)</strong>
                            
                        </div>
                        <div class="col-md-6">
                                <input type="number" required class="form-control" value="{{$truck->mobile_airtime_and_data_cost}}" name="mobile_airtime_and_data_cost" placeholder="Mobile Airtime And Data (Rands)">                                                            
                        </div>
                    </div>          
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            
                            <strong>Maintenence Rate (Cost Per Km)</strong>
                        </div>
                        <div class="col-md-6">
                                <input type="number" required class="form-control" value="{{$truck->maintenance_rate}}" name="maintenance_rate" placeholder="Maintenence Rate (Cost Per Km)">                                                            
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row" >
                <div class="col-md-10 col-offset-1" style="text-align: right" >
                    <button type="submit" class=" btn  btn-md btn-success"><span class="fa fa-save"></span> Update Financial Details. </button>
                </div> 
            </div>
            <br>
        </form>
        @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection