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
                            {!! Form::open(['action' => 'DriverController@index', 'method' => 'GET', 'enctype' => 'multipart/form-data']) !!}
                            @csrf
                            <thead>
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
                                            <button type="button" class="btn btn-sm btn-success"><i class="fas fa-edit"> Edit</i></button>

                                            {{-- Modal To Edit Goes Here. --}}

                                            &nbsp;&nbsp;
                                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target=""><i class="fas fa-trash"> Delete</i></button>

                                            {{-- Modal To Delete Goes Here --}}

                                            <div class="modal fade"  style="display: none;" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <!-- h4  -->
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- hr -->
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <form action="" method="POST">
                                                                {{ csrf_field() }}
                                                                <input type="hidden" name="" value="">
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