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

                                        </div>

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

                                        </div>

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

                                        </div>

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

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif

                    </div>
                </div>

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
