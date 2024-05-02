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
            <h5>Dashboard > Segments</h5>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <a href="{{ url('/home/phonebook/create') }}">
            <button type="button" class="btn btn-sm btn-block btn-outline-danger" ><i class="fa fa-plus" aria-hidden="true">&nbsp;Add new segment</i></button>
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
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>product_description</th>
                    <th>product_price</th>
                    <th>weight</th>
                    <th>Avalability</th>
                    <th>Purchased Details</th>
                  
                  </tr>
                  </thead>
                  <tbody>
               
                  @php
                            $i = 0;
                        @endphp

                        @foreach ($products as $t)
                            @php
                                $i++;
                            @endphp
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$t['product_name']}}</td>
                                <td>{{$t['product_description']}}</td>
                                <td>{{$t['product_price']}}</td>
                                <td>{{$t['weight']}}</td>
                                <td>{{$t['status']}}</td>
                                <td class="text-center"> 
                                  <a data-toggle="tooltip" data-placement="top" title="" href="{{ url('/adminpanel/products/view/details', ['id' => $t['product_id']]) }}" class="btn btn-sm btn-icon btn-rounded btn-success" data-original-title="View"> <i class="fa fa-eye"></i> </a> 
                                
                                
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