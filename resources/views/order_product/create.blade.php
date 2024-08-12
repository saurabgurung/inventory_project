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
                            <h3 class="card-title">Order Products</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('order_product.store')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="order_id">Order Id</label>
                                    <input type="text" class="form-control" id="order_id" name="order_id" placeholder="">
                                </div>

                                <div class="form-group">
                                    <label for="product_id">Product Id</label>
                                    <input type="text" class="form-control" id="product_id" name="product_id" placeholder="">
                                </div>



                                <div class="form-group">
                                    <label for="quantity">Quantity</label>
                                    <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity">

                                </div>

                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" id="price" name="price" placeholder="Price">

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

