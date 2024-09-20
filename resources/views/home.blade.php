@extends('admin_layout.dir_layout.main')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">



                <div class="col-sm-12 col-md-9">

                <div class="card-body">
                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dt-buttons btn-group flex-wrap"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example1" class="table table-bordered table-hover table-striped text-center">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending">Product Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Rate</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Quantity</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $cat)
                                        <tr>
                                            <td>{{ $cat->product_name }}</td>
                                            <td>{{ $cat->rate }}</td>
                                            <td>{{ $cat->quantity_in_stock }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Rate</th>
                                        <th>Quantity</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </div>




            </div>
            <!-- /.row -->
            <!-- Main row -->
        </div><!-- /.container-fluid -->
    </section>

    <style>
        /* Add a border radius and shadow to the table */
        table {
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        /* Style the table headers */
        thead {
            background-color: #343a40; /* Dark background for header */
            color: white; /* White text */
        }

        /* Add padding and space between table cells */
        th, td {
            padding: 12px 15px;
        }

        /* Add hover effect on table rows */
        tbody tr:hover {
            background-color: #f2f2f2; /* Light grey on hover */
            transition: background-color 0.3s;
        }

        /* Zebra striping for table rows */
        tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        /* Center the text in the table cells */
        td, th {
            text-align: center;
            vertical-align: middle;
        }
    </style>



@endsection



