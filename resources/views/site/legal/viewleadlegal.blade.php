@extends('layouts.mainLayout')

@section('content')

    {{-- {{ dd($viewlead) }} --}}

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
                            Legal Remarks</span></a> </li>

                <li class="nav-item"> <a class="nav-link" id="legalremarkstab" data-toggle="tab" href="#legalremarks"
                        role="tab"><span class="hidden-sm-up"><i class="ion-email"></i></span>
                        <span class="hidden-xs-down">Agreement Documents</span></a> </li>




            </ul>
            <!-- Tab panes -->

            {{-- Details Tab --}}
            <div class="tab-content tabcontent-border">
                <div class="tab-pane active" id="home" role="tabpanel">
                    <div class="pad">
                        <div class="box-header with-border">


                            <div class="" style="display: flex; justify-content:space-between">
                                <div class="">
                                    <h4 id="form_heading" class="box-title">Details</h4>
                                </div>
                                <div class="" style="display:flex;jutify-content: center;flex-direction:column">
                                    <h6 class="">
                                        Stage : {{ $viewlead->stage }}
                                    </h6>

                                    <h6 class="pull-right">
                                        Status : {{ $viewlead->Lead_Status }}
                                    </h6>
                                </div>
                            </div>
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
                                        {{ date('d-M-Y', strtotime($viewlead->First_Contact_Date)) }}
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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <b> Lead Description : </b>
                                    </div>

                                    <div class="col-md-6">
                                        {{ isset($viewlead->lead_description) ? $viewlead->lead_description : 'Not Found' }}

                                    </div>
                                </div>
                            </div>
                        </div>



                        @if (!empty($viewlead->requirements))
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b> Business Requirements: </b>
                                        </div>
                                        <div class="col-md-6">
                                            {{ isset($viewlead->requirements->business_requirement) ? $viewlead->requirements->business_requirement : 'Not Found' }}
                                        </div>

                                    </div>
                                </div>
                            </div>



                            @if (!empty($viewlead->requirements->upload_requirement_documents))
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <b> Requirement Document: </b>
                                            </div>
                                            <div class="col-md-6">
                                                <?php
                                    //$data->sla_document_link


                                    $ar = explode(".", $viewlead->requirements->upload_requirement_documents);

                                    $extensions = array('jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG');
                                    if (in_array($ar[1], $extensions)) {
                                        ?>

                                                <a href="/uploads/{{ $viewlead->requirements->upload_requirement_documents }}"
                                                    target="_blank">
                                                    <img style="width:50px;height:20px"
                                                        src="/uploads/{{ $viewlead->requirements->upload_requirement_documents }}"
                                                        alt='Legal Remarks Document'>

                                                </a>
                                                <?php
} else {
    ?>
                                                <a href="/uploads/{{ $viewlead->requirements->upload_requirement_documents }}"
                                                    target="_blank">

                                                    <img style="width:50px;height:20px" src="/assets/doc.svg"
                                                        alt='Legal Remarks Document'>

                                                </a>
                                                <?php
}
?>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endif


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b> LOB: </b>
                                            {{-- <b> Services: </b> --}}
                                        </div>
                                        <div class="col-md-6">

                                            {{ isset($viewlead->requirements->lob) ? $viewlead->requirements->lobmap->all_businesses : 'Not Found' }}
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
                                            {{ isset($viewlead->requirements->services) ? $viewlead->requirements->servicesMap->services : 'Not Found' }}
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
                                            {{ isset($viewlead->requirements->area) ? $viewlead->requirements->area : 'Not Found' }}
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
                                            {{ isset($viewlead->requirements->expected_closure_date) ? date('d-M-Y', strtotime($viewlead->requirements->expected_closure_date)) : 'Not Found' }}
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
                                            {{ isset($viewlead->requirements->location) ? $viewlead->requirements->location : 'Not Found' }}
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
                                            {{ isset($viewlead->requirements->business_type) ? $viewlead->requirements->business_type : 'Not Found' }}
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
                                            {{ isset($viewlead->requirements->expected_monthly_revenue) ? $viewlead->requirements->expected_monthly_revenue : 'Not Found' }}
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
                                            {{ isset($viewlead->requirements->expected_capex) ? $viewlead->requirements->expected_capex : 'Not Found' }}
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
                                            {{ isset($viewlead->requirements->ebdta_percentage) ? $viewlead->requirements->ebdta_percentage : 'Not Found' }}
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
                                            {{ isset($viewlead->requirements->ebdta_amount) ? $viewlead->requirements->ebdta_amount : 'Not Found' }}
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b>Share Business Proposal </b>
                                        </div>
                                        <div class="col-md-6">
                                            {{ isset($viewlead->requirements->share_business_proposal) ? $viewlead->requirements->share_business_proposal : 'Not Found' }}

                                            <span><a href="#"
                                                    onclick="Update_Proposal_Accepted('{{ $viewlead->requirements->lead_id }}')"
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
                                                                    value="{{ $viewlead->requirements->lead_id }}">
                                                                <div
                                                                    style="display: flex; justify-content:center;align-items:center">
                                                                    <h5>Business Proposal Shared:
                                                                        {{ $viewlead->requirements->share_business_proposal }}
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


                        {{-- {{ dd(!empty($viewlead->proposals)) }} --}}
                        @if (!empty($viewlead->proposals))
                            <hr>
                            @foreach ($viewlead->proposals as $p)
                                @if ($loop->first)
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <b> Proposal Documents: </b>
                                                </div>
                                                <div class="col-md-6">
                                                    <?php
