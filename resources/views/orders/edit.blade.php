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
                            <h3 class="card-title">orders</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('orders.update',$orders->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <!-- First Column -->
                                <div class="col-md-10 bg-light p-3">

                                    <div class="card-blue">
                                        <!-- Order Date -->
                                        <div class="mb-3">
                                            <label for="order_date" class="form-label">Order Date</label>
                                            <input type="date" class="form-control" id="order_date" name="order_date" required value="{{ old('order_date', $orders->order_date) }}" readonly>
                                        </div>

                                        <!-- Client Name -->
                                        <div class="mb-3">
                                            <label for="client_name" class="form-label">Client Name</label>
                                            <input type="text" class="form-control" id="client_name" name="client_name" placeholder="Enter client name" required autocomplete="off" value="{{ old('client_name', $orders->client_name) }}" readonly>
                                        </div>

                                        <!-- Client Contact -->
                                        <div class="mb-3">
                                            <label for="client_contact" class="form-label">Client Contact</label>
                                            <input type="text" class="form-control" id="client_contact" name="client_contact" placeholder="Enter client contact" required autocomplete="off" value="{{ old('client_contact', $orders->client_contact) }}" readonly>
                                        </div>
                                        <!-- Payment Type -->
                                        <div class="form-group">
                                            <label for="payment_type" class="form-label">Payment Type</label>
                                            <select class="form-control" id="payment_type" name="payment_type" required autocomplete="off" value="{{ old('payment_type', $orders->payment_type) }}">

                                                <option value="cash">Cash</option>
                                                <option value="esewa">Esewa</option>
                                            </select>
                                        </div>

                                        <!-- Payment Status -->
                                        <div class="form-group">
                                            <label for="payment_status" class="form-label">Payment Status</label>
                                            <select class="form-control" id="payment_status" name="payment_status" required autocomplete="off" value="{{ old('payment_status', $orders->payment_status) }}">

                                                <option value="paid">Paid</option>
                                                <option value="pending">Pending</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>






                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">update</button>
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
