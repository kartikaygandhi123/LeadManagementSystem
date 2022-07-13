@extends('layouts.mainLayout')

@section('content')
    <style>
        form {

            margin-left: 20px;
            margin-right: 20px;
            margin-bottom: 20px;
        }

        .form-control {

            width: 80%;
            border: 1px solid grey
        }
    </style>




    {{-- select2 --}}
    <link href="/assets/vendor_components/select2/dist/css/select2.min.css" rel="stylesheet" />

    {{-- Form --}}

    <div id="newcustomerform" class="box box-solid box-primary">
        <div class="box-header with-border">
            <h3 id="form_heading" class="box-title">Requirements Mapping</h3>
        </div>

        <div>
            <!-- /.card-header -->
            <!-- form start -->



            <form method="post" id="requirements" name="requirements" action="requirements_map"
                class="form-horizontal form-element">
                @csrf



                <div class="box-body">

                    {{-- first two --}}
                    <div class="row">
                        <div class="form-group col-md-6">

                            <div class="row">
                                <div class="col-2">

                                    <label for="Business_Requirements">Business Requirements</label>
                                </div>
                                <div class="col-10">
                                    <input id="Business_Requirements" type="text" class="form-control "
                                        name="Business_Requirements" autocomplete="Business_Requirements" autofocus
                                        required>

                                </div>
                            </div>
                        </div>




                        <div class="form-group col-md-6">
                            <div class="row">
                                <div class="col-2">

                                    <label for="Upload_Documents">Upload Documents<span class="danger">*</span></label>
                                </div>
                                <div class="col-10">
                                    <input id="Upload_Documents" type="file" class="form-control" name="Upload_Documents"
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
                                    <select id="LOB" class="form-control">
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
                                    <label for="Services">Role<span class="danger">*</span></label>
                                </div>
                                <div class="col-10">
                                    <select id="Services" class="form-control">
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
                                    <input class="form-control" type="number" value="" id="Area">
                                </div>
                            </div>
                        </div>


                        <div class="form-group col-md-6">
                            <div class="row">
                                <div class="col-2">
                                    <label for="example-date-input">Date<span class="danger">*</span></label>
                                </div>
                                <div class="col-10">
                                    <input class="form-control" type="date" value="<?php echo date('Y-m-d'); ?>"
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
                                    <select id="Location" class="form-control">
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
                                    <select id="Business" class="form-control">
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
                                    <input class="form-control" type="number" value="" id="Expected_Monthy_Revenue">
                                </div>
                            </div>
                        </div>


                        <div class="form-group col-md-6">
                            <div class="row">
                                <div class="col-2">
                                    <label for="Expected_Capex">Expected Capex<span class="danger">*</span></label>
                                </div>
                                <div class="col-10">
                                    <input class="form-control" type="number" value="" id="Expected_Capex">
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
                                    <input class="form-control" type="number" value="" id="EBDTA">
                                </div>
                            </div>
                        </div>


                        <div class="form-group col-md-6">
                            <div class="row">
                                <div class="col-2">
                                    <label for="EBDTA_Amount">EBDTA Amount<span class="danger">*</span></label>
                                </div>
                                <div class="col-10">
                                    <input class="form-control" type="number" value="" id="EBDTA_Amount">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="text-right">

                        <button type="submit" class="btn btn-success btn-md " id="save_requirements" tabindex="9">
                            Save
                        </button>
                    </div>
                </div>


            </form>
        </div>
    </div>


    {{-- Stage Button --}}

    <div class="pull-right" style="bottom: 21px; position:absolute ;right:2px">
        <button class="btn btn-info btn-block btn-shadow margin-bottom" type="button" alt="default"
            data-toggle="modal" data-target=".bs-example-modal-lg">Stage</button>
    </div>
    {{-- Stage Button --}}

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
        function contactVal() {
            console.log('here iam ');
            var cont = document.getElementById("Contact_Number").value;
            if (cont > 9999999999 || cont < 1000000000) {
                document.getElementById("Contact_Number").value = '';
                alert('Enter valid 10 digit number');
            }
        }
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
@endsection
