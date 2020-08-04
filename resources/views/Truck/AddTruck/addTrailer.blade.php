@extends('admin')
@section('section')

<div class="container">
    <h3>Add Trailers.</h3>
    <form action="/postTrailerData" method="POST">
        {{ csrf_field() }}
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="row">
                <div class="col-md-6">
                    Leader Registration
                </div>
                <div class="col-md-6">
                    @if (Session::get('TrailerDetailsSession'))
                    <input type="number" required value="{{Session::get('TrailerDetailsSession')['leader_registration']}}" name="leader_registration" class="form-control" placeholder="Enter Leader Registration">
                        @else
                        <input type="number" required name="leader_registration" class="form-control" placeholder="Enter Leader Registration">
                        @endif
                    
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    COF Expiry Date
                </div>
                <div class="col-md-6">
                    @if (Session::get('TrailerDetailsSession'))
                    <input type="date" value="{{Session::get('TrailerDetailsSession')['trailer_cof_expiry_date']}}"  required name="trailer_cof_expiry_date" class="form-control" placeholder="Enter COF Expiry Date">
                        @else
                        <input type="date"  required name="trailer_cof_expiry_date" class="form-control" placeholder="Enter COF Expiry Date">
                        @endif
                    
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    Rotran Expiry Date
                </div>
                <div class="col-md-6">
                    @if (Session::get('TrailerDetailsSession'))
                    <input type="date" value="{{Session::get('TrailerDetailsSession')['trailer_rotran_expiry_date']}}" required name="trailer_rotran_expiry_date" class="form-control" id="exampleInputEmail1" placeholder="Enter Rotran Expiry Date">
                        @else
                        <input type="date" required name="trailer_rotran_expiry_date" class="form-control" id="exampleInputEmail1" placeholder="Enter Rotran Expiry Date">
                        @endif
                    
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    Follower Registration
                </div>
                <div class="col-md-6">
                    @if (Session::get('TrailerDetailsSession'))
                    <input type="number" required value="{{Session::get('TrailerDetailsSession')['follower_registration']}}" name="follower_registration" class="form-control" placeholder="Enter Follower Registration">
                        @else
                        <input type="number" required name="follower_registration" class="form-control" placeholder="Enter Follower Registration">
                        @endif
                    
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    COF Expiry Date
                </div>
                <div class="col-md-6">
                    @if (Session::get('TrailerDetailsSession'))
                    <input type="date" required value="{{Session::get('TrailerDetailsSession')['follower_cof_expiry_date']}}" class="form-control" name="follower_cof_expiry_date" placeholder="Enter COF Expiry Date">
                        @else
                        <input type="date" required class="form-control" name="follower_cof_expiry_date" placeholder="Enter COF Expiry Date">
                        @endif
                    
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    Rotran Expiry Date
                </div>
                <div class="col-md-6">
                    @if (Session::get('TrailerDetailsSession'))
                    <input type="date" required class="form-control" value="{{Session::get('TrailerDetailsSession')['follower_rotran_expiry_date']}}" name="follower_rotran_expiry_date" placeholder="Enter Rotran Expiry Date">
                        @else
                        <input type="date" required class="form-control" name="follower_rotran_expiry_date" placeholder="Enter Rotran Expiry Date">
                        @endif
                    
                </div>
            </div>
            <br>            
            <br>
        </div>
    </div>
    <div class="row text-center" >
        <div class="col-md-6 offset-md-3">
            <div class="row">
                <div class="col-md-4 offset-md-1 text-center">
                    <a  type="button" href="/addHorse" class="btn btn-block btn-lg btn-primary">Back <span class="fa fa-email"></span></a>
                </div> 
        
                <div class="col-md-4 offset-md-1 text-center">
                    <button type="submit" class="btn btn-block btn-lg btn-success">Next <span class="fa fa-email"></span></button>
                </div> 
            </div>
        </div>                           
    </div>
    </form>
</div>

@endsection