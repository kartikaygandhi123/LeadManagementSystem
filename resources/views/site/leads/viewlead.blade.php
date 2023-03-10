@extends('layouts.mainLayout')

@section('content')
    <div class="box box-default">
        <div class="box-body">
            <!-- Nav tabs -->

            <ul class="nav nav-tabs" role="tablist">

                @if (in_array($viewlead->stage, [
                    'Lead',
                    'Requirements Mapping',
                    'Proposal',
                    'Negotiation',
                    'Agreement',
                    'Business Onboarded',
                    'Business Not Onboarded',
                    'Lost',
                    'Dormant',
                ]) && !in_array($viewlead->Lead_Status, []))
                    <li class="nav-item"> <a class="nav-link active" id="detailstab" data-toggle="tab" href="#home"
                            role="tab"><span class="hidden-sm-up"><i class="ion-home"></i></span> <span
                                class="hidden-xs-down">Details</span></a>
                    </li>
                @endif


                @if (in_array($viewlead->stage, [
                    'Lead',
                    'Requirements Mapping',
                    'Proposal',
                    'Negotiation',
                    'Agreement',
                    'Business Onboarded',
                    'Business Not Onboarded',
                    'Lost',
                    'Dormant',
                ]) && !in_array($viewlead->Lead_Status, []))
                    <li class="nav-item"> <a class="nav-link" id="timelinetab" data-toggle="tab" href="#timeline"
                            role="tab"><span class="hidden-sm-up"><i class="ion-person"></i></span> <span
                                class="hidden-xs-down">
                                Timeline</span></a> </li>
                @endif

                @if (in_array($viewlead->stage, [
                    'Lead',
                    'Requirements Mapping',
                    'Proposal',
                    'Negotiation',
                    'Agreement',
                    'Business Onboarded',
                    'Business Not Onboarded',
                    'Lost',
                    'Dormant',
                ]) && !in_array($viewlead->Lead_Status, []))
                    <li class="nav-item"> <a class="nav-link" id="followuptab" data-toggle="tab" href="#followups"
                            role="tab"><span class="hidden-sm-up"><i class="ion-email"></i></span> <span
                                class="hidden-xs-down">Followup</span></a> </li>
                @endif

                @if (in_array($viewlead->stage, [
                    'Lead',
                    'Requirements Mapping',
                    'Proposal',
                    'Negotiation',
                    'Agreement',
                    'Business Onboarded',
                    'Business Not Onboarded',
                ]) && !in_array($viewlead->Lead_Status, ['Prospect', 'Not Qualified']))
                    <li class="nav-item"> <a class="nav-link" id="requirementstab" data-toggle="tab" href="#requirements"
                            role="tab"><span class="hidden-sm-up"><i class="ion-email"></i></span> <span
                                class="hidden-xs-down">Requirements Mapping</span></a> </li>
                @endif

                @if (in_array($viewlead->stage, [
                    'Requirements Mapping',
                    'Proposal',
                    'Negotiation',
                    'Agreement',
                    'Business Onboarded',
                    'Business Not Onboarded',
                ]) && !in_array($viewlead->Lead_Status, ['Prospect', 'Not Qualified', 'Proposal Not Accepted', 'Proposal Not Shared']))
                    <li class="nav-item"> <a class="nav-link" id="businessproposaltab" data-toggle="tab"
                            href="#businessproposal" role="tab"><span class="hidden-sm-up"><i
                                    class="ion-email"></i></span>
                            <span class="hidden-xs-down">Proposal Form</span></a> </li>
                @endif

                @if (in_array($viewlead->stage, [
                    'Requirements Mapping',
                    'Proposal',
                    'Agreement',
                    'Business Onboarded',
                    'Business Not Onboarded',
                ]) &&
                    !in_array($viewlead->Lead_Status, [
                        'Prospect',
                        'Qualified',
                        'Not Qualified',
                        'Proposal To Be Shared',
                        'Proposal Not Shared',
                        'Proposal Not Accepted',
                        'Proposal Submitted',
                    ]))
                    <li class="nav-item"> <a class="nav-link" id="legalremarkstab" data-toggle="tab" href="#legalremarks"
                            role="tab"><span class="hidden-sm-up"><i class="ion-email"></i></span>
                            <span class="hidden-xs-down">Legal Remarks</span></a> </li>
                @endif

                @if (in_array($viewlead->stage, [
                    'Requirements Mapping',
                    'Proposal',
                    'Negotiation',
                    'Agreement',
                    'Business Onboarded',
                    'Business Not Onboarded',
                ]) && !in_array($viewlead->Lead_Status, []))
                    <li class="nav-item"> <a class="nav-link" id="financetab" data-toggle="tab" href="#finance"
                            role="tab"><span class="hidden-sm-up"><i class="ion-email"></i></span>
                            <span class="hidden-xs-down">Customer Details</span></a> </li>
                @endif
            </ul>
            <!-- Tab panes -->
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
                                        {{ $viewlead->Contact_Number ? $viewlead->Contact_Number : ' - ' }}
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

                                        {{ $viewlead->Email ? $viewlead->Email : ' - ' }}
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
                                                        aria-hidden="true">??</button>
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

                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <b> Lead Status : </b>
                                    </div>

                                    <div class="col-md-6">

                                        {{ $viewlead->Lead_Status }}
                                        <span
                                            style="{{ $viewlead->stage == 'Lead' ? 'display:inline-block' : 'display:none' }}"><a
                                                href="#" onclick="Edit_Lead('{{ $viewlead->id }}')"
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
                                                        aria-hidden="true">??</button>
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

                                                                    <option id="Project_on_Hold" value="Project on Hold">

                                                                        Project on Hold
                                                                    </option>
                                                                    <option id="Poor_Followup" value="Poor Followup">

                                                                        Poor Followup
                                                                    </option>
                                                                    <option id="Offering_not_available"
                                                                        value="Offering not available">

                                                                        Offering not available
                                                                    </option>
                                                                    <option id="Not_in_Our_Target_set"
                                                                        value="Not in Our Target set">

                                                                        Not in Our Target set
                                                                    </option>
                                                                    <option id="Others" value="Others">

                                                                        Others
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

                            {{-- {{ dd($viewlead->requirements->lobmap->all_businesses) }} --}}
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
                                            <b>Business Proposal Shared? </b>
                                        </div>
                                        <div class="col-md-6">
                                            {{ isset($viewlead->requirements->share_business_proposal) ? $viewlead->requirements->share_business_proposal : 'Not Found' }}

                                            <span
                                                style="{{ $viewlead->stage == 'Requirements Mapping' ? 'display:inline-block' : 'display:none' }}"><a
                                                    href="#"
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
                                                            aria-hidden="true">??</button>
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


                                    @if (isset($p->proposal_remarks))
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <b> Remarks: </b>
                                                    </div>
                                                    <div class="col-md-6">
                                                        {{ isset($p->proposal_remarks) ? $p->proposal_remarks : 'Not Found' }}
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endif


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

                                                    <span
                                                        style="{{ $viewlead->stage == 'Proposal' ? 'display:inline-block' : 'display:none' }}"><a
                                                            href="#"
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
                                                                    data-dismiss="modal" aria-hidden="true">??</button>
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

                                            <span
                                                style="{{ $viewlead->stage == 'Agreement' && $viewlead->Lead_Status != 'Agreement Finalized' && $viewlead->Lead_Status != 'Finance Verified' ? 'display:inline-block' : 'display:none' }}"><a
                                                    href="#" onclick="Agreement_Finalized('{{ $viewlead->id }}')"
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
                                                            aria-hidden="true">??</button>
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
                                                            aria-hidden="true">??</button>
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



                {{-- Timeline Tab --}}
                <div class="tab-pane pad" id="timeline" role="tabpanel">



                    {{-- Timeline Table --}}
                    <div class="box-header with-border">
                        <div class="" style="display: flex; justify-content:space-between">
                            <div class="">
                                <h4 id="form_heading" class="box-title">Timeline</h4>
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
                    <!-- /.box-header -->
                    <div class="box-body">

                        <?php //dd(count($leadlogdata->toArray()));
                        $ll = $leadlogdata->toArray();
                        //dd($ll);
                        $c = (int) count($ll);
                        
                        //dd($c);
                        
                        ?>




                        <div class="">
                            <div class="container">
                                <?php       
                   $j=1;
                            for($i=0; $i<$c; $i++){
                              // dd($ll[$i]['lead_status']);
                              // dd($ll[$i]['lead_owner']['name']);
  ?>



                                <?php if($i>0){ ?>
                                <!--path between 2-3-->
                                <div class="row timelinenew">
                                    <div class="col-2">
                                        <div class="corner right-bottom"></div>
                                    </div>
                                    <div class="col-8">
                                        <hr />
                                    </div>
                                    <div class="col-2">
                                        <div class="corner top-left"></div>
                                    </div>
                                </div>


                                <?php } ?>
                                <!--first section-->
                                <div class="row align-items-center how-it-works d-flex">
                                    <div
                                        class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
                                        <div class="circle font-weight-bold">{{ $j }}</div>
                                    </div>
                                    <div class="col-6">
                                        <h5>Stage : {{ $ll[$i]['lead_stage'] }}</h5>
                                        <h6>Status :{{ $ll[$i]['lead_status'] }}</h6>
                                        <h6>Lead Owner :{{ $ll[$i]['lead_owner']['name'] }}</h6>
                                        <h6>Lead Assigned To :{{ $ll[$i]['lead_assigned']['name'] }}</h6>
                                        <h6>Created At: {{ date('d-M-Y h:i', strtotime($ll[$i]['created_at'])) }}</h6>
                                        <p>Message : {{ $ll[$i]['message'] }}</p>

                                    </div>
                                </div>

                                <!--second section-->





                                <?php $i++;
                                $j++;
                                if ($i == $c) {
                                    break;
                                } ?>
                                <!--path between 1-2-->
                                <div class="row timelinenew">
                                    <div class="col-2">
                                        <div class="corner top-right"></div>
                                    </div>
                                    <div class="col-8">
                                        <hr />
                                    </div>
                                    <div class="col-2">
                                        <div class="corner left-bottom"></div>
                                    </div>
                                </div>
                                <div class="row align-items-center justify-content-end how-it-works d-flex">
                                    <div class="col-6 text-right">
                                        <h5>Stage : {{ $ll[$i]['lead_stage'] }}</h5>
                                        <h6>Status :{{ $ll[$i]['lead_status'] }}</h6>
                                        <h6>Lead Owner :{{ $ll[$i]['lead_owner']['name'] }}</h6>
                                        <h6>Lead Assigned To :{{ $ll[$i]['lead_assigned']['name'] }}</h6>
                                        <h6>Created At: {{ date('d-M-Y h:i', strtotime($ll[$i]['created_at'])) }}</h6>
                                        <p>Message: {{ $ll[$i]['message'] }}</p>
                                    </div>
                                    <div
                                        class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
                                        <div class="circle font-weight-bold">{{ $j }}</div>
                                    </div>
                                </div>








                                <?php
   $j++;
}

