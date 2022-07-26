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
                                                {{-- {{ dd($viewlead->requirements->upload_requirement_documents) }} --}}
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
                                            <b> Services: </b>
                                        </div>
                                        <div class="col-md-6">
                                            {{ isset($viewlead->requirements->services) ? $viewlead->requirements->services : 'Not Found' }}
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
                                            {{ isset($viewlead->requirements->lob) ? $viewlead->requirements->lob : 'Not Found' }}
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
                                            {{ isset($viewlead->requirements->expected_closure_date) ? $viewlead->requirements->expected_closure_date : 'Not Found' }}
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




                                        </div>


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
                                                        <b> Reason For Changing Proposal: </b>
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


                                                </div>





                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif


                        {{-- Legal Remarks --}}
                        @if (!empty($viewlead->legalRemarks))
                            {{-- $loop->last --}}
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b> Remarks For Legal Team: </b>
                                        </div>
                                        <div class="col-md-6">
                                            {{ isset($viewlead->remarks_for_legal) ? $viewlead->remarks_for_legal : 'Not Found' }}

                                        </div>


                                    </div>
                                </div>
                            </div>




                            @foreach ($viewlead->legalRemarks as $p)
                                @if ($loop->last)
                                    @if (isset($p->remarks_by_legal))
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <b> Remarks By Legal Team: </b>
                                                    </div>
                                                    <div class="col-md-6">
                                                        {{ isset($p->remarks_by_legal) ? $p->remarks_by_legal : 'Not Found' }}

                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    @endif



                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <b> Document Type: </b>
                                                </div>
                                                <div class="col-md-6">
                                                    {{ isset($p->document_type) ? $p->document_type : 'Not Found' }}

                                                </div>


                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <b> Document Preview: </b>
                                                </div>
                                                <div class="col-md-6">
                                                    <?php
                                            //$data->sla_document_link
                                            $ar = explode(".", $p->document_link);
                                            
                                            $extensions = array('jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG');
                                            if (in_array($ar[1], $extensions)) {
                                                ?>
                                                    <a href="/uploads/{{ $p->document_link }}" target="_blank">
                                                        <img style="width:50px;height:20px"
                                                            src="/uploads/{{ $p->document_link }}"
                                                            alt='Legal Remarks Document'>

                                                    </a>
                                                    <?php
                                            } else {
                                                ?>
                                                    <a href="/uploads/{{ $p->document_link }}" target="_blank">

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
                            @endforeach
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

                                        </div>







                                    </div>
                                </div>
                            </div>
                        @endif


                    </div>
                </div>


                {{-- Legal Remarks --}}
                <div class="tab-pane pad" id="timeline" role="tabpanel">

                    <div class="box box-solid">
                        <div class=" box-header with-border">
                            <h5 class="box-title">Remarks For Legal Team : {{ $viewlead->remarks_for_legal }}</h5>
                        </div>


                        <div class="box-body">
                            <div class="table-responsive">


                                <table id="example"
                                    class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                    <thead>
                                        <tr>
                                            <th>File Link</th>
                                            <th>Document Type</th>
                                            <th>Remarks By Legal Team</th>




                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($remarks as $p) --}}
                                        @foreach ($viewlead->legalRemarks as $p)
                                            <tr>
                                                <td>

                                                    <?php
                                    //$data->sla_document_link
                                    $ar = explode(".", $p->document_link);
                                    
                                    $extensions = array('jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG');
                                    if (in_array($ar[1], $extensions)) {
                                        ?>
                                                    <a href="/uploads/{{ $p->document_link }}" target="_blank">
                                                        <img style="width:60px;height:20px"
                                                            src="/uploads/{{ $p->document_link }}"
                                                            alt='Legal Remarks Document'>

                                                    </a>
                                                    <?php
                                    } else {
                                        ?>
                                                    <a href="/uploads/{{ $p->document_link }}" target="_blank">

                                                        <img style="width:60px;height:20px" src="/assets/doc.svg"
                                                            alt='Legal Remarks Document'>

                                                    </a>
                                                    <?php
                                    }
                                    ?>


                                                </td>
                                                <td>{{ $p->document_type }}</td>
                                                <td>{{ $p->remarks_by_legal }}</td>

                                            </tr>
                                        @endforeach
                                        {{-- @endforeach --}}
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>


                    <div id="executedrelevant" class="box box-solid">
                        <div class="box-header with-border">
                            <h4 id="form_heading" class="box-title">Legal Executed Relevant Document</h4>
                        </div>

                        <div>
                            <!-- /.card-header -->
                            <!-- form start -->



                            <form method="post" id="executedrelevant" name="executedrelevant"
                                action="/executedrelevant" enctype="multipart/form-data"
                                class="form-horizontal form-element">
                                @csrf


                                <input type="hidden" name="id" id="leadid" value="{{ $viewlead->id }}">


                                <div class="box-body">

                                    {{-- first two --}}
                                    <div class="row">
                                        <div class="form-group col-md-6">

                                            <div class="row">
                                                <div class="col-2">

                                                    <label for="remarksbylegal">Remarks By Legal Team</label>
                                                </div>
                                                <div class="col-10">
                                                    <input id="remarksbylegal" type="text" class="form-control "
                                                        name="remarks_by_legal" required>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-2">

                                                    <label for="uploaddocument">Upload Document</label>
                                                </div>
                                                <div class="col-10">
                                                    <input id="uploaddocument" type="file" class="form-control "
                                                        name="upload_document" required>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- dropdown --}}

                                    <div class="row">
                                        <div class="form-group col-md-6">

                                            <div class="row">
                                                <div class="col-2">

                                                    <label for="remarksbylegal">Document Type</label>
                                                </div>
                                                <div class="col-10">
                                                    <select class="form-control dropdown-item" id="document_type"
                                                        name="document_type">

                                                        <option selected disabled>
                                                            Document Type
                                                        </option>

                                                        <option id="Customer Agreement" value="Customer Agreement">
                                                            Customer Agreement
                                                        </option>
                                                        <option id="lost" value="Commercial Agreement">

                                                            Commercial Agreement
                                                        </option>

                                                        <option id="lost" value="NDA Agreement">
                                                            NDA Agreement
                                                        </option>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>



                                    </div>




                                    {{-- first two upto here --}}

                                    <div class="text-right">

                                        <button type="submit" class="btn btn-success btn-md " id="executeddocs"
                                            tabindex="9">
                                            Save
                                        </button>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>





                {{-- {{ dd($viewlead) }} --}}



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
                                                <div class="col-2">

                                                    <label for="agreement_remarks">Agreement Remarks</label>
                                                </div>
                                                <div class="col-10">
                                                    <input id="agreement_remarks" type="text" class="form-control "
                                                        name="agreement_remarks" required>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-2">

                                                    <label for="executed_agreement">Upload Executed Agreement</label>
                                                </div>
                                                <div class="col-10">


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
                                                <div class="col-2">

                                                    <label for="start_date">Agreement Start Date</label>
                                                </div>
                                                <div class="col-10">
                                                    <input id="start_date" type="date" class="form-control "
                                                        name="start_date">

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-2">

                                                    <label for="expiry_date">Agreement Expiry Date</label>
                                                </div>
                                                <div class="col-10">
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
