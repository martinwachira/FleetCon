@extends('admin')
@section('section')
<section class="content">
    <div class="card card-success">
        <div class="card-header">
            <h3>All Drivers.</h3>
        </div>
        <div class="card-body">
            <div>
                <a href="/add-driver" type="button" class="btn  btn-success"> <i class="fa fa-user"></i> Add Driver</a>
            </div>
            <div style="text-align: clear"></div>
            <br>
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                            <thead>
                                {!! Form::open(['action' => 'DriverController@index', 'method' => 'GET', 'enctype' => 'multipart/form-data']) !!}
                                @csrf
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>ID Number</th>
                                    <th>Phone Number</th>
                                    <th>Salary</th>
                                    <th>Load Bonus</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($drivers as $driver)
                                <tr>
                                    <td>{{$driver->id}}</td>
                                    <td>{{$driver->name}}</td>
                                    <td>{{$driver->id_number}}</td>
                                    <td>{{$driver->phone_number}}</td>
                                    <td>{{$driver->driver_salary}}</td>
                                    <td>{{$driver->load_bonus}}</td>
                                    <td>
                                        <div class="btn-group">
                                            
                                            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="{{"#editdriver".$driver->id}}"><i class="fas fa-edit"> Edit</i></button>
                                            
                                            {{-- Modal To Edit Goes Here. --}}
                                            
                                            {!! Form::open(['action' => ['DriverController@update', $driver->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
                                            <div class="modal fade" id="{{"editdriver".$driver->id}}" style="display: none;" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <input type="hidden" name="idDriver" value="{{$driver->id}}">
                                                            <h4 class="modal-title">Update driver: {{$driver->name}}</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group row">
                                                                <label for="inputName" class="col-sm-3 col-form-label">Name</label>
                                                                <div class="col-sm-8">
                                                                    {{Form::text('name', $driver['name'], ['class' => 'form-control'])}}
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputId" class="col-sm-3 col-form-label">ID Number</label>
                                                                <div class="col-sm-8">
                                                                    {{Form::text('id_number', $driver['id_number'], ['class' => 'form-control'])}}
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputPhone" class="col-sm-3 col-form-label">Phone</label>
                                                                <div class="col-sm-8">
                                                                    {{Form::text('phone_number', $driver['phone_number'], ['class' => 'form-control'])}}
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputSalary" class="col-sm-3 col-form-label">Salary</label>
                                                                <div class="col-sm-8">
                                                                    {{Form::text('driver_salary', $driver['driver_salary'], ['class' => 'form-control'])}}
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputLoadBonus" class="col-sm-3 col-form-label">Load Bonus (%)</label>
                                                                <div class="col-sm-8">
                                                                    {{Form::text('load_bonus', $driver->load_bonus, ['class' => 'form-control'])}}
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
                                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="{{"#deletedriver".$driver->id}}"><i class="fas fa-trash"> Delete</i></button>

                                            {{-- Modal To Delete Goes Here --}}

                                            <div class="modal fade" id="{{"deletedriver".$driver->id}}" style="display: none;" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Delete driver : {{$driver->name}}</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5 class="text-center">Are You Sure You Want To Delete driver {{$driver->name}} ?</h5>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <form action="/deleteDriver" method="POST">
                                                                {{ csrf_field() }}
                                                                <input type="hidden" name="idDriver" value="{{$driver->id}}">
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