//$data->sla_document_link
$ar = explode(".", $p->proposal_documents);

$extensions = array('jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG');
if (in_array($ar[1], $extensions)) {
    ?>
                                                    <a href="/uploads/{{ $p->proposal_documents }}" target="_blank">
                                                        <img style="width:50px;height:20px"
                                                            src="/uploads/{{ $p->proposal_documents }}"
                                                            alt='Legal Remarks Document'>

                                                    </a>
                                                    <?php
} else {
    ?>
                                                    <a href="/uploads/{{ $p->proposal_documents }}" target="_blank">

                                                        <img style="width:50px;height:20px" src="/assets/doc.svg"
                                                            alt='Legal Remarks Document'>

                                                    </a>
                                                    <?php
}
?>

                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    @if (isset($p->reason_for_changing_proposal))
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <b> Reason For Changed Proposal: </b>
                                                    </div>
                                                    <div class="col-md-6">
                                                        {{ isset($p->reason_for_changing_proposal) ? $p->reason_for_changing_proposal : 'Not Found' }}
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <b> Proposal Accepted: </b>
                                                </div>

                                                <div class="col-md-6">

                                                    {{ isset($p->proposal_accepted) ? $p->proposal_accepted : 'Not Found' }}

                                                    <span><a href="#"
                                                            onclick="Proposal_Accepted('{{ $p->lead_id }}')"
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
                                                                <h4 class="modal-title" id="myLargeModalLabel">Proposal
                                                                    Accepted
                                                                </h4>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-hidden="true">×</button>
                                                            </div>

                                                            <div class="modal-body">

                                                                <div style="display:flex; justify-content:center;">
                                                                    <form action="/proposal_accepted" method="post">
                                                                        @csrf

                                                                        <input type="hidden" name="id"
                                                                            value="{{ $p->lead_id }}">
                                                                        <div
                                                                            style="display: flex; justify-content:center;align-items:center">
                                                                            <h5>Proposal Status:
                                                                                {{ $p->proposal_accepted }}
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


                                                                                    <div class="form-group row"
                                                                                        id="counter_proposal"
                                                                                        style="display:none;">



                                                                                        <div class="d-flex justify-contents-center"
                                                                                            style="align-items: baseline">
                                                                                            <div class="col-md-6">
                                                                                                <h6> Receive Counter
                                                                                                    Proposal?</h6>
                                                                                            </div>
                                                                                            <div class="col-md-6">
                                                                                                <select
                                                                                                    class="form-control dropdown-item"
                                                                                                    id="counter_proposal_select"
                                                                                                    name="counter_proposal">


                                                                                                    <option id="No"
                                                                                                        value="No"
                                                                                                        selected>

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
                            @endforeach
                        @endif


                        {{-- Legal Remarks --}}

                        @if (!empty($viewlead->legalRemarks))
                            <hr>
                            <div class=" table-responsive">


                                <table id="ddd" class="table">
                                    <thead style="border-bottom: hidden;">
                                        <tr>

                                            <th>Document Type</th>
                                            <th>BD Remarks</th>
                                            <th>Legal Remarks</th>




                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($remarks as $p) --}}
                                        @foreach ($viewlead->legalRemarks as $p)
                                            <tr>
                                                <td style="border-bottom: hidden;">{{ $p->document_type }}</td>
                                                <td style="border-bottom: hidden;">

                                                    <?php
        //$data->sla_document_link
        $ar = explode(".", $p->document_link);
        
        $extensions = array('jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG');
        if (in_array($ar[1], $extensions)) {
            ?>
                                                    <a href="/uploads/{{ $p->document_link }}" target="_blank">
                                                        <img style="width:44px;height:26px"
                                                            src="/uploads/{{ $p->document_link }}"
                                                            alt='Legal Remarks Document'>
                                                    </a>
                                                    <?php
        } else {
            ?>
                                                    <a href="/uploads/{{ $p->document_link }}" target="_blank">

                                                        <img style="width:44px;height:26px" src="/assets/doc.svg"
                                                            alt='Legal Remarks Document'>

                                                    </a>
                                                    <?php
        }
        ?>

                                                    <br>
                                                    @if (isset($p->bd_submitted_time))
                                                        <span>Remarks: {{ $p->remarks_for_legal }} </span>
                                                    @endif
                                                </td>

                                                <td style="border-bottom: hidden;">
                                                    @if (!isset($p->legal_document_link))
                                                    @else
                                                        <?php            
                                                 //$data->sla_document_link
        $ar = explode(".", $p->legal_document_link);
        
        $extensions = array('jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG');
        if (in_array($ar[1], $extensions)) {
            ?>
                                                        <a href="/uploads/{{ $p->legal_document_link }}" target="_blank">
                                                            <img style="width:44px;height:26px"
                                                                src="/uploads/{{ $p->legal_document_link }}"
                                                                alt='Legal Remarks Document'>
                                                        </a>
                                                        <?php
        } else {
            ?>
                                                        <a href="/uploads/{{ $p->legal_document_link }}" target="_blank">

                                                            <img style="width:44px;height:26px" src="/assets/doc.svg"
                                                                alt='Legal Remarks Document'>

                                                        </a>
                                                        <?php
        }
        ?>

                                                        <br>
                                                        @if (isset($p->legal_submitted_time))
                                                            <span>Remarks: {{ $p->remarks_by_legal }} </span>
                                                        @endif
                                                    @endif

                                                </td>

                                            </tr>
                                        @endforeach
                                        {{-- @endforeach --}}
                                    </tbody>

                                </table>
                            </div>
                        @endif
                        {{-- Legal Remarks --}}










                        {{-- Legal Executed Agreement --}}

                        @if (in_array($viewlead->stage, ['Agreement', 'Business Onboarded', 'Business Not Onboarded']))
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b> Agreement Finalized: </b>
                                        </div>
                                        <div class="col-md-6">
                                            {{ isset($viewlead->agreement_finalized) ? $viewlead->agreement_finalized : 'Not Found' }}

                                            <span><a href="#" onclick="Agreement_Finalized('{{ $viewlead->id }}')"
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
                                                        <h4 class="modal-title" id="myLargeModalLabel">Agreement
                                                            Finalized
                                                        </h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">×</button>
                                                    </div>

                                                    <div class="modal-body">

                                                        <div style="display:flex; justify-content:center;">
                                                            <form action="/agreementfinalized" method="post">
                                                                @csrf

                                                                <input type="hidden" name="id"
                                                                    value="{{ $viewlead->id }}">
                                                                <div
                                                                    style="display: flex; justify-content:center;align-items:center">
                                                                    <h5>Agreement Finalized:
                                                                        {{ $viewlead->agreement_finalized }}
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
                        @endif

                        @if (!empty($viewlead->legalExecuted))
                            @if (isset($viewlead->legal_user->name))
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <b> Agreement Finalized By: </b>
                                            </div>
                                            <div class="col-md-6">
                                                {{ $viewlead->legal_user->name }}

                                            </div>


                                        </div>
                                    </div>
                                </div>
                            @endif
                            @foreach ($viewlead->legalExecuted as $p)
                                @if ($loop->last)
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <b> Agreement Remarks: </b>
                                                </div>
                                                <div class="col-md-6">
                                                    {{ isset($p->remarks) ? $p->remarks : 'Not Found' }}

                                                </div>


                                            </div>
                                        </div>
                                    </div>




                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <b> Start Date: </b>
                                                </div>
                                                <div class="col-md-6">
                                                    {{ isset($p->start_date) ? $p->start_date : 'Not Found' }}

                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <b> Expiry Date: </b>
                                                </div>
                                                <div class="col-md-6">
                                                    {{ isset($p->expiry_date) ? $p->expiry_date : 'Not Found' }}

                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                    @if (isset($p->document_upload))
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <b> Document Preview: </b>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php
//$data->sla_document_link
$ar = explode(".", $p->document_upload);

