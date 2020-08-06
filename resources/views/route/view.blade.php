@extends('layouts.admin')

@section('content')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Sites</h3>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
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
                            @if(count($routes) > 0)
                            @foreach($routes as $route)
                            <tbody>
                                <tr>
                                <td>{{$route->id}}</td>
                                    <td>{{$route->loadingSiteBelongsToSite->name}}</td>
                                    <td>{{$route->offloadingSiteBelongsToSite->name}}</td>
                                    <td>{{$route->distance}}</td>
                                    <td>{{$route->turn_around_time}}</td>
                                    <td>{{$route->possible_trips_per_month}}</td>
                                    <td>{{$route->rands}}</td>
                                    <td>{{$route->contract_quantity_per_month}}</td>
                                    <td>X</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        {{$routes->links()}}
                        @else
                        <p>No Routes found</p>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection()