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
                            <h3 class="card-title">Suppliers</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
{{--                        <form action="{{route('suppliers.update',$suppliers->id)}}" method="post">--}}
                            <form action="{{route('$suppliers.update',$suppliers->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <input type="hidden" class="form-control" id="id" name="id"  value="{{ ( $suppliers->id) }}">

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="supplier_name">Supplier Name</label>
                                    <input type="text" class="form-control" id="supplier_name" name="supplier_name" value="{{ old('supplier_name', $suppliers->supplier_name) }}" placeholder="Enter supplier's name">
                                    @error('$supplier_name')
                                    <p class="text-danger">this is required</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="contact_number">Contact Number</label>
                                    <input type="number" class="form-control" id="contact_number" name="contact_number" value="{{ old('contact_number', $suppliers->contact_number) }}" placeholder="Enter your contact Number">
                                    @error('contact_number')
                                    <p class="text-danger">this is required</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" value="{{ old('email', $suppliers->email) }}" name="email" placeholder="Enter your Email">
                                    @error('email')
                                    <p class="text-danger">this is required</p>
                                    @enderror
                                </div>

                                <div class="form-group">

                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" value="{{ old('address', $suppliers->address) }}" name="address" placeholder="Enter you Temporary Address">
                                    @error('address')
                                    <p class="text-danger">this is required</p>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
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

