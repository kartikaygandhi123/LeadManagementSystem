@extends('layouts.mainLayout')

@section('content')
    <div class="box box-default">
        {{-- <div class="box-header with-border">
        <h4 class="box-title">Customer Details</h4>

    </div> --}}
        <!-- /.box-header -->
        <div class="box-body">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab"><span
                            class="hidden-sm-up"><i class="ion-home"></i></span> <span
                            class="hidden-xs-down">Details</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab"><span
                            class="hidden-sm-up"><i class="ion-person"></i></span> <span
                            class="hidden-xs-down">Stage</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages" role="tab"><span
                            class="hidden-sm-up"><i class="ion-email"></i></span> <span
                            class="hidden-xs-down">Followup</span></a> </li>

            </ul>
            <!-- Tab panes -->
            <div class="tab-content tabcontent-border">
                <div class="tab-pane active" id="home" role="tabpanel">
                    <div class="pad">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <b> Customer Name : </b>
                                    </div>

                                    <div class="col-md-6">

                                        {{ $viewlead->Customer_Name }}
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">

                                        <b> Contact Number: </b>
                                    </div>
                                    <div class="col-md-6">
                                        {{ $viewlead->Contact_Number }}
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <b> POC Name : </b>
                                    </div>

                                    <div class="col-md-6">

                                        {{ $viewlead->POC_Name }}
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <b> Industry: </b>
                                    </div>
                                    <div class="col-md-6">
                                        {{ $viewlead->Industry }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <b> Lead Source : </b>
                                    </div>

                                    <div class="col-md-6">

                                        {{ $viewlead->Lead_Source }}
                                    </div>
                                </div>
                            </div>
                        </div>







                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <b> Email : </b>
                                    </div>

                                    <div class="col-md-6">

                                        {{ $viewlead->Email }}
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">

                                        <b> First Contact Date: </b>
                                    </div>
                                    <div class="col-md-6">
                                        {{ $viewlead->First_Contact_Date }}
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <b> Lead Status : </b>
                                    </div>

                                    <div class="col-md-6">

                                        {{ $viewlead->Lead_Status }}
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <b> Created By: </b>
                                    </div>
                                    <div class="col-md-6">
                                        {{ $viewlead->created_by_user->name }}
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="tab-pane pad" id="profile" role="tabpanel">



                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">

                                    <b> Current Stage: </b>
                                </div>
                                <div class="col-md-6">
                                    <span style="background-color:#007bff;color:white;padding:10px">
                                        {{ $viewlead->stage }}</span>
                                </div>

                            </div>
                        </div>
                    </div>



                </div>


                <div class="tab-pane pad" id="messages" role="tabpanel">



                    @if (session('success'))
                        <div class="col-sm-12">
                            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    @endif





                    <!-- /.box-header -->
                    <!-- form start -->
                    <form action="savefollowup" method="POST" enctype="multipart/form-data"
                        class="form-horizontal form-element">
                        @csrf
                        <div class="box-body">

                            <div class="form-group">



                                <!-- /.input group -->


                                <div class="form-group row">


                                    <input type="hidden" value="{{ $viewlead->id }}" name="id">

                                    <label for="example-text-input" class="col-sm-5 col-form-label">Remarks:</label>
                                    <div class="col-sm-10">

                                        <textarea class="form-control" type="text" value="" name="remarks" id="Remarks"></textarea>
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="example-date-input" class="col-sm-5 col-form-label">Follow-Up
                                        Date</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="date" value="<?php echo date('Y-m-d'); ?>"
                                            name="date" id="Follow_Up_Date">
                                    </div>
                                </div>



                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary btn-sm pull-right">Schedule Mail</button>


                            </div>
                        </div>
                        <!-- /.box-body -->

                        <!-- /.box-footer -->

                    </form>

                </div>

            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@endsection
