@extends('admin')
@section('section')
{{-- {{$trucks}} --}}
<section class="content">
  <div class="card card-success">
    <div class="card-header">
      <h3>All Trucks.</h3>
    </div>
    <div class="card-body">
      <div>
        <a href="/addHorse" type="button" class="btn  btn-success"> <i class="fa fa-plus"></i> Add Truck.</a>
      </div>
      <div style="text-align: clear"></div>
      <br>
      <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
        <div class="row">
          <div class="col-sm-12">
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
              <thead>
                <tr>
                  <th>Truck Id</th>
                  <th>Fleet Number</th>
                  <th>Registration</th>
                  <th>Next Service</th>
                  <th>Courier Milage</th>
                  <th>Rotran Expiry</th>
                  <th>COF Expiry</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($trucks as $truck)
                <tr>
                  <td>{{$truck->id}}</td>
                  <td>{{$truck->fleet_number}}</td>
                  <td>{{$truck->horse_registration}}</td>
                  <td>{{"Next Service"}}</td>
                  <td>{{$truck->start_milage}}</td>
                  <td>
                    @php
                    $dateToFormat = date_create($truck->rotran_expiry_date);
                    $date = date_format($dateToFormat, "D-d-F-Y ");
                    @endphp

                    {{$date}}
                  </td>
                  <td>
                    @php
                    $dateToFormat = date_create($truck->cof_expiry_date);
                    $date = date_format($dateToFormat, "D-d-F-Y ");
                    @endphp

                    {{$date}}
                  </td>
                  <td>

                    <div class="btn-group">
                      <a href="editTruck/{{$truck->id}}" type="button" class="btn btn-sm btn-success"><i class="fas fa-edit"> Edit</i></a>

                      {{-- Modal To Edit Goes Here. --}}

                      &nbsp;&nbsp;
                      <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="{{"#deletetruck".$truck->id}}"><i class="fas fa-trash"> Delete</i></button>

                      {{-- Modal To Delete Goes Here --}}

                      <div class="modal fade" id="{{"deletetruck".$truck->id}}" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Delete Truck : {{$truck->horse_registration}}</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <h5 class="text-center">Are You Sure You Want To Delete Truck With Registration: {{$truck->horse_registration}}</h5>
                            </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <form action="/deleteTruck" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="idOfTruck" value="{{$truck->id}}">
                                <button type="submit" class="btn btn-danger fa fa-trash-o "> Delete</button>
                              </form>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>

                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>Truck Id</th>
                  <th>Fleet Number</th>
                  <th>Registration</th>
                  <th>Next Service</th>
                  <th>Courier Milage</th>
                  <th>Rotran Expiry</th>
                  <th>COF Expiry</th>
                  <th>Action</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-7">

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection