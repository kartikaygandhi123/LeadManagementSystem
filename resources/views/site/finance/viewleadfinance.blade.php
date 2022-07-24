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
                <li class="nav-item"> <a class="nav-link" id="financetab" data-toggle="tab" href="#finance"
                        role="tab"><span class="hidden-sm-up"><i class="ion-person"></i></span> <span
                            class="hidden-xs-down">
                            Finance Verification</span></a> </li>






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



                        @if (isset($viewlead->requirements))
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



                            @if (isset($viewlead->requirements->upload_requirement_documents))
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
                                            <b>Business Proposal Shared</b>
                                        </div>
                                        <div class="col-md-6">
                                            {{ isset($viewlead->requirements->share_business_proposal) ? $viewlead->requirements->share_business_proposal : 'Not Found' }}




                                        </div>


                                    </div>
                                </div>
                            </div>
                        @endif



                        @if (isset($viewlead->proposals))
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
                        @if (isset($viewlead->legalRemarks))
                            {{-- $loop->last --}}
                            <hr>
                            @foreach ($viewlead->legalRemarks as $p)
                                @if ($loop->last)
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


                        @if (isset($viewlead->legalExecuted))
                            <hr>

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


                                    </div>
                                </div>
                            </div>





                            @if ($viewlead->Lead_Status == 'Finance Verified')
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
                        @endif

                    </div>
                </div>



                {{-- Lead Executed Agreement tab --}}
                {{-- Finance Verification --}}

                <div class="tab-pane pad" id="finance" role="tabpanel">




                    <div id="financeverification" class="">
                        <div class="box-header with-border">
                            <h4 id="form_heading" class="box-title">Verify Customer Details</h4>
                        </div>

                        <div>
                            <!-- /.card-header -->
                            <!-- form start -->


                            <!--savefinanceverification-->
                            <form method="post" id="financeverificationdiv" name="financeverification"
                                action="/savefinanceverification" enctype="multipart/form-data"
                                class="form-horizontal form-element">
                                @csrf


                                <input type="hidden" name="id" id="lead_id" value="{{ $viewlead->id }}">
                                <input type="hidden" name="customer_id" id="customer_id"
                                    value="{{ $viewlead->customer->id }}">
                                <input type="hidden" name="finance_user_id" id="finance_user_id"
                                    value="{{ $viewlead->finance_user->id }}">


                                <div class="box-body">

                                    {{-- first two --}}
                                    <div class="row">
                                        <div class="form-group col-md-6">

                                            <div class="row">
                                                <div class="col-2">

                                                    <label for="Customer_Name">Customer Name</label>
                                                </div>
                                                <div class="col-10">
                                                    <input id="Customer_Name" type="text" class="form-control "
                                                        name="Customer_Name"
                                                        value='{{ $viewlead->customer->Customer_Name }}' required>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-2">

                                                    <label for="executed_agreement">Contact Number</label>
                                                </div>
                                                <div class="col-10">


                                                    <input type="text" class="form-control" name="Contact_Number"
                                                        maxlength="10" minlength="10"
                                                        value='{{ $viewlead->customer->Contact_Number }}'
                                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
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
                                                <div class="col-2">

                                                    <label for="start_date">POC Name</label>
                                                </div>
                                                <div class="col-10">
                                                    <input id="POC_Name" type="text" class="form-control "
                                                        name="POC_Name" value='{{ $viewlead->customer->POC_Name }}'>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-2">

                                                    <label for="expiry_date">Email</label>
                                                </div>
                                                <div class="col-10">
                                                    <input id="Email" type="email" class="form-control "
                                                        name="Email" value="{{ $viewlead->customer->Email }}">

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- second two upto here --}}

                                    {{-- Third two --}}
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-2">

                                                    <label for="GST_Number">Cost Center</label>
                                                </div>
                                                <div class="col-10">
                                                    <select name="cost_center" id="cost_center" class="form-control  "
                                                        required value='{{ $viewlead->cost_center }}'>
                                                        <option selected disabled value="">
                                                            Select Cost Center
                                                        </option>
                                                        <option value="Cost Center 1">
                                                            Cost Center 1
                                                        </option>
                                                        <option value="Cost Center 2">
                                                            Cost Center 2
                                                        </option>
                                                        <option value="Cost Center 3">
                                                            Cost Center 3
                                                        </option>

                                                    </select>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-2">

                                                    <label for="GST_Number">GST Number</label>
                                                </div>
                                                <div class="col-10">
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
                                                <div class="col-2">

                                                    <label for="start_date">Address</label>
                                                </div>
                                                <div class="col-10">
                                                    <input id="address" type="text" class="form-control "
                                                        name="address" value='{{ $viewlead->customer->address }}'>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">

                                            <div class="row">
                                                <div class="col-2">

                                                    <label for="start_date">GST Upload</label>
                                                </div>
                                                <div class="col-10">
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
                                                <div class="col-2">

                                                    <label for="start_date">Industry</label>
                                                </div>
                                                <div class="col-10">
                                                    <input id="Industry" type="text" class="form-control "
                                                        name="Industry" value="{{ $viewlead->customer->Industry }}">

                                                </div>
                                            </div>
                                        </div>








                                        <div class="form-group col-md-6">

                                            <div class="row">
                                                <?php
                                                  
                                                 if(!empty($viewlead->customer->gst_file)){
                                              
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
                                                <a href="/uploads/{{ $viewlead->customer->gst_file }}" target="_blank">

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

                                        <button type="submit" class="btn btn-success btn-md " id="financeverification"
                                            tabindex="9">
                                            Verified
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



@endsection
