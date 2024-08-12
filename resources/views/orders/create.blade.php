@extends('admin_layout.dir_layout.main')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Orders</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('orders.store')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="order_date">Order Date</label>
                                    <input type="date" class="form-control" id="order_date" name="order_date" placeholder="Enter Date">
                                </div>

                                <div class="form-group">
                                    <label for="supplier_id">Suppliers Id</label>
                                    <input type="text" class="form-control" id="supplier_id" name="supplier_id" placeholder="">
                                </div>



                                <div class="form-group">
                                    <label for="total_amount">Total Amount</label>
                                    <input type="number" class="form-control" id="total_amount" name="total_amount" placeholder="">

                                </div>

                                <div class="form-group">

                                    <label for="status">Status</label>

                                    <select name="status" id="status" class="form-control">
                                        <option value="pending">Pending</option>
                                        <option value="completed">Completed</option>
                                        <option value="cancelled">cancelled</option>
                                    </select>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                    <!-- general form elements -->

                    <!-- Input addon -->
                    <!-- /.card -->
                    <!-- Horizontal Form -->
                    <!-- /.card -->

                </div>
                <!--/.col (left) -->
                <!-- right column -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

@endsection

