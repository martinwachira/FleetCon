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
                            {!! Form::open(['action' => 'SiteController@index', 'method' => 'GET', 'enctype' => 'multipart/form-data']) !!}
                            @csrf
                            <thead>
                                <tr>
                                <th>ID</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Co-ordinates</th>
                                    <th>Product</th>
                                    <th>Type of Site</th>
                                </tr>
                            </thead>
                            @if(count($sites) > 0)
                            @foreach($sites as $site)
                            <tbody>
                                <tr>
                                <td>{{$site->id}}</td>
                                    <td>{{$site->name}}</td>
                                    <td>{{$site->address}}</td>
                                    <td>{{$site->gps_coordinates}}</td>
                                    <td>{{$site->product}}</td>
                                    <td>{{$site->type_of_site}}</td>
                                    <td>X</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        {{$sites->links()}}
                        @else
                        <p>No Sites found</p>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection()