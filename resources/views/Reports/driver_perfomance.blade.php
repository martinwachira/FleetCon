@extends('admin')
@section('section')
<section class="content">
  <div class="card card-success">
    <div class="card-header">
      <h3>Driver Perfomance.</h3>
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
                  <th>Driver Id</th>
                  <th>Driver Name</th>
                  <th> Hours In Vihicle</th>
                  <th>Tonnage</th>
                  <th> Load Bonus</th>                                  
                </tr>
              </thead>
              <tbody>
               <tr>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>                   
               </tr>
              </tbody>
              <tfoot>
                <tr>
                    <th>Driver Id</th>
                    <th>Driver Name</th>
                    <th> Hours In Vihicle</th>
                    <th>Tonnage</th>
                    <th> Load Bonus</th>                                  
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