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
                            <h3 class="card-title">Categories</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('products.update',$products->id)}}" method="post">
                            @csrf
                            @method('PUT')
{{--                            <input type="hidden" class="form-control" id="id" name="id"  value="{{ ( $categories->id) }}">--}}
{{--                            <input type="hidden" class="form-control" id="id" name="id"  value="{{ ( $brands->id) }}">--}}
{{--                            <!-- For categories -->--}}
{{--                            <input type="hidden" class="form-control" id="category_id" name="category_id" value="{{ $categories->id }}">--}}

                            <!-- For brands -->
{{--                            <input type="hidden" class="form-control" id="brand_id" name="brand_id" value="{{ $brands->id }}">--}}

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="product_name">Product Name</label>
                                    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter product's name" value="{{ old('product_name', $products->product_name) }}">

                                    @error('product_name')
                                    <p>this field is required</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input type="text" class="form-control" id="description" name="description" placeholder="Enter product description" value="{{ old('description', $products->description) }}">
                                    @error('description')
                                    <p>this field is required</p>
                                    @enderror
                                </div>

{{--                                <div class="form-group">--}}
{{--                                    <label for="category_id">Category</label>--}}


{{--                                    <select name="category_id" id="category_id" class="form-control" >--}}
{{--                                        <option> Select Options</option>--}}
{{--                                        @foreach ( $categories as $id => $category )--}}
{{--                                            <option value="{{ $id }}">{{ $category }}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                    @error('category_id')--}}
{{--                                    <p class="text-danger">  This Category is a required filed</p>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}

{{--                                <div class="form-group">--}}
{{--                                    <label for="brand_id">Category</label>--}}


{{--                                    <select name="brand_id" id="brand_id" class="form-control" >--}}
{{--                                        <option> Select Options</option>--}}
{{--                                        @foreach ( $brands as $id => $brand )--}}
{{--                                            <option value="{{ $id }}">{{ $brand }}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                    @error('brand_id')--}}
{{--                                    <p class="text-danger">  This Category is a required filed</p>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}


                                <div class="form-group">

                                    <label for="transaction_type">Status</label>

                                    <select name="status" id="status" class="form-control" >
                                        <option value="{{ old('status', $products->status) }}">available</option>
                                        <option value="{{ old('status', $products->status) }}">not_available</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="rate">Rate</label>
                                    <input type="number" class="form-control" id="rate" name="rate" placeholder="Enter you the selling price" value="{{ old('rate', $products->rate) }}">
                                    @error('rate')
                                    <p class="text-danger">  This  is a required filed</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="quantity_in_stock">Quantity in Stock</label>
                                    <input type="text"  class="form-control" id="quantity_in_stock" name="quantity_in_stock" placeholder="Enter the quantity in stock" value="{{ old('quantity_in_stock', $products->quantity_in_stock) }}">
                                    @error('quantity_in_stock')
                                    <p class="text-danger">  This  is a required filed</p>
                                    @enderror
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
