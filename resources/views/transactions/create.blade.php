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
                            <h3 class="card-title">Transactions</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('transactions.store')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="product_id">Product Id</label>
                                    <input type="text" class="form-control" id="product_id" name="product_id" placeholder="">
                                </div>


                                <div class="form-group">

                                    <label for="transaction_type">Transaction Type</label>

                                    <select name="transaction_type" id="transaction_type" class="form-control">
                                        <option value="in">in</option>
                                      <option value="out">out</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="quantity">Quantity</label>
                                    <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter the Quantity">

                                </div>

                                <div class="form-group">
                                    <label for="transaction_date">Transaction Date</label>
                                    <input type="date" class="form-control" id="transaction_date" name="transaction_date" placeholder=" ">

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

