@extends('admin')
@section('section')
<section class="content">
    <div class="card card-success">
        <div class="card-header">
            <h3>All Routes</h3>
        </div>
        <div class="card-body">
            <div>
                <a href="/add-route" type="button" class="btn  btn-success"> <i class="fa fa-plus"></i> Add route</a>
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
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($routes as $route)
                                <tr>

                                <td>{{$route->id}}</td>
                                    <td>{{$route->loadingSiteBelongsToSite->name}}</td>
                                    <td>{{$route->offloadingSiteBelongsToSite->name}}</td>

                                    <td>{{$route->id}}</td>
                                    <td>{{$route->loading_site}}</td>
                                    <td>{{$route->off_loading_site}}</td>

                                    <td>{{$route->distance}}</td>
                                    <td>{{$route->turn_around_time}}</td>
                                    <td>{{$route->possible_trips_per_month}}</td>
                                    <td>{{$route->rands}}</td>
                                    <td>{{$route->contract_quantity_per_month}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="{{"#editroute".$route->id}}"><i class="fas fa-edit"> Edit</i></button>

                                            {{-- Modal To Edit Goes Here. --}}

                                            {!! Form::open(['action' => ['RouteController@update', $route->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
                                            <div class="modal fade" id="{{"editroute".$route->id}}" style="display: none;" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <input type="hidden" name="idRoute" value="{{$route->id}}">
                                                            <h4 class="modal-title">Update route: {{$route->id}}</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <div class="form-group row">
                                                                <label for="inputLoadBonus" class="col-sm-3 col-form-label">Loading</label>
                                                                <div class="col-sm-8">
                                                                    {{Form::select('loading_site', [$route->loading_site], null, ['class' => 'form-control'])}}
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputLoadBonus" class="col-sm-3 col-form-label">Off Loading</label>
                                                                <div class="col-sm-8">
                                                                    {{Form::select('off_loading_site', [$route->off_loading_site], null, ['class' => 'form-control'])}}
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputPhone" class="col-sm-3 col-form-label">GPS Co-ordinates</label>
                                                                <div class="col-sm-8">
                                                                    {{Form::text('distance', $route['distance'], ['class' => 'form-control'])}}
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputSalary" class="col-sm-3 col-form-label">Product</label>
                                                                <div class="col-sm-8">
                                                                    {{Form::text('turn_around_time', $route['turn_around_time'], ['class' => 'form-control'])}}
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputSalary" class="col-sm-3 col-form-label">Product</label>
                                                                <div class="col-sm-8">
                                                                    {{Form::text('possible_trips_per_month', $route['possible_trips_per_month'], ['class' => 'form-control'])}}
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputSalary" class="col-sm-3 col-form-label">Product</label>
                                                                <div class="col-sm-8">
                                                                    {{Form::text('rands', $route['rands'], ['class' => 'form-control'])}}
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputSalary" class="col-sm-3 col-form-label">Product</label>
                                                                <div class="col-sm-8">
                                                                    {{Form::text('contract_quantity_per_month', $route['contract_quantity_per_month'], ['class' => 'form-control'])}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            {{Form::hidden('_method','PUT')}}
                                                            {{ csrf_field() }}
                                                            {{Form::submit('Update', ['class' => 'btn btn-success '])}}
                                                            {!! Form::close() !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {!! Form::close() !!}

                                            &nbsp;&nbsp;
                                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="{{"#deleteroute".$route->id}}"><i class="fas fa-trash"> Delete</i></button>

                                            {{-- Modal To Delete Goes Here --}}

                                            <div class="modal fade" id="{{"deleteroute".$route->id}}" style="display: none;" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Delete route : {{$route->id}}</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5 class="text-center">Are You Sure You Want To Delete route {{$route->id}} ?</h5>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <form action="/deleteRoute" method="POST">
                                                                {{ csrf_field() }}
                                                                <input type="hidden" name="idRoute" value="{{$route->id}}">
                                                                <button type="submit" class="btn btn-danger fa fa-trash-o "> Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
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