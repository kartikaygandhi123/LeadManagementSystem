@extends('layouts.mainLayout')

@section('content')





    <div id="newcustomerform" class="box box-solid box-light">
        <div class="box-header with-border">
            <h4 id="form_heading" class="box-title">Add Business</h4>
        </div>

        <div>
            <!-- /.card-header -->
            <!-- form start -->



            <form method="post" id="addbusinessform" name="addbusinessform" action="addbusiness"
                class="form-horizontal form-element">
                @csrf



                <div class="box-body">

                    {{-- first two --}}
                    <div class="row">
                        <div class="form-group col-md-6">

                            <div class="row ">
                                <div class="col-4">

                                    <label for="name">Business Name<span class="danger">*</span></label>
                                </div>
                                <div class="col-4">
                                    <input id="name" type="text" class="form-control" name="business" required>


                                </div>
                            </div>
                        </div>


                        {{-- <div class="form-group col-md-6">
                            <div class="row">
                                <div class="col-2">

                                    <label for="Email">Email<span class="danger">*</span></label>
                                </div>
                                <div class="col-6">
                                    <input id="email" type="email"
                                        class="form-control  @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" autocomplete="email" required>



                                </div>
                            </div>
                        </div> --}}
                    </div>
                    {{-- first two upto here --}}









                    <div class="text-right">

                        <button type="submit" class="btn btn-success btn-md " id="addbusinessbtn">
                            Add Business
                        </button>
                    </div>

                </div>

                <br>
                <br>
            </form>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">

                <div class="box box-solid box-primary">
                    <div class="box-header with-border">
                        <h4 class="box-title">All Business</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        {{-- <th>Actions</th> --}}
                                        <th>All Business</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($business as $business)
                                        <tr>
                                            {{-- <td>

                                                <button class="btn btn-primary btn-group-sm btn-default" data-toggle="modal" data-target="#modal-add">Add</button>

                                                <button class="btn btn-success btn-group-sm btn-default" data-toggle="modal" data-target="#modal-edit">Edit</button>

                                                <button class="btn btn-danger btn-group-sm btn-default" data-toggle="modal" data-target="#modal-delete">Delete</button>



                                            </td> --}}
                                            <td>{{ $business->all_businesses }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->


                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

















@stop
