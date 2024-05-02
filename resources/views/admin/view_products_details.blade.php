@extends('admin.layout.datatable')

@section('content')

<div class="wrapper">


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 mt-2">
          <div class="col-sm-6">
            <h5>Dashboard > Products > Purchased Details</h5>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <a href="{{ url('/adminpanel/products') }}">
            <button type="button" class="pl-5 pr-5 btn btn-sm btn-block btn-danger text-light" ><i class="fa fa-arrow-left" aria-hidden="true">&nbsp;Go Back</i></button>
            </a></ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
        
            <!-- /.card -->

            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <p class="bg-warning p-2"> Total <strong>{{$sale_count}} </strong>of this item has been sold! </p>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>SL</th>
                    <th>User Name</th>
                    <th>Purchased Date</th>
                  
                  </tr>
                  </thead>
                  <tbody>
               
                  @php
                            $i = 0;
                        @endphp

                        @foreach ($details as $t)
                            @php
                                $i++;
                            @endphp
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$t['name']}}</td>
                                <td>{{$t['created_at']}}</td>
                                
                           </tr>
                        @endforeach
                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


@endsection