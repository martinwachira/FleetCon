@extends('admin')
@section('section')

<section class="content">
    <h3>Add Finacial Data.</h3>
    <form action="/postFinancialData" method="POST">
        {{ csrf_field() }}
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="row">
                <div class="col-md-6">
                    Horse Instalment (Rands)
                </div>
                <div class="col-md-6">
                    @if (Session::get('FinancialDetailsSession'))
                    <input type="number" required value="{{Session::get('FinancialDetailsSession')['horse_installment']}}" name="horse_installment" class="form-control" placeholder="Horse Instalment (Rands)">
                        @else
                        <input type="number" required name="horse_installment" class="form-control" placeholder="Horse Instalment (Rands)">
                        @endif
                    
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    Trailer Instalment (Rands)
                </div>
                <div class="col-md-6">
                    @if (Session::get('FinancialDetailsSession'))
                    <input type="number" value="{{Session::get('FinancialDetailsSession')['trailer_installment']}}"  required name="trailer_installment" class="form-control" placeholder="Trailer Instalment (Rands)">
                        @else
                        <input type="number"  required name="trailer_installment" class="form-control" placeholder="Trailer Instalment (Rands)">
                        @endif
                    
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    Horse Insurance (Rands)
                </div>
                <div class="col-md-6">
                    @if (Session::get('FinancialDetailsSession'))
                    <input type="number" value="{{Session::get('FinancialDetailsSession')['horse_insurance']}}" required name="horse_insurance" class="form-control" id="exampleInputEmail1" placeholder="Horse Insurance (Rands)">
                        @else
                        <input type="number" required name="horse_insurance" class="form-control" id="exampleInputEmail1" placeholder="Horse Insurance (Rands)">
                        @endif
                    
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    Trailer Insurance (Rands)
                </div>
                <div class="col-md-6">
                    @if (Session::get('FinancialDetailsSession'))
                    <input type="number" required value="{{Session::get('FinancialDetailsSession')['trailer_insurance']}}" name="trailer_insurance" class="form-control" placeholder="Trailer Insurance (Rands)">
                        @else
                        <input type="number" required name="trailer_insurance" class="form-control" placeholder="Trailer Insurance (Rands)">
                        @endif
                    
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    Tracker Cost (Rands)
                </div>
                <div class="col-md-6">
                    @if (Session::get('FinancialDetailsSession'))
                    <input type="number" required value="{{Session::get('FinancialDetailsSession')['tracker_cost']}}" class="form-control" name="tracker_cost" placeholder="Tracker Cost (Rands)">
                        @else
                        <input type="number" required class="form-control" name="tracker_cost" placeholder="Tracker Cost (Rands)">
                        @endif
                    
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    FleetCon Premiums (Rands)
                </div>
                <div class="col-md-6">
                    @if (Session::get('FinancialDetailsSession'))
                    <input type="number" required class="form-control" value="{{Session::get('FinancialDetailsSession')['fleet_con_premiums']}}" name="fleet_con_premiums" placeholder="FleetCon Premiums (Rands)">
                        @else
                        <input type="number" required class="form-control" name="fleet_con_premiums" placeholder="FleetCon Premiums (Rands)">
                        @endif
                    
                </div>
            </div>            
            <br>  
            <div class="row">
                <div class="col-md-6">
                    Mobile Airtime And Data (Rands)
                </div>
                <div class="col-md-6">
                    @if (Session::get('FinancialDetailsSession'))
                    <input type="number" required class="form-control" value="{{Session::get('FinancialDetailsSession')['mobile_airtime_and_data_cost']}}" name="mobile_airtime_and_data_cost" placeholder="Mobile Airtime And Data (Rands)">
                        @else
                        <input type="number" required class="form-control" name="mobile_airtime_and_data_cost" placeholder="Mobile Airtime And Data (Rands)">
                        @endif
                    
                </div>
            </div>          
            <br>
            <div class="row">
                <div class="col-md-6">
                    Maintenence Rate (Cost Per Km)
                </div>
                <div class="col-md-6">
                    @if (Session::get('FinancialDetailsSession'))
                    <input type="number" required class="form-control" value="{{Session::get('FinancialDetailsSession')['maintenance_rate']}}" name="maintenance_rate" placeholder="Maintenence Rate (Cost Per Km)">
                        @else
                        <input type="number" required class="form-control" name="maintenance_rate" placeholder="Maintenence Rate (Cost Per Km)">
                        @endif
                    
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row text-center" >
        <div class="col-md-6 offset-md-3">
            <div class="row">
                <div class="col-md-4 offset-md-1 text-center">
                    <a  type="button" href="/addTrailer" class="btn btn-block btn-lg btn-primary">Back <span class="fa fa-email"></span></a>
                </div> 
        
                <div class="col-md-4 offset-md-1 text-center">
                    <button type="submit" class="btn btn-block btn-lg btn-success">Save. <span class="fa fa-email"></span></button>
                </div> 
            </div>
        </div>                           
    </div>
    </form>
</section>

@endsection