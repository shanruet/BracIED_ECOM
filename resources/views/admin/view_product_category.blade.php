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
            <h5>Dashboard > Category</h5>
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
                <table id="exampleTemplate" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th> ID</th>
                    <th>Category Name</th>
                    <th>Creation Date</th>
                  
                  </tr>
                  </thead>
                  <tbody>
               
                 
                        @php
                            $i = 0;
                        @endphp

                        @foreach ($category as $t)
                            @php
                                $i++;
                            @endphp
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$t['category_name']}}</td>
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