?>
                            </div>
                        </div>




































                    </div>
                </div>




                {{-- Followup tab --}}
                <div class="tab-pane pad" id="followups" role="tabpanel">



                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <div class="" style="display: flex; justify-content:space-between">
                                <div class="">
                                    <h4 id="form_heading" class="box-title">Follow Up</h4>
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

                        <div>
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

                                            <label for="example-text-input"
                                                class="col-sm-5 col-form-label">Remarks:</label>
                                            <div class="col-sm-10">

                                                <textarea class="form-control" type="text" value="" name="remarks" id="Remarks" required></textarea>
                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <label for="example-date-input" class="col-sm-5 col-form-label">Follow-Up
                                                Date :</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="datetime-local"
                                                    value="<?php echo date('Y-m-d H:i'); ?>" name="date" id="Follow_Up_Date">
                                            </div>
                                        </div>



                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary btn-sm pull-right">Schedule
                                            Followup</button>


                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    {{-- <hr> --}}
                    <br>
                    <br>

                    {{-- Followup Data Table --}}

                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h5 class="box-title">Scheduled Followups</h5>

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
                                                            onclick="showdate({{ $followup->id }})">Followup
                                                            Done?</Button>
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

                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- /.box-body -->

                </div>


                {{-- Requirements Tab --}}
                <div class="tab-pane pad" id="requirements" role="tabpanel">


                    <div id="newcustomerform" class="">
                        <div class="box-header with-border">
                            <div class="" style="display: flex; justify-content:space-between">
                                <div class="">
                                    <h4 id="form_heading" class="box-title">Requirements Mapping</h4>
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
                        <div>
                            <!-- /.card-header -->
                            <!-- form start -->



                            <form method="post" id="requirements" enctype="multipart/form-data" name="requirements"
                                action="/saverequirementsmap" class="form-horizontal form-element">
                                @csrf


                                <input type="hidden" name="id" id="lead_id" value="{{ $viewlead->id }}">

                                <div class="box-body">

                                    {{-- first two --}}
                                    <div class="row">
                                        <div class="form-group col-md-6">

                                            <div class="row">
                                                <div class="col-4">

                                                    <label for="Business_Requirements">Business Requirements</label>
                                                </div>
                                                <div class="col-8">
                                                    <input id="Business_Requirements" type="text"
                                                        class="form-control " name="business_requirement" required>

                                                </div>
                                            </div>
                                        </div>




                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-4">

                                                    <label for="Upload_Documents">Upload Documents<span
                                                            class="danger">*</span></label>
                                                </div>
                                                <div class="col-5">
                                                    <input id="Upload_Documents" type="file" class="form-control"
                                                        name="upload_requirement_documents" {{-- {{ empty($viewlead->requirements->upload_requirement_documents) ? 'required' : '' }} --}}>




                                                </div>

                                                <div class="col-3">

                                                    <span> <?php
                                                        if (!empty($viewlead->requirements->upload_requirement_documents)) {
                                                        
                                                            //$data->sla_document_link
                                                            $ar = explode(".", $viewlead->requirements->upload_requirement_documents);
                                                        
                                                            $extensions = array('jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG');
                                                            if (in_array($ar[1], $extensions)) {
                                                                ?>
                                                        <a href="/uploads/{{ $viewlead->requirements->upload_requirement_documents }}"
                                                            target="_blank">
                                                            <img style="width:37px;height:37px;"
                                                                src="/uploads/{{ $viewlead->requirements->upload_requirement_documents }}"
                                                                alt='SLA Document'>

                                                        </a>Preview

                                                        <?php
                                                            } else {
                                                                ?>
                                                        <a href="/uploads/{{ $viewlead->requirements->upload_requirement_documents }}"
                                                            target="_blank">

                                                            <img style="width:37px;height:37px" src="/assets/doc.svg"
                                                                alt='SLA Document'>

                                                        </a>
                                                        <?php
                                                            }
                                                        }
                                                        ?></span>

                                                </div>
                                            </div>
                                        </div>

                                    </div>




                                    {{-- first two upto here --}}



                                    {{-- 2nd row --}}

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-4">
                                                    <label for="LOB">LOB<span class="danger">*</span></label>
                                                </div>
                                                <div class="col-8">
                                                    <select id="LOB_select" name="lob" class="form-control">
                                                        @foreach ($lobs as $k => $v)
                                                            <option value="{{ $k }}">{{ $v }}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </div>
                                            {{-- <div id="area_id" class="form-group col-md-6" style="display: none"> --}}
                                            <div id="area_id" class="row" style="display: none;margin-top:19px">
                                                <div class="col-4">
                                                    <label for="Area" class="control-label">Area (Sq Ft.)<span
                                                            class="danger">*</span></label>
                                                </div>
                                                <div class="col-8">
                                                    <input class="form-control" type="number" value=""
                                                        id="Area" name="area">
                                                </div>
                                            </div>
                                            {{-- </div> --}}



                                        </div>

                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-4">
                                                    <label for="Services">Services<span class="danger">*</span></label>
                                                </div>
                                                <div class="col-8">
                                                    <select id="Services_select" name="services" class="form-control">

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
                                                <div class="col-4">
                                                    <label for="example-date-input">Date<span
                                                            class="danger">*</span></label>
                                                </div>
                                                <div class="col-8">
                                                    <input class="form-control" name="expected_closure_date"
                                                        type="date" value="<?php echo date('Y-m-d'); ?>"
                                                        id="example-date-input1">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-4">
                                                    <label for="Location">Location<span class="danger">*</span></label>
                                                </div>
                                                <div class="col-8">
                                                    <select id="Locationlistselect1" name="location"
                                                        class="form-control">
                                                        @foreach ($cities as $city)
                                                            <option value="{{ $city->name }}">
                                                                {{ $city->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>







                                    </div>

                                    {{-- 4th row --}}

                                    <div class="row">



                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-4">
                                                    <label for="Business">Agreement Duration<span
                                                            class="danger">*</span></label>
                                                </div>
                                                <div class="col-8">
                                                    <select id="Business_Type" name="business_type" class="form-control">
                                                        <option selected disabled>Select Business</option>
                                                        <option value="One Time">One Time</option>
                                                        <option value="6 Months">6 Months</option>
                                                        <option value="7 Months">7 Months</option>
                                                        <option value="8 Months">8 Months</option>
                                                        <option value="9 Months">9 Months</option>
                                                        <option value="10 Months">10 Months</option>
                                                        <option value="11 Months">11 Months</option>
                                                        <option value="1 Year">1 Year</option>
                                                        <option value="2 Years">2 Year</option>
                                                        <option value="3 Years">3 Year</option>


                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-4">
                                                    <label for="Expected_Monthy_Revenue">Expected Monthy Revenue<span
                                                            class="danger">*</span></label>
                                                </div>
                                                <div class="col-8">
                                                    <input class="form-control" name="expected_monthly_revenue"
                                                        type="number" value="" id="Expected_Monthy_Revenue">
                                                </div>
                                            </div>
                                        </div>





                                    </div>

                                    {{-- 5th row --}}

                                    <div class="row">



                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-4">
                                                    <label for="Expected_Capex">Expected Capex<span
                                                            class="danger">*</span></label>
                                                </div>
                                                <div class="col-8">
                                                    <input class="form-control" type="number" value=""
                                                        name="expected_capex" id="Expected_Capex">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-4">
                                                    <label for="EBDTA%">EBITDA%<span class="danger">*</span></label>
                                                </div>
                                                <div class="col-8">
                                                    <input class="form-control" type="number" value=""
                                                        name="ebdta_percentage" value="ebdta_percentage" id="EBDTA">
                                                </div>
                                            </div>
                                        </div>



                                    </div>



                                    {{-- 6th row --}}

                                    <div class="row">



                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-4">
                                                    <label for="EBDTA_Amount">EBITDA Amount<span
                                                            class="danger">*</span></label>
                                                </div>
                                                <div class="col-8">
                                                    <input class="form-control" type="number" value=""
                                                        step="any" name="ebdta_amount" id="ebdta_amount">
                                                </div>
                                            </div>
                                        </div>











                                    </div>

                                    <br>
                                    <br>


                                    {{-- <div class="pull-left"> --}}
                                    <div class="row" id="require">

                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class=" col-4">
                                                    <label for="map_requirements">Business Proposal Shared ?</label>
                                                </div>

                                                <div class="col-2">
                                                    <select class="form-control" id="share_business_proposal"
                                                        name="share_business_proposal" required="">

                                                        <option id="No" value="No" selected>

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
                                    {{-- </div> --}}







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

                {{-- Proposal Form Tab --}}
                <div class="tab-pane pad" id="businessproposal" role="tabpanel">

                    <div id="businessproposalform" class="">
                        <div class="box-header with-border">
                            <div class="" style="display: flex; justify-content:space-between">
                                <div class="">
                                    <h4 id="form_heading" class="box-title">Proposal Form</h4>
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


                        <!-- /.card-header -->
                        <!-- form start -->



                        <form method="post" id="proposalform" name="proposalform" enctype="multipart/form-data"
                            action="/savebusinessproposal" class="form-horizontal form-element">
                            @csrf


                            <input type="hidden" name="id" id="lead_id" value="{{ $viewlead->id }}">
                            <input type="hidden" name="proposal_accepted" id="proposal_accepted" value="Awaiting">
                            <div class="box-body">

                                {{-- first two --}}
                                <div class="row">
                                    <div class="form-group col-md-6">

                                        <div class="row">
                                            <div class="col-4">

                                                <label for="upload_proposal_documents">Upload Propsal Documents</label>
                                            </div>
                                            <div class="col-8">
                                                <input id="upload_proposal_documents" type="file"
                                                    class="form-control " name="upload_proposal_documents" required>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">

                                        <div class="row">
                                            <div class="col-4">

                                                <label for="proposal_remarks">Remarks</label>
                                            </div>
                                            <div class="col-8">
                                                <input id="proposal_remarks" type="text" class="form-control "
                                                    name="proposal_remarks">

                                            </div>
                                        </div>
                                    </div>



                                </div>

                                @if (in_array($viewlead->Lead_Status, ['Proposal Negotiation', 'Waiting For Proposal Negotiation']))
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-4">

                                                    <label for="reason_for_changing_proposal">Reason For Changing
                                                        Proposal<span class="danger">*</span></label>
                                                </div>
                                                <div class="col-8">
                                                    {{-- <select id="reason_for_changing_proposal"
                                                        name="reason_for_changing_proposal" class="form-control" required>
                                                        <option selected disabled>Select Reason</option>
                                                        <option value="Reason 1">Reason 1</option>
                                                        <option value="Reason 2">Reason 2</option>
                                                        <option value="Reason 3">Reason 3</option>
                                                        <option value="Reason 4">Reason 4</option>

                                                    </select> --}}
                                                    <input id="reason_for_changing_proposal" type="text"
                                                        class="form-control " name="reason_for_changing_proposal">

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                @endif




                                {{-- first two upto here --}}

                                <div class="text-right">

                                    <button type="submit" class="btn btn-success btn-md " id="save_requirements"
                                        tabindex="9">
                                        Save
                                    </button>
                                </div>
                            </div>


                        </form>

                    </div>

                    <div class="box-header with-border">
                        <h5 class="box-title">Sent Proposals</h5>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">


                            <table id="example"
                                class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                <thead>
                                    <tr>
                                        <th>Proposal Doc</th>
                                        <th>Reason(if change in Proposal)</th>
                                        <th>Remarks</th>




                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($viewlead->proposals as $p)
                                        <tr>
                                            <td>

                                                <?php
//$data->sla_document_link
$ar = explode(".", $p->proposal_documents);

$extensions = array('jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG');
if (in_array($ar[1], $extensions)) {
    ?>
                                                <a href="/uploads/{{ $p->proposal_documents }}" target="_blank">
                                                    <img style="width:100px;height:90px"
                                                        src="/uploads/{{ $p->proposal_documents }}"
                                                        alt='SLA Document'>

                                                </a>
                                                <?php
} else {
    ?>
                                                <a href="/uploads/{{ $p->proposal_documents }}" target="_blank">

                                                    <img style="width:100px;height:90px" src="/assets/doc.svg"
                                                        alt='SLA Document'>

                                                </a>
                                                <?php
}
?>








                                            </td>
                                            <td>{{ $p->reason_for_changing_proposal }}</td>
                                            <td>{{ $p->proposal_remarks }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>

                {{-- Legal Remarks Tab --}}
                <div class="tab-pane pad" id="legalremarks" role="tabpanel">


                    <div id="legalremarksform" class="">
                        <div class="box-header with-border">
                            <div class="" style="display: flex; justify-content:space-between">
                                <div class="">
                                    <h4 id="form_heading" class="box-title">Legal Remarks Form</h4>
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

                        <div>
                            <!-- /.card-header -->
                            <!-- form start -->



                            <form method="post" id="legalremarksform" name="legalremarksform"
                                action="/savelegalremarks" enctype="multipart/form-data"
                                class="form-horizontal form-element">
                                @csrf


                                <input type="hidden" name="id" id="lead_id" value="{{ $viewlead->id }}">
                                <input type="hidden" name="agreement_finalized" value="Awaiting">
                                <input type="hidden" name="business_onboarded" value="Awaiting">

                                <div class="box-body">

                                    {{-- first two --}}


                                    <div class="row">
                                        <div class="form-group col-md-6">

                                            <div class="row">
                                                <div class="col-4">

                                                    <label for="commercial">Commercial Go-Ahead<span
                                                            style="color: red">*</span></label>
                                                    <input type="hidden" name="data[1][document_type]"
                                                        value="Commercial Go-Ahead" />
                                                </div>
                                                <div class="col-8">
                                                    <input id="commercial" type="file" class="form-control"
                                                        name="data[1][document_link]" required>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group col-md-6">

                                            <div class="row">
                                                <div class="col-4">

                                                    <label class="commercial_remarks" for="remarks">Remarks</label>
                                                </div>
                                                <div class="col-8">
                                                    <input id="commercial_remarks_id" type="text"
                                                        class="form-control commercial_remarks"
                                                        name="data[1][remarks_for_legal]" required>

                                                </div>
                                            </div>
                                        </div>
                                    </div>






                                    {{-- second row --}}
                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-4">

                                                    <label for="customer_agreement">Customer Agreement </label>
                                                    <input type="hidden" name="data[0][document_type]"
                                                        value="Customer Agreement" />
                                                </div>
                                                <div class="col-8">
                                                    <input id="customer_agreement" type="file"
                                                        class="form-control " name="data[0][document_link]">

                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group col-md-6">

                                            <div class="row">
                                                <div class="col-4">

                                                    <label class="customer_remarks" for="remarks">Remarks</label>
                                                </div>
                                                <div class="col-8">
                                                    <input id="customer_remarks_id" type="text"
                                                        class="form-control customer_remarks"
                                                        name="data[0][remarks_for_legal]">

                                                </div>
                                            </div>
                                        </div>


                                    </div>






                                    {{-- second two --}}



                                    {{-- 3rd row --}}
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-4">

                                                    <label for="nda">NDA</label>
                                                    <input type="hidden" name="data[2][document_type]"
                                                        value="NDA" />
                                                </div>
                                                <div class="col-8">
                                                    <input id="nda" type="file" class="form-control "
                                                        name="data[2][document_link]">

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">

                                            <div class="row">
                                                <div class="col-4">

                                                    <label class="nda_remarks" for="remarks">Remarks</label>
                                                </div>
                                                <div class="col-8">
                                                    <input id="nda_remarks_id" type="text"
                                                        class="form-control nda_remarks"
                                                        name="data[2][remarks_for_legal]">

                                                </div>
                                            </div>
                                        </div>





                                    </div>








                                    {{-- second two upto here --}}

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


                    {{-- Remarks Table --}}

                    <div class="box-header with-border">
                        <h5 class="box-title">Legal Remarks Data</h5>
                    </div>

                    {{-- box header --}}


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
                                                <img style="width:100px;height:90px"
                                                    src="/uploads/{{ $p->document_link }}"
                                                    alt='Legal Remarks Document'>

                                                <?php
} else {
    ?>
                                                <a href="/uploads/{{ $p->document_link }}" target="_blank">

                                                    <img style="width:100px;height:90px" src="/assets/doc.svg"
                                                        alt='Legal Remarks Document'>

                                                </a>
                                                <?php
}
?>

                                                <br>
                                                @if (isset($p->bd_submitted_time))
                                                    <span>Uploaded Time:
                                                        {{ date('d M, Y H:i', strtotime($p->bd_submitted_time)) }} </span>
                                                    <br>
                                                    <span>Remarks: {{ $p->remarks_for_legal }} </span>
                                                @endif
                                            </td>

                                            <td>
                                                @if (!isset($p->legal_document_link))
                                                @else
                                                    <?php            
                                         //$data->sla_document_link
$ar = explode(".", $p->legal_document_link);

$extensions = array('jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG');
if (in_array($ar[1], $extensions)) {
    ?>
                                                    <img style="width:100px;height:90px"
                                                        src="/uploads/{{ $p->legal_document_link }}"
                                                        alt='Legal Remarks Document'>

                                                    <?php
} else {
    ?>
                                                    <a href="/uploads/{{ $p->legal_document_link }}" target="_blank">

                                                        <img style="width:100px;height:90px" src="/assets/doc.svg"
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



                    {{-- Remarks Table --}}

                </div>


                {{-- Finance Verification --}}

                <div class="tab-pane pad" id="finance" role="tabpanel">




                    <div id="financeverification" class="">
                        <div class="box-header with-border">
                            <div class="" style="display: flex; justify-content:space-between">
                                <div class="">
                                    <h4 id="form_heading" class="box-title">Update Customer Details</h4>
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

                        <div>
                            <!-- /.card-header -->
                            <!-- form start -->


                            <!--savefinanceverification-->
                            <form method="post" id="financeverification" name="financeverification"
                                action="/update_customer_details" enctype="multipart/form-data"
                                class="form-horizontal form-element">
                                @csrf


                                <input type="hidden" name="id" id="lead_id" value="{{ $viewlead->id }}">
                                <input type="hidden" name="customer_id" id="customer_id"
                                    value="{{ $viewlead->customer->id }}">


                                <div class="box-body">

                                    {{-- first two --}}
                                    <div class="row">
                                        <div class="form-group col-md-6">

                                            <div class="row">
                                                <div class="col-4">

                                                    <label for="Customer_Name">Customer Name</label>
                                                </div>
                                                <div class="col-8">
                                                    <input id="Customer_Name" type="text" class="form-control "
                                                        name="Customer_Name"
                                                        value='{{ $viewlead->customer->Customer_Name }}' required>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-4">

                                                    <label for="executed_agreement">Contact Number</label>
                                                </div>
                                                <div class="col-8">


                                                    <input type="text" class="form-control" name="Contact_Number"
                                                        maxlength="10" minlength="10"
                                                        value='{{ $viewlead->customer->Contact_Number }}'
                                                        required="">

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

                                                    <label for="start_date">POC Name</label>
                                                </div>
                                                <div class="col-8">
                                                    <input id="POC_Name" type="text" class="form-control "
                                                        name="POC_Name" value='{{ $viewlead->customer->POC_Name }}'>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-4">

                                                    <label for="expiry_date">Email</label>
                                                </div>
                                                <div class="col-8">
                                                    <input id="Email" type="email" class="form-control "
                                                        name="Email" value="{{ $viewlead->customer->Email }}"
                                                        required>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- second two upto here --}}

                                    {{-- Third two --}}
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-4">

                                                    <label for="GST_Number">Cost Center</label>
                                                </div>
                                                <div class="col-8">
                                                    <select name="cost_center" id="cost_center_select"
                                                        class="form-control  " required
                                                        value='{{ $viewlead->cost_center }}'>


                                                    </select>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-4">

                                                    <label for="GST_Number">GST Number</label>
                                                </div>
                                                <div class="col-8">
                                                    <input id="GST_Number" type="text" class="form-control "
                                                        name="gst_no" value='{{ $viewlead->customer->gst_no }}'
                                                        required>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Third two upto here --}}

                                    {{-- fourth row --}}

                                    <div class="row">
                                        <div class="form-group col-md-6">

                                            <div class="row">
                                                <div class="col-4">

                                                    <label for="start_date">Address</label>
                                                </div>
                                                <div class="col-8">
                                                    <input id="address" type="text" class="form-control "
                                                        name="address" value='{{ $viewlead->customer->address }}'>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">

                                            <div class="row">
                                                <div class="col-4">

                                                    <label for="start_date">GST Upload</label>
                                                </div>
                                                <div class="col-8">
                                                    <input id="gst_file" type="file" class="form-control "
                                                        name="gst_file">

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    {{-- fourth row upto here --}}


                                    <div class="row">
                                        <div class="form-group col-md-6">

                                            <div class="row">
                                                <div class="col-4">

                                                    <label for="start_date">Industry</label>
                                                </div>
                                                <div class="col-8">
                                                    <input id="Industry" type="text" class="form-control "
                                                        name="Industry" value="{{ $viewlead->customer->Industry }}">

                                                </div>
                                            </div>
                                        </div>








                                        <div class="form-group col-md-6">

                                            <div class="row" style="justify-content: center">

                                                <?php
