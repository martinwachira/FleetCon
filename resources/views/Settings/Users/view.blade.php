@extends('admin')
@section('section')
<!-- {{-- $users --}} -->
<section class="content">
    <div class="card card-success">
        <div class="card-header">
            <h3>All Users.</h3>
        </div>
        <div class="card-body">
            <div>
                <a href="/addUser" type="button" class="btn  btn-success"> <i class="fa fa-user"></i> Add User</a>
            </div>
            <div style="text-align: clear"></div>
            <br>
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <div class="btn-group">
                                            
                                            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="{{"#edituser".$user->id}}"><i class="fas fa-edit"> Edit</i></button>
                                            
                                            {{-- Modal To Edit Goes Here. --}}
                                            
                                            <div class="modal fade" id="{{"edituser".$user->id}}" style="display: none;" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <input type="hidden" name="idUser" value="{{$user->id}}">
                                                            <h4 class="modal-title">Update user: {{$user->name}}</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
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
                                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="{{"#deleteuser".$user->id}}"><i class="fas fa-trash"> Delete</i></button>

                                            {{-- Modal To Delete Goes Here --}}

                                            <div class="modal fade" id="{{"deleteuser".$user->id}}" style="display: none;" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Delete user : {{$user->name}}</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5 class="text-center">Are You Sure You Want To Delete user {{$user->name}} ?</h5>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <!-- <form action="/deleteUser" method="POST"> -->
                                                                {{ csrf_field() }}
                                                                <input type="hidden" name="idUser" value="{{$user->id}}">
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