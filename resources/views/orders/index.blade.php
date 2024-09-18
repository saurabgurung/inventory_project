@extends('admin_layout.dir_layout.main')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <a href="{{route('orders')}}">
                        <button class="btn btn-outline-success mb-2 "  >+ add orders</button>

                    </a>
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Orders</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dt-buttons btn-group flex-wrap">
                                    </div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                                        <thead>
                                        <tr>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">ID</th>
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column descending" aria-sort="ascending">Order Date</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Client Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Client Contact</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">product_id</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">total_amount</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">quantity</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">payment_type</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">payment_status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="odd">
                                        @foreach( $data as $i=>$cat)
                                            <tr class="odd">
                                                <td class="dtr-control sorting_1" >{{$cat->id}}</td>
                                                <td>{{$cat->order_date}}</td>
                                                <td>{{$cat->supplier_id}}</td>
                                                <td>{{$cat->total_amount}}</td>
                                                <td>{{$cat->status}}</td>
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
                </div></div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

@endsection
