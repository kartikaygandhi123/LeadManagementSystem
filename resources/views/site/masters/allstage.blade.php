@extends('layouts.mainLayout')

@section('content')

    <div id="newcustomerform" class="box box-solid box-light">
        <div class="box-header with-border">
            <h4 id="form_heading" class="box-title">Add Stage</h4>
        </div>

        <div>
            <!-- /.card-header -->
            <!-- form start -->



            <form method="post" id="addstageform" name="addstageform" action="addstage" class="form-horizontal form-element">
                @csrf



                <div class="box-body">

                    {{-- first two --}}
                    <div class="row">
                        <div class="form-group col-md-6">

                            <div class="row ">
                                <div class="col-4">

                                    <label for="name">Stage Name<span class="danger">*</span></label>
                                </div>
                                <div class="col-4">
                                    <input id="name" type="text" class="form-control" name="stage" required>


                                </div>
                            </div>
                        </div>



                    </div>
                    {{-- first two upto here --}}
                    <div class="text-right">

                        <button type="submit" class="btn btn-success btn-md " id="addstagebtn">
                            Add Stage
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
                        <h4 class="box-title">All Stages</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        {{-- <th>Actions</th> --}}
                                        <th>Stages</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($stages as $stages)
                                        <tr>
                                            {{-- <td>
  
                          <button class="btn btn-primary btn-group-sm btn-default" data-toggle="modal" data-target="#modal-add">Add</button>
   
                          <button class="btn btn-success btn-group-sm btn-default" data-toggle="modal" data-target="#modal-edit">Edit</button>
                             
                          <button class="btn btn-danger btn-group-sm btn-default" data-toggle="modal" data-target="#modal-delete">Delete</button>
  
                          </td> --}}
                                            <td>{{ $stages->stage }}</td>
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





    {{-- Add Modal body --}}
    <div class="modal fade" id="modal-add">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add City</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p>City</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary float-right">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    {{-- Add Modal body --}}


    {{-- Edit Modal Body --}}


    <div class="modal fade" id="modal-edit">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit City</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p>City</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary float-right">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


    {{-- Edit Modal Body --}}




    {{-- Delete Modal Body --}}
    <div class="modal fade" id="modal-delete">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p>City</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary float-right">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


    {{-- Delete Modal Body --}}





@stop
