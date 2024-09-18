@extends('admin_layout.dir_layout.main')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-9">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Orders</h3>
                        </div>
                            <form action="{{ route('orders.store') }}" method="post">
                                <div class="row">
                                    <!-- First Column -->
                                    <div class="col-md-6 bg-light p-3">

                                        <div class="card-blue">
                                        <!-- Order Date -->
                                        <div class="mb-3">
                                            <label for="order_date" class="form-label">Order Date</label>
                                            <input type="date" class="form-control" id="order_date" name="order_date" required>
                                        </div>

                                        <!-- Client Name -->
                                        <div class="mb-3">
                                            <label for="client_name" class="form-label">Client Name</label>
                                            <input type="text" class="form-control" id="client_name" name="client_name" placeholder="Enter client name" required autocomplete="off">
                                        </div>

                                        <!-- Client Contact -->
                                        <div class="mb-3">
                                            <label for="client_contact" class="form-label">Client Contact</label>
                                            <input type="text" class="form-control" id="client_contact" name="client_contact" placeholder="Enter client contact" required autocomplete="off">
                                        </div>



<!--                                            <div class="form-group">-->
<!--                                                <label for="product_id">product</label>-->
<!--                                                <select name="product_id" id="product_id" class="form-control">-->
<!--                                                    <option> Select Options</option>-->
<!--                                                    @foreach ( $products as $id => $product )-->
<!--                                                        <option value="{{ $id }}">{{ $product['product_name'] }}</option>-->
<!--                                                    @endforeach-->
<!--                                                </select>-->
<!--                                                @error('category_id')-->
<!--                                                <p class="text-danger">  The product is a required filed</p>-->
<!--                                                @enderror-->
<!--                                            </div>-->
<!--                                            <div class="mb-3">-->
<!--                                                <label for="rate" class="form-label">Rate</label>-->
<!--                                                <input type="number" step="0.01" class="form-control" id="rate" name="rate" placeholder="Enter rate" required value="@foreach( $products as $id => $product) {{$products}}@endforeach">-->
<!--                                            </div>-->

                                            <div class="form-group">
                                                <label for="product_id">Product</label>
                                                <select name="product_id" id="product_id" class="form-control">
                                                    <option>Select Options</option>
                                                    @foreach ($products as $product)
                                                    <option value="{{ $product['id'] }}" data-rate="{{ $product['rate'] }}">
                                                        {{ $product['product_name'] }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                @error('category_id')
                                                <p class="text-danger">The product is a required field</p>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="rate" class="form-label">Rate</label>
                                                <input type="number" step="0.01" class="form-control" id="rate" name="rate" placeholder="Enter rate" required value="">
                                            </div>



                                        </div>
                                    </div>



                                    <div class="col-md-6 bg-gradient-gray p-3">
                                        <!-- VAT -->
                                        <div class="mb-3">
                                            <label for="vat" class="form-label">VAT (%)</label>
                                            <input type="number" step="0.01" class="form-control" id="vat" name="vat" placeholder="Enter VAT percentage" required autocomplete="off">
                                        </div>

                                        <!-- Total Amount -->
                                        <div class="mb-3">
                                            <label for="total_amount" class="form-label">Total Amount</label>
                                            <input type="number" step="0.01" class="form-control" id="total_amount" name="total_amount" placeholder="Enter total amount" required autocomplete="off">
                                        </div>


                                    <!-- Second Column -->
                                    <div class="col-md-6">
                                        <!-- Discount -->
                                        <div class="mb-3">
                                            <label for="discount" class="form-label">Discount</label>
                                            <input type="number" step="0.01" class="form-control" id="discount" name="discount" placeholder="Enter discount amount" required autocomplete="off">
                                        </div>

                                        <!-- Grand Total -->
                                        <div class="mb-3">
                                            <label for="grand_total" class="form-label">Grand Total</label>
                                            <input type="number" step="0.01" class="form-control" id="grand_total" name="grand_total" placeholder="Enter grand total" required autocomplete="off">
                                        </div>

                                        <!-- Paid Amount -->
                                        <div class="mb-3">
                                            <label for="paid" class="form-label">Paid Amount</label>
                                            <input type="number" step="0.01" class="form-control" id="paid" name="paid" placeholder="Enter paid amount" required autocomplete="off">
                                        </div>

                                        <!-- Payment Type -->
                                        <div class="mb-3">
                                            <label for="payment_type" class="form-label">Payment Type</label>
                                            <select class="form-select" id="payment_type" name="payment_type" required autocomplete="off">
                                                <option value="">Select payment type</option>
                                                <option value="1">Cash</option>
                                                <option value="2">Card</option>
                                                <option value="3">Bank Transfer</option>
                                            </select>
                                        </div>

                                        <!-- Payment Status -->
                                        <div class="mb-3">
                                            <label for="payment_status" class="form-label">Payment Status</label>
                                            <select class="form-select" id="payment_status" name="payment_status" required autocomplete="off">
                                                <option value="">Select payment status</option>
                                                <option value="1">Paid</option>
                                                <option value="2">Pending</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit Order</button>
                            </div>
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


@section('script')
<script>
    document.getElementById('product_id').addEventListener('change', function() {
        // Get the selected option
        var selectedOption = this.options[this.selectedIndex];

        // Get the rate from the data-rate attribute
        var rate = selectedOption.getAttribute('data-rate');

        // Set the rate input value
        document.getElementById('rate').value = rate;
    });
</script>

@endsection

