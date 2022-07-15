@extends('layouts.mainLayout')

@section('content')
    {{-- select2 --}}
    <link href="/assets/vendor_components/select2/dist/css/select2.min.css" rel="stylesheet" />

    {{-- Form --}}

    <div id="businessproposalform" class="">
        <div class="box-header with-border">
            <h3 id="form_heading" class="box-title">Proposal Form</h3>
        </div>

        <div>
            <!-- /.card-header -->
            <!-- form start -->



            <form method="post" id="propsalform" name="proposalform" action="/shareproposal"
                class="form-horizontal form-element">
                @csrf


                <input type="hidden" name="id" id="lead_id" value="">
                <div class="box-body">

                    {{-- first two --}}
                    <div class="row">
                        <div class="form-group col-md-6">

                            <div class="row">
                                <div class="col-2">

                                    <label for="upload_proposal_documents">Upload Propsal Documents</label>
                                </div>
                                <div class="col-10">
                                    <input id="upload_proposal_documents" type="file" class="form-control "
                                        name="upload_proposal_documents" autofocus required>

                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <div class="row">
                                <div class="col-2">

                                    <label for="reason_for_changing_proposal">Reason For Changing Proposal<span
                                            class="danger">*</span></label>
                                </div>
                                <div class="col-10">
                                    <select id="reason_for_changing_proposal" class="form-control">
                                        <option selected disabled>Select Reason</option>
                                        <option value="Reason 1">Reason 1</option>
                                        <option value="Reason 2">Reason 2</option>
                                        <option value="Reason 3">Reason 3</option>
                                        <option value="Reason 4">Reason 4</option>

                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- first two upto here --}}

                    <div class="text-right">

                        <button type="submit" class="btn btn-success btn-md " id="save_requirements" tabindex="9">
                            Save
                        </button>
                    </div>
                </div>


            </form>
        </div>
    </div>
@endsection
