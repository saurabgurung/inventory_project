@extends('admin_layout.dir_layout.main')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-10">
                    <a href="{{route('orders.index')}}">
                        <button class="btn btn-outline-dark mb-2 "  >Manage List</button>

                    </a>
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Orders</h3>
                        </div>
                            <form action="{{ route('orders.store') }}" method="post">
                                @csrf
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



                                            <div class="form-group">
                                                <label for="product_id">Product</label>
                                                <select name="product_id" id="product_id" class="form-control">
                                                    <option>Select Options</option>
                                                    @foreach ($products as $product)
                                                    <option value="{{ $product['id'] }}" data-rate="{{ $product['rate'] }}" data-quan="{{$product['quantity_in_stock']}}" >
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
                                                <input type="number" step="0.01" class="form-control" id="rate" name="rate" placeholder="$$$" required value="" readonly>
                                            </div>

                                            <div class="mb-3">
                                                <label for="quantity_in_stock" class="form-label">Available Stock</label>
                                                <input type="number" class="form-control" id="quantity_in_stock" name="quantity_in_stock" readonly>
                                            </div>

                                            <div class="mb-3">
                                                <label for="quantity" class="form-label">Quantity</label>
                                                <input type="number" step="0.01" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity" required value="" >
                                            </div>


                                        </div>
                                    </div>



                                    <div class="col-md-6  p-3">

                                        <!-- Total Amount -->
                                        <div class="mb-3">
                                            <label for="total_amount" class="form-label">Total Amount</label>
                                            <input type="number" step="0.01" class="form-control" id="total_amount" name="total_amount" placeholder="Enter total amount" required autocomplete="off">
                                        </div>


                                    <!-- Second Column -->
                                    <div class="col-md-6">
                                        <!-- Discount -->




                                        <!-- Payment Type -->
                                        <div class="mb-3">
                                            <label for="payment_type" class="form-label">Payment Type</label>
                                            <select class="form-select" id="payment_type" name="payment_type" required autocomplete="off">
                                                <option value="">Select payment type</option>
                                                <option value="cash">Cash</option>
                                                <option value="esewa">Esewa</option>
                                            </select>
                                        </div>

                                        <!-- Payment Status -->
                                        <div class="mb-3">
                                            <label for="payment_status" class="form-label">Payment Status</label>
                                            <select class="form-select" id="payment_status" name="payment_status" required autocomplete="off">
                                                <option value="">Select payment status</option>
                                                <option value="paid">Paid</option>
                                                <option value="pending">Pending</option>
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



    document.getElementById('quantity').addEventListener('input', function() {
        var quantity_stock = parseFloat(document.getElementById('quantity_in_stock').value);
        var quantity = parseFloat(document.getElementById('quantity').value);


        // Check if quantity exceeds the available stock
        if (quantity > quantity_stock || quantity < 0) {
            alert("Quantity exceeds available stock!");
            this.value = ''; // Clear the input if the entered value is invalid
        }
    });
    document.getElementById('product_id').addEventListener('change', function() {
        var selectedOption = this.options[this.selectedIndex];
        console.log('selectedOption',selectedOption)

        var rate = selectedOption.getAttribute('data-rate');
        document.getElementById('rate').value = rate;

        calculateTotal();

    });

document.getElementById('product_id').addEventListener('change', function() {
    var selectedOption = this.options[this.selectedIndex];
    console.log('selectedOption',selectedOption)


    var quantity_in_stock = selectedOption.getAttribute('data-quan');
    document.getElementById('quantity_in_stock').value = quantity_in_stock;

    calculateTotal();

});
        document.getElementById('quantity').addEventListener('input', function() {
            calculateTotal();

    });


    function calculateTotal() {
        var rate = parseFloat(document.getElementById('rate').value);
        var quantity = parseFloat(document.getElementById('quantity').value);

        if (!isNaN(rate) && !isNaN(quantity)) {
            document.getElementById('total_amount').value = (rate * quantity).toFixed(2);
        } else {
            document.getElementById('total_amount').value = '';
        }

            // Check if quantity exceeds the available stock

    }


</script>

@endsection

