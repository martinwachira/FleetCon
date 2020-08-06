@extends('admin')
@section('section')
<section class="content">
    <div class="card card-success">
        <div class="card-header">
            <h3>All Sites</h3>
        </div>
        <div class="card-body">
            <div>
                <a href="/add-site" type="button" class="btn  btn-success"> <i class="fa fa-plus"></i> Add Site</a>
            </div>
            <div style="text-align: clear"></div>
            <br>
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                            {!! Form::open(['action' => 'RouteController@index', 'method' => 'GET', 'enctype' => 'multipart/form-data']) !!}
                            @csrf
                            <thead>
                                <tr>
                                <th>ID</th>
                                    <th>Loading Site</th>
                                    <th>Off-Loading Site</th>
                                    <th>Distance</th>
                                    <th>TAT</th>
                                    <th>Possible Trips</th>
                                    <th>Rands</th>
                                    <th>Contract Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($routes as $route)
                                <tr>
                                    <td>{{$route->id}}</td>
                                    <td>{{$route->loading_site}}</td>
                                    <td>{{$route->off_loading_site}}</td>
                                    <td>{{$route->distance}}</td>
                                    <td>{{$route->turn_around_time}}</td>
                                    <td>{{$route->possible_trips_per_month}}</td>
                                    <td>{{$route->rands}}</td>
                                    <td>{{$route->contract_quantity_per_month}}</td>
                                    <td>
                                        x
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection