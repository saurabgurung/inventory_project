    @extends('admin_layout.dir_layout.main')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-7">
                    <a href="{{route('categories')}}">
                        <button class="btn btn-outline-success mb-2 "  >+ add categories </button>

                    </a>
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Categories</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <div class="card-body">
                            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dt-buttons btn-group flex-wrap">
                                        </div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                                            <thead>
                                            <tr>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">ID</th>
                                                <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column descending" aria-sort="ascending">Category Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Edit</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Delete</th></tr>
                                            </thead>
                                            <tbody>
                                            <tr class="odd">
                                                @foreach( $data as $i=>$cat)
                                                    <tr class="odd">
                                                        <td class="dtr-control sorting_1" >{{$cat->id}}</td>

                                                        <td>{{$cat->category_name}}</td>


{{--                                                            <button href="{{route('categories.show',$cat->id)}}" type="button" class="btn btn-info">                                <i class="fas fa-edit"></i>--}}
{{--                                                            </button>--}}
                                                        <td><a  href="{{route('categories.show',$cat->id)}}" class="btn btn-primary btn-sm">edit</a></td>
                                                        <td>
                                                            <a href="{{route('categories.destroy',$cat->id)}}" class="btn btn-danger btn-sm">delete</a></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>



                             </div>
                    <!-- /.card -->

                    <!-- general form elements -->

                    <!-- Input addon -->
                    <!-- /.card -->
                    <!-- Horizontal Form -->
                    <!-- /.card -->

{{--                </div>--}}
                <!--/.col (left) -->
                <!-- right column -->
                        </div>
                    </div>

                </div>
{{--            </div>--}}
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

@endsection
