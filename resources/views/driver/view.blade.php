@extends('layouts.admin')

@section('content')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Drivers</h3>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
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
                                </tr>
                            </thead>
                            @if(count($drivers) > 0)
                            @foreach($drivers as $driver)
                            <tbody>
                                <tr>
                                <td>{{$driver->id}}</td>
                                    <td>{{$driver->name}}</td>
                                    <td>{{$driver->id_number}}</td>
                                    <td>{{$driver->phone_number}}</td>
                                    <td>{{$driver->driver_salary}}</td>
                                    <td>{{$driver->load_bonus}}</td>
                                    <td>X</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        {{$drivers->links()}}
                        @else
                        <p>No driver Requests found</p>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection()