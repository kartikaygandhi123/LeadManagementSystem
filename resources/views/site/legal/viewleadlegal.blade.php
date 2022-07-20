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
                {{-- <li class="nav-item"> <a class="nav-link" id="timelinetab" data-toggle="tab" href="#timeline"
                        role="tab"><span class="hidden-sm-up"><i class="ion-person"></i></span> <span
                            class="hidden-xs-down">
                            Timeline</span></a> </li>
                <li class="nav-item"> <a class="nav-link" id="followuptab" data-toggle="tab" href="#followups"
                        role="tab"><span class="hidden-sm-up"><i class="ion-email"></i></span> <span
                            class="hidden-xs-down">Followup</span></a> </li> --}}


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


                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <b> Assigned to User: </b>
                                    </div>
                                    <div class="col-md-6">
                                        {{ $viewlead->assigned_to_user->name }}

                                        <span><a href="#" onclick="Update_User('{{ $viewlead->id }}')"
                                                data-toggle="modal" data-target=".updateuser"><span
                                                    class="ti-write"></span></a></span>

                                    </div>

                                    {{-- edit modal --}}
                                    <div class="modal fade  updateuser" tabindex="-1" role="dialog"
                                        aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myLargeModalLabel">Assigned To
                                                    </h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×</button>
                                                </div>

                                                <div class="modal-body">

                                                    <div style="display:flex; justify-content:center;">
                                                        <form action="/updateuser" method="post">
                                                            @csrf

                                                            <input type="hidden" name="id"
                                                                value="{{ $viewlead->id }}">
                                                            <div
                                                                style="display: flex; justify-content:center;align-items:center">
                                                                <h5>Assigned To:
                                                                    {{ $viewlead->assigned_to_user->name }}
                                                                </h5>
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
                                                                                    Change Assigned User:
                                                                                </h6>


                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <select class="form-control dropdown-item"
                                                                                    id="assigned_user"
                                                                                    name="assigned_user">

                                                                                    @foreach ($users as $k => $v)
                                                                                        <option
                                                                                            value="{{ $k }}">
                                                                                            {{ $v }}</option>
                                                                                    @endforeach


                                                                                </select>
                                                                            </div>
                                                                            <br>
                                                                        </div>
                                                                    </div>
                                                                </div>
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



                        @if (isset($requirements->business_requirement))
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b> Business Requirements: </b>
                                        </div>
                                        <div class="col-md-6">
                                            {{ isset($requirements->business_requirement) ? $requirements->business_requirement : 'Not Found' }}
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b> Requirement Documents: </b>
                                        </div>
                                        <div class="col-md-6">
                                            {{ isset($requirements->upload_requirement_documents) ? $requirements->upload_requirement_documents : 'Not Found' }}

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b> Services: </b>
                                        </div>
                                        <div class="col-md-6">
                                            {{ isset($requirements->services) ? $requirements->services : 'Not Found' }}
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b> LOB: </b>
                                        </div>
                                        <div class="col-md-6">
                                            {{ isset($requirements->lob) ? $requirements->lob : 'Not Found' }}
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b> Area: </b>
                                        </div>
                                        <div class="col-md-6">
                                            {{ isset($requirements->area) ? $requirements->area : 'Not Found' }}
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b> Expected Closure Date </b>
                                        </div>
                                        <div class="col-md-6">
                                            {{ isset($requirements->expected_closure_date) ? $requirements->expected_closure_date : 'Not Found' }}
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b> Location: </b>
                                        </div>
                                        <div class="col-md-6">
                                            {{ isset($requirements->location) ? $requirements->location : 'Not Found' }}
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b> Business Type: </b>
                                        </div>
                                        <div class="col-md-6">
                                            {{ isset($requirements->business_type) ? $requirements->business_type : 'Not Found' }}
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b> Expected Monthly Revenue </b>
                                        </div>
                                        <div class="col-md-6">
                                            {{ isset($requirements->expected_monthly_revenue) ? $requirements->expected_monthly_revenue : 'Not Found' }}
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b> Expected Capex </b>
                                        </div>
                                        <div class="col-md-6">
                                            {{ isset($requirements->expected_capex) ? $requirements->expected_capex : 'Not Found' }}
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b> EBDTA% </b>
                                        </div>
                                        <div class="col-md-6">
                                            {{ isset($requirements->ebdta_percentage) ? $requirements->ebdta_percentage : 'Not Found' }}
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b> EBDTA Amount </b>
                                        </div>
                                        <div class="col-md-6">
                                            {{ isset($requirements->ebdta_amount) ? $requirements->ebdta_amount : 'Not Found' }}
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b>Business Proposal Shared</b>
                                        </div>
                                        <div class="col-md-6">
                                            {{ isset($requirements->share_business_proposal) ? $requirements->share_business_proposal : 'Not Found' }}

                                            <span><a href="#"
                                                    onclick="Update_Proposal_Accepted('{{ $requirements->lead_id }}')"
                                                    data-toggle="modal" data-target=".updateproposalaccepted"><span
                                                        class="ti-write"></span></a></span>


                                        </div>

                                        {{-- edit modal --}}
                                        <div class="modal fade  updateproposalaccepted" tabindex="-1" role="dialog"
                                            aria-labelledby="myLargeModalLabel" aria-hidden="true"
                                            style="display: none;">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myLargeModalLabel">Business Proposal
                                                            Shared
                                                        </h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">×</button>
                                                    </div>

                                                    <div class="modal-body">

                                                        <div style="display:flex; justify-content:center;">
                                                            <form action="/updateproposalshared" method="post">
                                                                @csrf

                                                                <input type="hidden" name="id"
                                                                    value="{{ $requirements->lead_id }}">
                                                                <div
                                                                    style="display: flex; justify-content:center;align-items:center">
                                                                    <h5>Business Proposal Shared:
                                                                        {{ $requirements->share_business_proposal }}
                                                                    </h5>
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
                                                                                    <select
                                                                                        class="form-control dropdown-item"
                                                                                        id="proposal_shared"
                                                                                        name="proposal_shared"
                                                                                        required="">

                                                                                        <option id="No"
                                                                                            value="No">

                                                                                            No
                                                                                        </option>


                                                                                        <option id="Yes"
                                                                                            value="Yes">

                                                                                            Yes
                                                                                        </option>


                                                                                    </select>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
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
                        @endif

                        @if (isset($proposal->proposal_documents))
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b> Proposal Documents: </b>
                                        </div>
                                        <div class="col-md-6">
                                            {{ isset($proposal->proposal_documents) ? $proposal->proposal_documents : 'Not Found' }}
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b> Reason For Changing Proposal: </b>
                                        </div>
                                        <div class="col-md-6">
                                            {{ isset($proposal->reason_for_changing_proposal) ? $proposal->reason_for_changing_proposal : 'Not Found' }}
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b> Proposal Accepted: </b>
                                        </div>

                                        <div class="col-md-6">

                                            {{ isset($proposal->proposal_accepted) ? $proposal->proposal_accepted : 'Not Found' }}

                                            <span><a href="#"
                                                    onclick="Proposal_Accepted('{{ $proposal->lead_id }}')"
                                                    data-toggle="modal" data-target=".acceptproposal"><span
                                                        class="ti-write"></span></a></span>
                                        </div>

                                        {{-- edit modal --}}
                                        <div class="modal fade  acceptproposal" tabindex="-1" role="dialog"
                                            aria-labelledby="myLargeModalLabel" aria-hidden="true"
                                            style="display: none;">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myLargeModalLabel">Proposal Accepted
                                                        </h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">×</button>
                                                    </div>

                                                    <div class="modal-body">

                                                        <div style="display:flex; justify-content:center;">
                                                            <form action="/proposal_accepted" method="post">
                                                                @csrf

                                                                <input type="hidden" name="id"
                                                                    value="{{ $proposal->lead_id }}">
                                                                <div
                                                                    style="display: flex; justify-content:center;align-items:center">
                                                                    <h5>Proposal Status:
                                                                        {{ $proposal->proposal_accepted }}
                                                                    </h5>
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
                                                                                        Accept Proposal:
                                                                                    </h6>


                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <select
                                                                                        class="form-control dropdown-item"
                                                                                        id="accept_proposal"
                                                                                        onchange="select_accept_proposal()"
                                                                                        name="accept_proposal">

                                                                                        <option selected disabled>

                                                                                            Proposal Accepted
                                                                                        </option>

                                                                                        <option id="Yes"
                                                                                            value="Yes">

                                                                                            Yes
                                                                                        </option>
                                                                                        <option id="No"
                                                                                            value="No">

                                                                                            No
                                                                                        </option>

                                                                                    </select>
                                                                                </div>
                                                                                <br>
                                                                            </div>

                                                                            <div class="form-group" id="counter_proposal"
                                                                                style="display:none;">
                                                                                <label> Receive Counter Proposal?</label>
                                                                                <select class="form-control dropdown-item"
                                                                                    id="counter_proposal_select"
                                                                                    name="counter_proposal">


                                                                                    <option id="No" value="No"
                                                                                        selected>

                                                                                        No
                                                                                    </option>
                                                                                    <option id="Yes" value="Yes">

                                                                                        Yes
                                                                                    </option>


                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
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
                        @endif



                        @if (isset($remarks->id))
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b> Agreement Finalized: </b>
                                        </div>
                                        <div class="col-md-6">
                                            {{ isset($remarks->agreement_finalized) ? $remarks->agreement_finalized : 'Not Found' }}

                                            <span><a href="#"
                                                    onclick="Agreement_Finalized('{{ $remarks->lead_id }}')"
                                                    data-toggle="modal" data-target=".agreementfinalized"><span
                                                        class="ti-write"></span></a></span>
                                        </div>

                                        {{-- edit modal --}}
                                        <div class="modal fade  agreementfinalized" tabindex="-1" role="dialog"
                                            aria-labelledby="myLargeModalLabel" aria-hidden="true"
                                            style="display: none;">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myLargeModalLabel">Agreement Finalized
                                                        </h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">×</button>
                                                    </div>

                                                    <div class="modal-body">

                                                        <div style="display:flex; justify-content:center;">
                                                            <form action="/agreementfinalized" method="post">
                                                                @csrf

                                                                <input type="hidden" name="id"
                                                                    value="{{ $remarks->lead_id }}">
                                                                <div
                                                                    style="display: flex; justify-content:center;align-items:center">
                                                                    <h5>Agreement Finalized:
                                                                        {{ $remarks->agreement_finalized }}
                                                                    </h5>
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
                                                                                        Finalize Agreement:
                                                                                    </h6>


                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <select
                                                                                        class="form-control dropdown-item"
                                                                                        id="agreement_finalized"
                                                                                        name="agreement_finalized">

                                                                                        <option selected disabled>

                                                                                            Select
                                                                                        </option>

                                                                                        <option id="Yes"
                                                                                            value="Yes">

                                                                                            Yes
                                                                                        </option>
                                                                                        <option id="No"
                                                                                            value="No">

                                                                                            No
                                                                                        </option>

                                                                                    </select>
                                                                                </div>
                                                                                <br>
                                                                            </div>
                                                                        </div>
                                                                    </div>
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
                            @if ($remarks->agreement_finalized == 'Yes')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <b> Business Onboarded: </b>
                                            </div>
                                            <div class="col-md-6">
                                                {{ isset($remarks->business_onboarded) ? $remarks->business_onboarded : 'Not Found' }}
                                                <span><a href="#"
                                                        onclick="Business_Onboarded('{{ $remarks->lead_id }}')"
                                                        data-toggle="modal" data-target=".businessonboarded"><span
                                                            class="ti-write"></span></a></span>
                                            </div>

                                            {{-- edit modal --}}
                                            <div class="modal fade  businessonboarded" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true"
                                                style="display: none;">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myLargeModalLabel">Business
                                                                Onboarded
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>

                                                        <div class="modal-body">

                                                            <div style="display:flex; justify-content:center;">
                                                                <form action="/businessonboarded" method="post">
                                                                    @csrf

                                                                    <input type="hidden" name="id"
                                                                        value="{{ $remarks->lead_id }}">
                                                                    <div
                                                                        style="display: flex; justify-content:center;align-items:center">
                                                                        <h5>Business Onboarded:
                                                                            {{ $remarks->business_onboarded }}
                                                                        </h5>
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
                                                                                            Business Onboarded:
                                                                                        </h6>


                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <select
                                                                                            class="form-control dropdown-item"
                                                                                            id="business_onboarded"
                                                                                            name="business_onboarded">

                                                                                            <option selected disabled>

                                                                                                Select
                                                                                            </option>

                                                                                            <option id="Yes"
                                                                                                value="Yes">

                                                                                                Yes
                                                                                            </option>
                                                                                            <option id="No"
                                                                                                value="No">

                                                                                                No
                                                                                            </option>

                                                                                        </select>
                                                                                    </div>
                                                                                    <br>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                            @endif
                        @endif

                    </div>
                </div>


                {{-- upto here --}}
            </div>
        </div>
    </div>





    {{-- Lost/Dormant Modal --}}
















    {{-- open requirements map default --}}
    {{-- <script>
        $(document).ready(function() {



            if ("{!! $openrequirements !!}" == "YES") {
                $('.nav-tabs a[href="#requirements"]').tab('show');

            }

        });
    </script> --}}

    {{-- open proposal default --}}
    {{-- <script>
        $(document).ready(function() {



            if ("{!! $openproposal !!}" == "YES") {
                $('.nav-tabs a[href="#businessproposal"]').tab('show');

            }

        });
    </script> --}}











@endsection