if (!empty($viewlead->customer->gst_file)) {

    //$data->sla_document_link
    $ar = explode(".", $viewlead->customer->gst_file);

    $extensions = array('jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG');
    if (in_array($ar[1], $extensions)) {
        ?>
                                                <img style="width:100px;height:90px"
                                                    src="/uploads/{{ $viewlead->customer->gst_file }}"
                                                    alt='SLA Document'>

                                                <?php
    } else {
        ?>
                                                <a href="/uploads/{{ $viewlead->customer->gst_file }}"
                                                    target="_blank">

                                                    <img style="width:100px;height:90px" src="/assets/doc.svg"
                                                        alt='SLA Document'>

                                                </a>
                                                <?php
    }
}
?>


                                            </div><!-- comment -->

                                        </div>
                                    </div>



                                    <div class="text-right">

                                        <button type="submit" class="btn btn-success btn-md "
                                            id="financeverification" tabindex="9">
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
                {{-- upto here --}}
            </div>
        </div>
    </div>
    {{-- Lost/Dormant Button --}}

    <div class="pull-right" style="top: 116px; position:absolute ;right:54px;font-size:4px">

        <button class="btn btn-danger btn-block btn-sm btn-shadow margin-bottom" type="button" alt="default"
            id="stage_button" data-toggle="modal" data-target=".bs-example-modal-lg">Lost/Dormant</button>

    </div>
    {{-- Stage Button --}}



    {{-- Lost/Dormant Modal --}}
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Lost/Dormant</h4>
                    <button type="button" id="dismiss_modal" class="close" data-dismiss="modal"
                        aria-hidden="true">??</button>
                </div>

                <div class="modal-body">

                    <div style="display:flex; justify-content:center;">
                        <form id="stage_modal" action="/stage_status" method="post">
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



                            <div class="form-group " id="input_lost_div"
                                style="display: none;justify-content:center;align-items:center">


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row" style="display: flex; align-items:baseline;">

                                            <div class="col-md-6">
                                                <h6>
                                                    Select Reason :
                                                </h6>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control dropdown-item" id="input_lost"
                                                    name="lost_reason" style="display: none">

                                                    <option disabled>

                                                        Select Reason
                                                    </option>

                                                    <option value="Target Price not feasible">

                                                        Target Price not feasible
                                                    </option>
                                                    <option value="Project on Hold">

                                                        Project on Hold
                                                    </option>
                                                    <option value="Lost to Competition">

                                                        Lost to Competition
                                                    </option>
                                                    <option value="Poor Followup">

                                                        Poor Followup
                                                    </option>
                                                    <option value="Others">

                                                        Others
                                                    </option>
                                                </select>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="form-group">
                                <input id="input_dormant" class="form-control" name="lost_reason"
                                    placeholder="Reason for Dormant" style="display: none">
                                <select class="form-control dropdown-item" id="change_stage" name="stage">

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
                            </div> --}}


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
        $(document).ready(function() {
            $('#dismiss_modal').on('click', function() {
                $('#stage_modal').trigger("reset");
                document.getElementById('input_lost_div').style.display = "none";
                document.getElementById('input_lost').style.display = "none";

                console.log($('#stage_modal'));
            })
        });
    </script>






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

        today = yyyy + '-' + mm + '-' + dd;

        document.getElementById("example-date-input1").setAttribute("min", today);
    </script>
    <script>
        function stage_change() {
            if (document.getElementById("change_stage").value == "Dormant" || document.getElementById("change_stage")
                .value == "Lost") {


                document.getElementById('input_lost_div').style.display = "flex";
                document.getElementById('input_lost').style.display = "flex";

            } else {
                document.getElementById('input_lost_div').style.display = "none";
                document.getElementById('input_lost').style.display = "none";

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
        function select_accept_proposal() {
            //alert("FDafas");
            if (document.getElementById("accept_proposal").value == "Yes") {
                document.getElementById('counter_proposal').style.display = "none";
            } else if (document.getElementById("accept_proposal").value == "No") {
                document.getElementById('counter_proposal').style.display = "block";
            }

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

                    // console.log(response);
                    window.location.reload();
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

            if ("{!! isset($viewlead->business_onboarded) && $viewlead->business_onboarded == 'Yes' ? 'YES' : '' !!}" == "YES") {
                $('.ti-write').hide();
                $('#stage_button').hide();
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

    {{-- open proposal default --}}
    <script>
        $(document).ready(function() {



            if ("{!! $openproposal !!}" == "YES") {
                $('.nav-tabs a[href="#businessproposal"]').tab('show');
            }

        });
    </script>

    {{-- open remarks default --}}
    <script>
        $(document).ready(function() {



            if ("{!! $openremarks !!}" == "YES") {
                $('.nav-tabs a[href="#legalremarks"]').tab('show');
            }

        });
    </script>






    {{-- EBDTA --}}
    <script>
        document.getElementById("EBDTA").addEventListener('keyup', function() {

            var a = document.getElementById("Expected_Monthy_Revenue").value;
            var b = document.getElementById("EBDTA").value;

            var c = document.getElementById("ebdta_amount");
            c.value = (a / b).toFixed(2);
            // console.log(c.value);
        })
    </script>

    <script>
        $("#LOB_select").on('change', function() {
            // alert(document.getElementById("LOB_select").value);
            if (document.getElementById("LOB_select").value == 4 || document.getElementById("LOB_select").value ==
                6) {
                document.getElementById("area_id").style.display = "flex";
                $("#Area").prop('required', true);

            } else {

                document.getElementById("area_id").style.display = "none";
                $("#Area").prop('required', false);
            }
        })


        $("#Services_select").on('change', function() {






            if ((document.getElementById("Services_select").value == 18 || document.getElementById(
                        "Services_select")
                    .value == 23) && (document.getElementById("LOB_select").value == 7 || document.getElementById(
                        "LOB_select").value ==
                    9)) {
                document.getElementById("area_id").style.display = "flex";
                $("#Area").prop('required', true);

            } else if (!(document.getElementById("LOB_select").value == 4 || document.getElementById("LOB_select")
                    .value ==
                    6)) {
                document.getElementById("area_id").style.display = "none";
                $("#Area").prop('required', false);
                // document.getElementById("area_id").style.display = "block";

            }
        })
    </script>




    <script>
        // function fetch_holibook_cc() {
        //     $.ajax({
        //         type: "GET",
        //         url: "{{ url('get-cost-centers') }}",
        //         success: function(res) {
        //             if (res.success) {
        //                 for (let i = 0; i < res.data.length; i++) {
        //                     $('#cost_center_select').append(`<option value="${res.data[i].cost_center_name}">
    //                                ${res.data[i].cost_center_name}
    //                           </option>`);
        //                 }


        //                 let selectedval = "{!! $viewlead->cost_center !!}";



        //                 $("#cost_center_select").val(selectedval).change();

        //             } else {
        //                 alert(res.message);
        //             }
        //         },
        //         error: function(error) {
        //             alert(error);
        //         }
        //     });
        // }




        // function fetch_holibook_locations() {
        //     $.ajax({
        //         type: "GET",
        //         url: "{{ url('get-holibook-locations') }}",
        //         success: function(res) {
        //             if (res.success) {
        //                 for (let i = 0; i < res.data.length; i++) {
        //                     $('#Locationlistselect').append(`<option value="${res.data[i].location_name}">
    //                                ${res.data[i].location_name}
    //                           </option>`);
        //                 }

        //             } else {
        //                 alert(res.message);
        //             }
        //         },
        //         error: function(error) {
        //             alert(error);
        //         }
        //     });
        // }


        function fetch_lob_service(id) {
            // alert(id);
            $.ajax({
                type: "GET",
                url: "{{ url('get-lob-services') }}?id=" + id,
                success: function(res) {
                    // console.log(res);
                    if (res.success) {
                        for (let i = 0; i < res.data.length; i++) {
                            $('#Services_select').append(`<option value="${res.data[i].location_name}">
                                       ${res.data[i].location_name}
                                  </option>`);
                        }

                        $.each(res.data, function(k, v) {
                            $('#Services_select').append(`<option value="${k}">
                                      ${v}
                                  </option>`);

                        });



                    } else {
                        alert(res.message);
                    }
                },
                error: function(error) {
                    alert(error);
                }
            });
        }



        $().ready(function() {

            // fetch_holibook_cc();
            // fetch_holibook_locations();

            $("#LOB_select").on('change', function() {
                $("#Services_select").empty();
                fetch_lob_service($("#LOB_select").val());
            })


        });
    </script>






    <script>
        $().ready(function() {

            var id = "{{ $viewlead->id }}";
            // console.log(id);
            $.ajax({
                type: "GET",
                url: "{{ URL::to('fetchrequirements') }}",
                data: {
                    'find': id
                },

                success: function(response) {
                    // console.log(response);
                    try {

                        $('#Business_Requirements').val(response?.requirements?.business_requirement);

                        $('#LOB_select').val(response?.requirements?.lob).trigger('change');

                        $('#Services_select').val(response?.requirements?.services);

                        $('#example-date-input1').val(response?.requirements?.expected_closure_date);


                        $('#Locationlistselect1').val(response?.requirements?.location);


                        $('#Business_Type').val(response?.requirements?.business_type);


                        $('#Expected_Monthy_Revenue').val(response?.requirements
                            ?.expected_monthly_revenue);

                        $('#Expected_Capex').val(response?.requirements?.expected_capex);


                        $('#EBDTA').val(response?.requirements?.ebdta_percentage);

                        $('#ebdta_amount').val(response?.requirements?.ebdta_amount);
                        $('#Area').val(response?.requirements?.area);
                        $('#share_business_proposal').val(response?.requirements
                            ?.share_business_proposal);

                    } catch (error) {
                        // alert(error);
                        console.log(error);

                    }
                    // console.log(response.requirements.ebdta_percentage);



                }
            });



        });
    </script>


    <script>
        $().ready(function() {

            $('.commercial_remarks').hide();
            $('.customer_remarks').hide();
            $('.nda_remarks').hide();


            $('#commercial').on('change', function() {

                if ($("#commercial")[0].files.length === 0) {
                    $('.commercial_remarks').hide();
                    $('#commercial_remarks_id').prop('required', false);

                } else {

                    $('.commercial_remarks').show();
                    $('#commercial_remarks_id').prop('required', true);
                }
            })


            $('#customer_agreement').on('change', function() {

                if ($("#customer_agreement")[0].files.length === 0) {
                    $('.customer_remarks').hide();
                    $('#customer_remarks_id').prop('required', false);

                } else {

                    $('.customer_remarks').show();
                    $('#customer_remarks_id').prop('required', true);
                }
            })


            $('#nda').on('change', function() {

                if ($("#nda")[0].files.length === 0) {
                    $('.nda_remarks').hide();
                    $('#nda_remarks_id').prop('required', false);

                } else {

                    $('.nda_remarks').show();
                    $('#nda_remarks_id').prop('required', true);
                }
            })





        })
    </script>
@endsection
