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
                            <h3 class="card-title">Products</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('products.store')}}" method="post" >
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="product_name">Product Name</label>
                                    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter product's name">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input type="text" class="form-control" id="description" name="description" placeholder="Enter product description">

                                </div>

                                <div class="form-group">
                                    <label for="category_id">Category ID</label>
                                    <input type="text" class="form-control" id="category_id" name="category_id" placeholder="">

                                </div>

                                <div class="form-group">
                                    <label for="supplier_id">Supplier Id</label>
                                    <input type="text" class="form-control" id="supplier_id" name="supplier_id" placeholder="">

                                </div>

                                <div class="form-group">
                                    <label for="cost_price">Cost Price</label>
                                    <input type="text" class="form-control" id="cost_price" name="cost_price" placeholder="Enter you the cost price">

                                </div>

                                <div class="form-group">
                                    <label for="sell_price">Selling Price</label>
                                    <input type="text" class="form-control" id="sell_price" name="sell_price" placeholder="Enter you the selling price">

                                </div>

                                <div class="form-group">
                                    <label for="quantity">Quantity in Stock</label>
                                    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter the quantity in stock">

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
