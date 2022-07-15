@extends('layouts.mainLayout')

@section('content')
    <div class="box box-default">
        <div class="box-body">
            <!-- Nav tabs -->

            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"> <a class="nav-link active" id="detailstab" data-toggle="tab" href="#home"
                        role="tab"><span class="hidden-sm-up"><i class="ion-home"></i></span> <span
                            class="hidden-xs-down">Details</span></a>
                </li>
                <li class="nav-item"> <a class="nav-link" id="timelinetab" data-toggle="tab" href="#timeline"
                        role="tab"><span class="hidden-sm-up"><i class="ion-person"></i></span> <span
                            class="hidden-xs-down">
                            Timeline</span></a> </li>
                <li class="nav-item"> <a class="nav-link" id="followuptab" data-toggle="tab" href="#followups"
                        role="tab"><span class="hidden-sm-up"><i class="ion-email"></i></span> <span
                            class="hidden-xs-down">Followup</span></a> </li>
                <li class="nav-item"> <a class="nav-link" id="requirementstab" data-toggle="tab" href="#requirements"
                        role="tab"><span class="hidden-sm-up"><i class="ion-email"></i></span> <span
                            class="hidden-xs-down">Requirements Tab</span></a> </li>

            </ul>
            <!-- Tab panes -->
            <div class="tab-content tabcontent-border">
                <div class="tab-pane active" id="home" role="tabpanel">
                    <div class="pad">
                        <div class="box-header with-border">
                            <h4 id="form_heading" class="box-title">Details</h4>
                            <h6 class="pull-right">
                                Stage : {{ $viewlead->stage }}
                            </h6>
                            <br>
                            <br>
                            <h6 class="pull-right">
                                Status : {{ $viewlead->Lead_Status }}
                            </h6>
                        </div>
                        <br>
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
                                        <span><a href="#" onclick="Edit_Lead('{{ $viewlead->id }}')"
                                                data-toggle="modal" data-target=".editmodal"><span
                                                    class="ti-write"></span></a></span>
                                    </div>

                                    {{-- edit modal --}}
                                    <div class="modal fade  editmodal" tabindex="-1" role="dialog"
                                        aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myLargeModalLabel">Status</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×</button>
                                                </div>

                                                <div class="modal-body">

                                                    <div style="display:flex; justify-content:center;">
                                                        <form action="/change_status" method="post">
                                                            @csrf

                                                            <input type="hidden" name="id"
                                                                value="{{ $viewlead->id }}">
                                                            <div
                                                                style="display: flex; justify-content:center;align-items:center">
                                                                <h5>Current Status: {{ $viewlead->Lead_Status }}</h5>
                                                            </div>
                                                            <br>


                                                            <div class="form-group"
                                                                style="display: flex; justify-content:center;align-items:center">

                                                                <div class="row">
                                                                    <div class="col-md-12">

                                                                        <div class="row"
                                                                            style="display: flex; align-items:baseline;">
                                                                            <div class="col-md-6">
                                                                                <h6>
                                                                                    Change Status:
                                                                                </h6>


                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <select class="form-control dropdown-item"
                                                                                    id="change_status"
                                                                                    onchange="status_change()"
                                                                                    name="status">

                                                                                    <option selected disabled>

                                                                                        Change Status
                                                                                    </option>

                                                                                    <option id="prospect"
                                                                                        value="Prospect" name="Prospect">

                                                                                        Prospect
                                                                                    </option>
                                                                                    <option id="Qualified"
                                                                                        value="Qualified"
                                                                                        name="Qualified">

                                                                                        Qualified
                                                                                    </option>
                                                                                    <option id="Not_Qualified"
                                                                                        value="Not Qualified"
                                                                                        name="Not Qualified">

                                                                                        Not Qualified
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                            <br>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <select class="form-control dropdown-item" id="Reason"
                                                                    onchange="" name="Reason" style="display: none">

                                                                    <option selected disabled>

                                                                        Select Reason
                                                                    </option>

                                                                    <option id="EIEC" value="EIEC">

                                                                        Existing Industry/Existing Customer
                                                                    </option>
                                                                    <option id="EINC" value="EINC">

                                                                        Existing Industry/New Customer
                                                                    </option>
                                                                    <option id="NINC" value="NINC">

                                                                        New Industry/New Customer
                                                                    </option>
                                                                </select>
                                                            </div>










                                                            <div class=" modal-footer "
                                                                style="display: flex; justify-content:center">
                                                                <button id="" type="submit"
                                                                    class="btn btn-success">
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
                                    {{-- edit modal --}}



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







                {{-- Timeline Tab --}}
                <div class="tab-pane pad" id="timeline" role="tabpanel">



                    {{-- Timeline Table --}}
                    <div class="box-header with-border">
                        <h4 class="box-title">Timeline</h4>
                        <h6 class="pull-right">
                            Stage : {{ $viewlead->stage }}
                        </h6>
                        <br>
                        <br>
                        <h6 class="pull-right">
                            Status : {{ $viewlead->Lead_Status }}
                        </h6>
                        <h6 class="box-subtitle text-white-50">Export data to Copy, CSV, Excel, PDF & Print</h6>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example"
                                class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                <thead>
                                    <tr>
                                        <th>Lead Id</th>
                                        <th>Lead Owner Id</th>
                                        <th>User Id</th>
                                        <th>Lead Status</th>
                                        <th>Lead Stage</th>
                                        <th>Message</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($leadlogdata as $log)
                                        <tr>

                                            <td>{{ $log->lead_id }}</td>

                                            <td>{{ $log->lead_owner_id }}</td>
                                            <td>{{ $log->user_id }}</td>
                                            <td>{{ $log->lead_status }}</td>
                                            <td>{{ $log->lead_stage }}</td>
                                            <td>{{ $log->message }}</td>
                                            <td>{{ $log->created_at }}</td>
                                            <td>{{ $log->updated_at }}</td>


                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Lead Id</th>
                                        <th>Lead Owner Id</th>
                                        <th>User Id</th>
                                        <th>Lead Status</th>
                                        <th>Lead Stage</th>
                                        <th>Message</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>

                {{-- Followup tab --}}
                <div class="tab-pane pad" id="followups" role="tabpanel">

                    <div class="box-header with-border">
                        <h4 class="box-title">Follow Up</h4>

                        <h6 class="box-subtitle text-white-50">Export data to Copy, CSV, Excel, PDF & Print</h6>
                    </div>

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
                    </form>
                    {{-- <hr> --}}

                    {{-- Followup Data Table --}}
                    <div class="box-header with-border">
                        <h5 class="box-title">Scheduled Followups</h5>
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
                                        <th>Followup Done Date</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($viewlead->followups as $followup)
                                        <tr>
                                            <td>{{ $followup->Follow_up_date }}</td>
                                            <td>{{ $followup->Remarks }}</td>
                                            {{-- <td>{{ $followup->followed_up_date }}</td> --}}
                                            @if ($followup->followed_up_date === null)
                                                <td id="followupbtn"><Button class="btn btn-info btn-sm"
                                                        onclick="showdate({{ $followup->id }})">Followup Done?</Button>
                                                </td>
                                            @else
                                                <td>{{ $followup->followed_up_date }}</td>

                                                {{-- <td id="followupbtn"><Button class="btn btn-success btn-sm">
                                                        {{ $followup->followed_up_date }}
                                                    </Button>
                                                </td> --}}
                                        </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Followup Date</th>
                                        <th>Remarks</th>
                                        <th>Followup Done Date </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                    <!-- /.box-body -->








                </div>

                {{-- Requirements Tab --}}
                <div class="tab-pane pad" id="requirements" role="tabpanel">


                    <div id="newcustomerform" class="">
                        <div class="box-header with-border">
                            <h4 id="form_heading" class="box-title">Requirements Mapping</h3>
                        </div>

                        <br>
                        <div>
                            <!-- /.card-header -->
                            <!-- form start -->



                            <form method="post" id="requirements" name="requirements" action="/saverequirementsmap"
                                class="form-horizontal form-element">
                                @csrf


                                <input type="hidden" name="id" id="lead_id" value="{{ $viewlead->id }}">

                                <div class="box-body">

                                    {{-- first two --}}
                                    <div class="row">
                                        <div class="form-group col-md-6">

                                            <div class="row">
                                                <div class="col-2">

                                                    <label for="Business_Requirements">Business Requirements</label>
                                                </div>
                                                <div class="col-10">
                                                    <input id="Business_Requirements" type="text"
                                                        class="form-control " name="business_requirement"
                                                        autocomplete="Business_Requirements" autofocus required>

                                                </div>
                                            </div>
                                        </div>




                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-2">

                                                    <label for="Upload_Documents">Upload Documents<span
                                                            class="danger">*</span></label>
                                                </div>
                                                <div class="col-10">
                                                    <input id="Upload_Documents" type="file" class="form-control"
                                                        name="upload_requirement_documents"
                                                        autocomplete="Upload_Documents" required>



                                                </div>
                                            </div>
                                        </div>

                                    </div>




                                    {{-- first two upto here --}}



                                    {{-- 2nd row --}}

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-2">
                                                    <label for="LOB">LOB<span class="danger">*</span></label>
                                                </div>
                                                <div class="col-10">
                                                    <select id="LOB" name="lob" class="form-control">
                                                        <option selected disabled>Select Lob</option>
                                                        <option>lob 1</option>
                                                        <option>lob 2</option>
                                                        <option>lob 3</option>
                                                        <option>lob 4</option>
                                                        <option>lob 5</option>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-2">
                                                    <label for="Services">Services<span class="danger">*</span></label>
                                                </div>
                                                <div class="col-10">
                                                    <select id="Services" name="services" class="form-control">
                                                        <option selected disabled>Select Services</option>
                                                        <option>Service 1</option>
                                                        <option>Service 2</option>
                                                        <option>Service 3</option>
                                                        <option>Service 4</option>
                                                        <option>Service 5</option>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- 2nd upto here --}}



                                    {{-- 3rd row --}}

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-2">
                                                    <label for="Area">Area<span class="danger">*</span></label>
                                                </div>
                                                <div class="col-10">
                                                    <input class="form-control" type="number" value=""
                                                        id="Area" name="area">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-2">
                                                    <label for="example-date-input">Date<span
                                                            class="danger">*</span></label>
                                                </div>
                                                <div class="col-10">
                                                    <input class="form-control" name="expected_closure_date"
                                                        type="date" value="<?php echo date('Y-m-d'); ?>"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- 4th row --}}

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-2">
                                                    <label for="Location">Location<span class="danger">*</span></label>
                                                </div>
                                                <div class="col-10">
                                                    <select id="Location" name="location" class="form-control">
                                                        <option selected disabled>Select Location</option>
                                                        <option>Location 1</option>
                                                        <option>Location 2</option>
                                                        <option>Location 3</option>
                                                        <option>Location 4</option>
                                                        <option>Location 5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-2">
                                                    <label for="Business">Business<span class="danger">*</span></label>
                                                </div>
                                                <div class="col-10">
                                                    <select id="Business" name="business_type" class="form-control">
                                                        <option selected disabled>Select Business</option>
                                                        <option>Business 1</option>
                                                        <option>Business 2</option>
                                                        <option>Business 3</option>
                                                        <option>Business 4</option>
                                                        <option>Business 5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- 5th row --}}

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-2">
                                                    <label for="Expected_Monthy_Revenue">Expected Monthy Revenue<span
                                                            class="danger">*</span></label>
                                                </div>
                                                <div class="col-10">
                                                    <input class="form-control" name="expected_monthly_revenue"
                                                        type="number" value="" id="Expected_Monthy_Revenue">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-2">
                                                    <label for="Expected_Capex">Expected Capex<span
                                                            class="danger">*</span></label>
                                                </div>
                                                <div class="col-10">
                                                    <input class="form-control" type="number" value=""
                                                        name="expected_capex" id="Expected_Capex">
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    {{-- 6th row --}}

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-2">
                                                    <label for="EBDTA%">EBDTA%<span class="danger">*</span></label>
                                                </div>
                                                <div class="col-10">
                                                    <input class="form-control" type="number" value=""
                                                        name="ebdta_percentage" value="ebdta_percentage" id="EBDTA">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-2">
                                                    <label for="EBDTA_Amount">EBDTA Amount<span
                                                            class="danger">*</span></label>
                                                </div>
                                                <div class="col-10">
                                                    <input class="form-control" type="number" value=""
                                                        name="ebdta_amount" id="EBDTA_Amount">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="text-right">

                                        <button type="submit" class="btn btn-success btn-md " id="save_requirements"
                                            tabindex="9">
                                            Save
                                        </button>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>



                </div>


                {{-- upto here --}}
            </div>
        </div>
    </div>
    {{-- Lost/Dorment Button --}}

    <div class="pull-right" style="top: 116px; position:absolute ;right:54px;font-size:4px">

        <button class="btn btn-danger btn-block btn-shadow margin-bottom" type="button" alt="default"
            data-toggle="modal" data-target=".bs-example-modal-lg">Lost/Dorment</button>

    </div>
    {{-- Stage Button --}}



    {{-- Lost/Dorment Modal --}}
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Lost/Dorment</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>

                <div class="modal-body">

                    <div style="display:flex; justify-content:center;">
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
        function status_change() {
            if (document.getElementById("change_status").value == "Not Qualified") {

                document.getElementById('Reason').style.display = "block";

            } else
                document.getElementById('Reason').style.display = "none";

        }
    </script>


    <script>
        function showdate(id) {

            $.ajax({
                type: "GET",
                url: "{{ url('/followupdone') }}?id=" + id,
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

    {{-- open followup default --}}
    <script>
        $(document).ready(function() {



            if ("{!! $openfollowup !!}" == "YES") {
                $('.nav-tabs a[href="#followups"]').tab('show');

            }

        });
    </script>
    {{-- open requirements map default --}}
    <script>
        $(document).ready(function() {



            if ("{!! $openrequirements !!}" == "YES") {
                $('.nav-tabs a[href="#requirements"]').tab('show');

            }

        });
    </script>






    {{-- EBDTA --}}
    <script>
        document.getElementById("EBDTA").addEventListener('keyup', function() {

            var a = document.getElementById("Expected_Monthy_Revenue").value;

            var b = document.getElementById("EBDTA").value;
            var c = document.getElementById("EBDTA_Amount");
            c.value = a / b;


            console.log(c.value);

        })
    </script>
@endsection
