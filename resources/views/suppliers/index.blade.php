@extends('admin_layout.dir_layout.main')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                {{--                <div class="col-md-6">--}}
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Suppliers</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dt-buttons btn-group flex-wrap">
                                        <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                                        <thead>
                                        <tr>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">ID</th>
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column descending" aria-sort="ascending">Supplier's Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Contact Number</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Email</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Address</th></tr>
                                        </thead>
                                        <tbody>
                                        <tr class="odd">
                                        @foreach( $data as $i=>$cat)
                                            <tr class="odd">
                                                <td class="dtr-control sorting_1" >{{$cat->id}}</td>
                                                <td>{{$cat->supplier_name}}</td>
                                                <td>{{$cat->contact_number}}</td>
                                                <td>{{$cat->email}}</td>
                                                <td>{{$cat->address}}</td>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>



                        </div>
                        <!-- /.card -->

                        <!-- general form elements -->

                        <!-- Input addon -->
                        <!-- /.card -->
                        <!-- Horizontal Form -->
                        <!-- /.card -->

                        {{--                </div>--}}
                        <!--/.col (left) -->
                        <!-- right column -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

@endsection
