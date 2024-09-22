@extends('admin_layout.dir_layout.main')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <!-- left column -->
                <div class="col-md-6">
                    <a href="{{route('products.index')}}">
                        <button class="btn btn-outline-dark mb-2 "  >Manage List</button>

                    </a>
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
                                    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter product's name" autocomplete="off">

                                    @error('product_name')
                                    <p class="text-danger">this field is required</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input type="text" class="form-control" id="description" name="description" placeholder="Enter product description" autocomplete="off">
                                    @error('description')
                                    <p class="text-danger">this field is required</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="category_id">Category</label>
                                    <select name="category_id" id="category_id" class="form-control">
                                        <option> Select Options</option>
                                    @foreach ( $categories as $id => $category )
                                            <option value="{{ $id }}">{{ $category }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <p class="text-danger">  This Category is a required filed</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="brands_id">Brand</label>
                                    <select name="brands_id" id="brands_id" class="form-control">
                                        <option> Select Options</option>
                                        @foreach ( $brands as $id => $brand )
                                            <option value="{{ $id }}">{{ $brand }}</option>
                                        @endforeach
                                    </select>
                                    @error('brands_id')
                                    <p class="text-danger">  This Category is a required filed</p>
                                    @enderror
                                </div>



                                <div class="form-group">
                                    <label for="rate">Rate</label>
                                    <input type="text" class="form-control" id="rate" name="rate" placeholder="Enter the Rate" autocomplete="off" min="0">
                                    @error('rate')
                                    <p class="text-danger">  error</p>
                                    @enderror
                                </div>

{{--                                <div class="form-group">--}}

{{--                                    <label for="transaction_type">Status</label>--}}

{{--                                    <select name="status" id="status" class="form-control">--}}
{{--                                        <option value="available" selected>available</option>--}}
{{--                                        <option value="not_available">not_available</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}

                                <div class="form-group">
                                    <label for="quantity">Quantity</label>
                                    <input type="text"  class="form-control" id="quantity" name="quantity" placeholder="Enter the quantity in stock" autocomplete="off" min="0">
                                    @error('quantity')
                                    <p class="text-danger">  error</p>
                                    @enderror
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

