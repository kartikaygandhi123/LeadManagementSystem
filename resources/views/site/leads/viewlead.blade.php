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
                <li class="nav-item"> <a class="nav-link active" id="detailstab" data-toggle="tab" href="#home"
                        role="tab"><span class="hidden-sm-up"><i class="ion-home"></i></span> <span
                            class="hidden-xs-down">Details</span></a>
                </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab"><span
                            class="hidden-sm-up"><i class="ion-person"></i></span> <span class="hidden-xs-down">
                            Stage</span></a> </li>
                <li class="nav-item"> <a class="nav-link" id="followuptab" data-toggle="tab" href="#followups"
                        role="tab"><span class="hidden-sm-up"><i class="ion-email"></i></span> <span
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


                <div class="tab-pane pad" id="followups" role="tabpanel">



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
                    <form action="{{ route('savefollow') }}" method="POST" enctype="multipart/form-data"
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

                    <hr>

                    <div class="box-header with-border">
                        <h4 class="box-title">FollowUps</h4>
                        <h6 class="box-subtitle text-white-50">Export data to Copy, CSV, Excel, PDF & Print</h6>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example"
                                class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                <thead>
                                    <tr>
                                        <th>Followup Date</th>
                                        <th>Remarks</th>
                                        <th>Click button if Followed Up</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($viewlead->followups as $followup)
                                        <tr>
                                            <td>{{ $followup->Follow_up_date }}</td>
                                            <td>{{ $followup->Remarks }}</td>
                                            <td>{{ $followup->followed_up_date }}</td>
                                            @if ($followup->followed_up_date == null)
                                                <td id="followupbtn"><Button class="btn btn-success btn-sm"
                                                        onclick="showdate({{ $followup->id }})">Followed
                                                        Up</Button>
                                                </td>
                                            @else
                                                <td id="followupbtn"><Button class="btn btn-success btn-sm">
                                                        {{ $followup->followed_up_date }}
                                                    </Button>
                                                </td>
                                        </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Followup Date</th>
                                        <th>Remarks</th>
                                        <th>Click button if Followed Up</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->








                </div>

            </div>
        </div>
    </div>
    {{-- Stage Button --}}

    <div class="pull-right" style="bottom: 21px; position:absolute ;right:2px">
        <button class="btn btn-info btn-block btn-shadow margin-bottom" type="button" alt="default"
            data-toggle="modal" data-target=".bs-example-modal-lg">Stage</button>
    </div>
    {{-- Stage Button --}}

    <!-- /.box-body -->

    <!-- /.box -->




    {{-- stage modal --}}
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Stage</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>

                <div class="modal-body">

                    <div style="display:flex; justify-content:center">
                        <form action="/stage_status" method="post">
                            @csrf

                            <input type="hidden" name="id" value="{{ $viewlead->id }}">
                            <div style="display: flex; justify-content:center;align-items:center">
                                <h5>Current Stage: {{ $viewlead->stage }}</h5>
                            </div>
                            <br>


                            <div class="form-group" style="display: flex; justify-content:center;align-items:center">

                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="row" style="display: flex; align-items:baseline;">
                                            <div class="col-md-6">
                                                <h6>
                                                    Change Stage :
                                                </h6>


                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control dropdown-item" id="change_stage"
                                                    onchange="stage_change()" name="stage">

                                                    <option selected disabled>

                                                        Change State
                                                    </option>

                                                    <option id="dorment" value="Dorment" name="Dorment">

                                                        Dorment
                                                    </option>
                                                    <option id="lost" value="Lost" name="Lost">

                                                        Lost
                                                    </option>
                                                </select>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <input id="input_lost" class="form-control" name="lost_reason"
                                    placeholder="Reason for Lost" style="display: none">
                            </div>
                            <div class="form-group">
                                <input id="input_dorment" class="form-control" name="dorment_reason"
                                    placeholder="Reason for Dorment" style="display: none">
                            </div>




                            <div class=" modal-footer " style="display: flex; justify-content:center">
                                <button id="" type="submit" class="btn btn-success">
                                    Save</button>
                            </div>

                        </form>
                    </div>


                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>


    <script>
        function stage_change() {
            if (document.getElementById("change_stage").value == "Dorment") {

                document.getElementById('input_lost').style.display = "none";
                document.getElementById('input_dorment').style.display = "block";
            } else if (document.getElementById("change_stage").value == "Lost") {
                document.getElementById('input_lost').style.display = "block";
                document.getElementById('input_dorment').style.display = "none";

            }
        }
    </script>


    <script>
        function showdate(id) {

            $.ajax({
                type: "GET",
                url: "{{ url('admin/followupdone') }}?id=" + id,
                // data: "data",
                // dataType: "dataType",
                success: function(response) {

                    console.log(response)




                },
                error: function(error) {
                    console.log(error);
                }
            });



        }
    </script>


    <script>
        $(document).ready(function() {



            if ("{!! $openfollowup !!}" == "YES") {
                $('.nav-tabs a[href="#followups"]').tab('show');

            }

        });
    </script>
@endsection