$extensions = array('jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG');
if (in_array($ar[1], $extensions)) {
    ?>
                                                        <a href="/uploads/{{ $p->document_upload }}" target="_blank">
                                                            <img style="width:50px;height:20px"
                                                                src="/uploads/{{ $p->document_upload }}"
                                                                alt='Legal Remarks Document'>

                                                        </a>
                                                        <?php
} else {
    ?>
                                                        <a href="/uploads/{{ $p->document_upload }}" target="_blank">

                                                            <img style="width:50px;height:20px" src="/assets/doc.svg"
                                                                alt='Legal Remarks Document'>

                                                        </a>
                                                        <?php
}
?>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endif
                            @endforeach
                        @endif


                        {{-- Legal Executed Agreement --}}


                        @if ($viewlead->Lead_Status == 'Finance Verified')
                            <hr>
                            @if (isset($viewlead->finance_user->name))
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <b> Finance Verified By: </b>
                                            </div>
                                            <div class="col-md-6">
                                                {{ $viewlead->finance_user->name }}

                                            </div>


                                        </div>
                                    </div>
                                </div>
                            @endif






                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b> Business Onboarded: </b>
                                        </div>
                                        <div class="col-md-6">
                                            {{ isset($viewlead->business_onboarded) ? $viewlead->business_onboarded : 'Not Found' }}
                                            <span><a href="#" onclick="Business_Onboarded('{{ $viewlead->id }}')"
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
                                                                    value="{{ $viewlead->id }}">
                                                                <div
                                                                    style="display: flex; justify-content:center;align-items:center">
                                                                    <h5>Business Onboarded:
                                                                        {{ $viewlead->business_onboarded }}
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


                    </div>
                </div>


                {{-- Legal Remarks --}}
                <div class="tab-pane pad" id="timeline" role="tabpanel">

                    {{-- <div class="box box-solid"> --}}
                    <div class=" box-header with-border">
                        <h5 class="box-title">Remarks For BD Team</h5>
                    </div>


                    <div class="box-body">
                        <div class="table-responsive">


                            <table id="example"
                                class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                <thead>
                                    <tr>

                                        <th>Document Type</th>
                                        <th>BD Remarks</th>
                                        <th>Legal Remarks</th>




                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($remarks as $p) --}}
                                    @foreach ($viewlead->legalRemarks as $p)
                                        <tr>
                                            <td>{{ $p->document_type }}</td>
                                            <td>

                                                <?php
    //$data->sla_document_link
    $ar = explode(".", $p->document_link);
    
    $extensions = array('jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG');
    if (in_array($ar[1], $extensions)) {
        ?>
                                                <img style="width:50px;height:50px"
                                                    src="/uploads/{{ $p->document_link }}" alt='Legal Remarks Document'>

                                                <?php
    } else {
        ?>
                                                <a href="/uploads/{{ $p->document_link }}" target="_blank">

                                                    <img style="width:50px;height:50px" src="/assets/doc.svg"
                                                        alt='Legal Remarks Document'>

                                                </a>
                                                <?php
    }
    ?>

                                                <br>
                                                @if (isset($p->bd_submitted_time))
                                                    <span>Uploaded Time:
                                                        {{ date('d M, Y H:i', strtotime($p->bd_submitted_time)) }}
                                                    </span>
                                                    <br>
                                                    <span>Remarks: {{ $p->remarks_for_legal }} </span>
                                                @endif
                                            </td>

                                            <td>
                                                @if (!isset($p->legal_document_link))
                                                    <form method="post" id="executedrelevant{{ $p->id }}"
                                                        name="executedrelevant{{ $p->id }}"
                                                        action="/executedrelevant" enctype="multipart/form-data"
                                                        class="form-horizontal form-element">
                                                        @csrf


                                                        <input type="hidden" name="id" id="dd{{ $p->id }}"
                                                            value="{{ $p->id }}">
                                                        <input type="hidden" name="lead_id" id="dd{{ $p->id }}"
                                                            value="{{ $viewlead->id }}">

                                                        <div class="row my-2">


                                                            <div class="col-md-4">

                                                                <h6>Revised Document :</h6>

                                                            </div>
                                                            <div class="col-md-8">
                                                                <input id="nda{{ $p->id }}" type="file"
                                                                    class="form-control " name="legal_document_link">

                                                            </div>


                                                        </div>

                                                        <div class="row my-2">



                                                            <div class="col-md-4">

                                                                <h6>Remarks :</h6>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input id="remarks{{ $p->id }}" type="text"
                                                                    class="form-control " name="remarks_by_legal"
                                                                    required>

                                                            </div>


                                                        </div>







                                                        <button type="submit"
                                                            class="btn btn-success btn-sm pull-right my-2"
                                                            id="save_requirements{{ $p->id }}">
                                                            Save
                                                        </button>





                                                    </form>
                                                @else
                                                    <?php            
                                             //$data->sla_document_link
    $ar = explode(".", $p->legal_document_link);
    
    $extensions = array('jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG');
    if (in_array($ar[1], $extensions)) {
        ?>
                                                    <img style="width:50px;height:50px"
                                                        src="/uploads/{{ $p->legal_document_link }}"
                                                        alt='Legal Remarks Document'>

                                                    <?php
    } else {
        ?>
                                                    <a href="/uploads/{{ $p->legal_document_link }}" target="_blank">

                                                        <img style="width:50px;height:50px" src="/assets/doc.svg"
                                                            alt='Legal Remarks Document'>

                                                    </a>
                                                    <?php
    }
    ?>

                                                    <br>
                                                    @if (isset($p->legal_submitted_time))
                                                        <span>Uploaded Time:
                                                            {{ date('d M, Y H:i', strtotime($p->legal_submitted_time)) }}
                                                        </span>
                                                        <br>
                                                        <span>Remarks: {{ $p->remarks_by_legal }} </span>
                                                    @endif
                                                @endif



















                                            </td>

                                        </tr>
                                    @endforeach
                                    {{-- @endforeach --}}
                                </tbody>

                            </table>
                        </div>
                    </div>
                    {{-- </div> --}}
                    <br>
                    <br>



                </div>









                {{-- Lead Executed Agreement tab --}}
                <div class="tab-pane pad" id="legalremarks" role="tabpanel">


                    <div id="executedagreement" class="">
                        <div class="box-header with-border">
                            <h4 id="form_heading" class="box-title">Executed Agreement Documents</h4>
                        </div>

                        <div>
                            <!-- /.card-header -->
                            <!-- form start -->



                            <form method="post" id="executedagreementdoc" name="executedagreementdoc"
                                action="/executedagreementdoc" enctype="multipart/form-data"
                                class="form-horizontal form-element">
                                @csrf


                                <input type="hidden" name="id" id="lead_id" value="{{ $viewlead->id }}">
                                {{-- <input type="hidden" name="legal_id" id="legal_user_id"
                                    value="{{ $viewlead->legal_user->id }}"> --}}


                                <div class="box-body">

                                    {{-- first two --}}
                                    <div class="row">
                                        <div class="form-group col-md-6">

                                            <div class="row">
                                                <div class="col-4">

                                                    <label for="agreement_remarks">Agreement Remarks</label>
                                                </div>
                                                <div class="col-8">
                                                    <input id="agreement_remarks" type="text" class="form-control "
                                                        name="agreement_remarks" required>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-4">

                                                    <label for="executed_agreement">Upload Executed Agreement</label>
                                                </div>
                                                <div class="col-8">


                                                    <input name="executed_agreement" id="executedagreement"
                                                        type="file" class="form-control">

                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    {{-- first two upto here --}}

                                    {{-- second two --}}

                                    <div class="row">
                                        <div class="form-group col-md-6">

                                            <div class="row">
                                                <div class="col-4">

                                                    <label for="start_date">Agreement Start Date</label>
                                                </div>
                                                <div class="col-8">
                                                    <input id="start_date" type="date" class="form-control "
                                                        name="start_date">

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-4">

                                                    <label for="expiry_date">Agreement Expiry Date</label>
                                                </div>
                                                <div class="col-8">
                                                    <input id="expiry_date" type="date" class="form-control "
                                                        name="expiry_date">

                                                </div>
                                            </div>
                                        </div>
                                    </div>










                                    {{-- second two upto here --}}

                                    <div class="text-right">

                                        <button type="submit" class="btn btn-success btn-md " id="agreement"
                                            tabindex="9">
                                            Save
                                        </button>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>


                    {{-- Remarks Table --}}
                    {{-- box header --}}
                    {{-- Remarks Table --}}

                </div>

                {{-- Finance Verification --}}






            </div>

        </div>
    </div>





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

    <script>
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1; //January is 0!
        var yyyy = today.getFullYear();



        if (dd < 10) {
            dd = '0' + dd;
        }

        if (mm < 10) {
            mm = '0' + mm;
        }

        enddate = today = yyyy + '-' + mm + '-' + dd;

        document.getElementById("start_date").setAttribute("min", today);

        document.getElementById("expiry_date").setAttribute("min", enddate);



        // function changeenddate() {
        // var X = $("#duration").val(); //or whatever offset


        var sdate = $("#start_date").val();

        var date = new Date(sdate);



        var d = date.getDate();
        //  alert(d);
        date.setMonth(date.getMonth());

        if (date.getDate() !== d) {
            date.setDate(0);
        }
        //alert(date);


        var today = new Date(date);
        var dd = today.getDate() - 1; //Due date is
        var mm = today.getMonth() + 1; //January is 0!
        var yyyy = today.getFullYear();

        if (dd < 10) {
            dd = '0' + dd;
        }

        if (mm < 10) {
            mm = '0' + mm;
        }

        var enddate = today = yyyy + '-' + mm + '-' + dd;






        $("#expiry_date").val(enddate);

        // }
        $("#start_date").focusout(function() {
            $("#expiry_date").val("");






            document.getElementById("expiry_date").setAttribute("min", $("#start_date").val());

            changeenddate();

        });
    </script>



@endsection
