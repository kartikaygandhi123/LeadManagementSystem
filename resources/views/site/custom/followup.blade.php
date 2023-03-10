@extends('layouts.mainLayout')

@section('content')
    <style>
        #input_lost,
        #input_dorment {
            display: none;

        }
    </style>





    <div class="box box-solid box-primary">
        <div class="box-header with-border">
            <h4 class="box-title">Follow-Up</h4>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="savefollowup" method="POST" enctype="multipart/form-data" class="form-horizontal form-element">
            @csrf
            <div class="box-body">

                <div class="form-group">



                    <!-- /.input group -->


                    <div class="form-group row">


                        <input type="hidden" value="{{ $data->id }}" name="id">

                        <label for="example-text-input" class="col-sm-5 col-form-label">Remarks:</label>
                        <div class="col-sm-10">

                            <textarea class="form-control" type="text" value="" name="remarks" id="Remarks"></textarea>
                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="example-date-input" class="col-sm-5 col-form-label">Follow-Up Date</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" value="<?php echo date('Y-m-d'); ?>" name="date"
                                id="Follow_Up_Date">
                        </div>
                    </div>



                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-info ">Schedule Mail</button>


            </div>
            <!-- /.box-footer -->

        </form>
    </div>


    <div class="box box-solid box-primary">
        <div class="box-header with-border">
            <h4 class="box-title">FollowUps</h4>
            <h6 class="box-subtitle text-white-50">Export data to Copy, CSV, Excel, PDF & Print</h6>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                    <thead>
                        <tr>
                            <th>Followup Date</th>
                            <th>Remarks</th>
                            <th>Click If Followup Done</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($viewlead->followups as $item)
                            @foreach ($item as $followup)
                                <tr>
                                    <td>{{ $followup['Follow_up_date'] }}</td>
                                    <td>{{ $followup['Remarks'] }}</td>
                                    <td><Button class="btn btn-success btn-sm">FollowUP Done</Button></td>

                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Followup Date</th>
                            <th>Remarks</th>
                            <th>Click If Followup Done</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <!-- /.box-body -->
    </div>






















    {{-- Stage Button --}}

    <div class="pull-right" style="bottom: 21px; position:absolute ;right:2px">
        <button class="btn btn-info btn-block btn-shadow margin-bottom" type="button" alt="default" data-toggle="modal"
            data-target=".bs-example-modal-lg">Stage</button>
    </div>
    {{-- Stage Button --}}


    {{-- Stage Modal --}}
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Stage</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">??</button>
                </div>

                <div class="modal-body">

                    <div style="display:flex; justify-content:center">
                        <form action="/stage_status" method="post">
                            @csrf

                            <input type="hidden" name="id" value="{{ $data->id }}">
                            <div style="display: flex; justify-content:center;align-items:center">
                                <h5>Current Stage: {{ $data->stage }}</h5>
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

                                                    <option id="dormant" value="Dormant" name="Dormant">

                                                        Dormant
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
                                    placeholder="Reason for Lost">
                            </div>
                            <div class="form-group">
                                <input id="input_dormant" class="form-control" name="dormant_reason"
                                    placeholder="Reason for Dormant">
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
    {{-- Stage Modal --}}


    {{-- notification bell --}}
    <script>
        document.getElementById('stage').style.display = "none";
        document.getElementById('notificationbell').style.display = "none";
        document.getElementById('stage').innerHTML = `<p >Current Stage:</p> <p >{{ $data->stage }}</p>`;
    </script>
    {{-- notification bell --}}

    <script>
        function stage_change() {
            if (document.getElementById("change_stage").value == "Dormant") {

                document.getElementById('input_lost').style.display = "none";
                document.getElementById('input_dormant').style.display = "block";
            } else if (document.getElementById("change_stage").value == "Lost") {
                document.getElementById('input_lost').style.display = "block";
                document.getElementById('input_dormant').style.display = "none";

            }
        }
    </script>
@endsection
