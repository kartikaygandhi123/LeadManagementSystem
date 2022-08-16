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

        .error {
            /* color: #007bff; */
            color: red;
        }
    </style>

    {{-- select2 --}}
    <link href="/assets/vendor_components/select2/dist/css/select2.min.css" rel="stylesheet" />


    {{-- select customer dropdown --}}
    <div class="col-12">
        <div class="box box-solid box-primary">
            <div class="box-header with-border">
                <h4 class="box-title">Create Lead</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <div class="form-group">

                    <label>Select Customer :</label>
                    <select class="form-control dropdown-item select2 col-md-5 " id="select_customer" onchange='show_form()'>
                        <optgroup>
                            <option id="create_new" value="create_new"><button class="btn btn-sm" id="create_new_customer">
                                    <p style="color: yellow !important;">*Create
                                        New
                                        Customer</p>
                            </option>
                        </optgroup>

                        <optgroup>
                            <option selected disabled>Choose Existing</option>

                            @foreach ($brand as $item)
                                <option value="{{ $item['id'] }}">{{ $item['Customer_Name'] }}</option>
                            @endforeach

                        </optgroup>


                    </select>
                    <br>


                </div>
            </div>
        </div>
    </div>


    {{-- Appending through Javascript --}}
    <div id="append_form" class="box box-solid "></div>
    {{-- Appending through Javascript --}}





    {{-- first page form --}}
    <div style="display: none" id="newcustomerform" class="box box-solid ">
        <div class="box-header with-border">
            <h2 id="form_heading" class="box-title">New Customer</h2>
        </div>

        <div>
            <!-- /.card-header -->
            <!-- form start -->



            <form method="post" id="myLeadform" name="myform" action="/followupshow" class="form-horizontal form-element">
                @csrf


                <input type="hidden" name="flag_id" id="flag" />
                <input type="hidden" name="id" id="id_update" />
                <div class="box-body">

                    {{-- 1st row --}}
                    <div class="row">

                        <div class="form-group col-md-6">
                            <div class="row">
                                <div class="col-4">
                                    <label for="Customer_Name" class=" control-label">Customer Name<span
                                            style="color: red">*</span></label>
                                </div>
                                <div class="col-8">
                                    <input name="Customer_Name" type="text" class="form-control" id="Customer_Name" />

                                </div>
                            </div>
                        </div>


                        <div class="form-group col-md-6">
                            <div class="row">
                                <div class="col-4">
                                    <label for="POC_Name" class=" control-label">POC Name<span
                                            style="color: red;">*</span></label>
                                </div>
                                <div class="col-8">
                                    <input name="POC_Name" type="text" class="form-control" id="POC_Name" />
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- 1st row upto here --}}


                    {{-- 2nd row --}}
                    <div class="row">

                        <div class="form-group col-md-6">
                            <div class="row">
                                <div class="col-4">
                                    <label for="Contact_Number" class=" control-label">Contact Number</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" pattern="[0-9]{10}" name="Contact_Number" class="form-control"
                                        maxlength="10" id="Contact_Number" />
                                </div>
                            </div>
                        </div>





                        <div class="form-group col-md-6">
                            <div class="row">
                                <div class="col-4">
                                    <label for="Email" class=" control-label">Email</label>
                                </div>
                                <div class="col-8">
                                    <input type="email" name="Email" class="form-control" id="Email" />

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- 2nd row upto here --}}



                    {{-- 3rd row --}}
                    <div class="row">
                        <div class="form-group col-md-6">
                            <div class="row">
                                <div class="col-4">
                                    <label for="Industry" class=" control-label">Industry<span
                                            style="color: red;">*</span></label>
                                </div>
                                <div class="col-8">
                                    <select name="Industry" id="Industry" class="form-control  "
                                        onchange="hidden_industry()">
                                        <option selected disabled value="">
                                            Select Industry
                                        </option>
                                        @foreach ($industries as $industry)
                                            <option value="{{ $industry->name }}">
                                                {{ $industry->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            {{-- hidden industry --}}
                            <div class="row" style="display: none;margin-top:19px" id="industry_hidden">
                                <div class="col-4">
                                    <label for="Other_Industry" class="control-label">Input Other
                                        Industry<span style="color: red;">*</span></label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="Industry" id="Other_Industry" class="form-control">
                                </div>
                            </div>
                            {{-- hidden industry --}}

                        </div>




                        <div class="form-group col-md-6">
                            <div class="row">
                                <div class="col-4">
                                    <label for="Lead_Source" class=" control-label">Lead Source<span
                                            style="color: red;">*</span></label>
                                </div>
                                <div class="col-8">
                                    <select name="Lead_Source" id="Lead_Source" class="form-control "
                                        onchange="hidden_lead()">
                                        <option selected disabled value="">
                                            Select Lead Source
                                        </option>
                                        @foreach ($leadsource as $lead)
                                            <option value="{{ $lead->lead_source }}">{{ $lead->lead_source }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{-- hidden lead source --}}
                            <div class="row" style="display: none;margin-top:19px" id="leadsource_hidden">
                                <div class="col-4">
                                    <label for="Other_Lead_Source" class=" control-label">Input Other
                                        Lead
                                        Source<span style="color: red;">*</span></label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="Lead_Source" class="form-control Other_Lead_Source">
                                </div>
                            </div>
                            {{-- hidden lead source --}}



                        </div>
                    </div>
                    {{-- 4th row --}}
                    <div class="row">
                        <div class="form-group col-md-6">
                            <div class="row">
                                <div class="col-4">
                                    <label for="First_Contact_Date" class=" control-label">First Contact Date<span
                                            style="color: red;">*</span></label>
                                </div>
                                <div class="col-8">
                                    <input name="First_Contact_Date" type="date" class="form-control"
                                        id="First_Contact_Date" value="<?php echo date('Y-m-d'); ?>" />

                                </div>
                            </div>
                        </div>



                        <div class="form-group col-md-6">
                            <div class="row">
                                <div class="col-4">
                                    <label for="Lead_Status" class=" control-label">Lead Status<span
                                            style="color: red;">*</span></label>
                                </div>
                                <div class="col-sm-8">
                                    <select name="Lead_Status" id="Lead_Status" onchange="maprequirements()"
                                        class="form-control select2">

                                        <option value="Prospect" selected>
                                            Prospect
                                        </option>

                                        <option value="Qualified">
                                            Qualified
                                        </option>

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <div class="row">
                                <div class="col-4">
                                    <label for="lead_description" class=" control-label">Lead Description<span
                                            style="color: red;">*</span></label>
                                </div>
                                <div class="col-8">
                                    <input name="lead_description" type="text" class="form-control"
                                        id="lead_description" />

                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                    <br>

                    <div class="pull-left">
                        <div class="row" id="hide_map_requirements" style="display:none">
                            <div class="form-group col-md-12">

                                <label for="map_requirements">Map Business Requirements:</label>
                                <select id="map_requirements" name="map_requirements" class="form-control style">

                                    <option value="No" selected>No</option>
                                    <option value="Yes">Yes</option>

                                </select>
                            </div>
                        </div>
                    </div>

                    {{-- 4th row upto here --}}

                    <div class="text-right" id="hidelead">
                        {{-- <a href="#" class="btn btn-default btn-md" tabindex="8">Cancel</a> --}}
                        <button type="submit" class="btn btn-primary btn-md" id="saveLead">
                            Save
                        </button>
                    </div>


                </div>
            </form>
        </div>
    </div>



    {{-- first page form --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="/assets/vendor_components/select2/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>


    <script>
        $(document).ready(function() {

            $('#myLeadform').validate({

                rules: {
                    Customer_Name: "required",
                    POC_Name: "required",

                    Email: {
                        email: true
                    },
                    Contact_Number: {
                        maxlength: 10,
                        minlength: 10
                    },
                    Industry: "required",
                    Lead_Source: "required",
                    First_Contact_Date: "required",
                    Lead_Status: "required",
                    lead_description: "required",

                },
                messages: {
                    Customer_Name: "This field is required",
                    POC_Name: "This field is required",

                    Email: "Enter valid email",
                    Contact_Number: "Enter valid 10-digit number",
                    Industry: "Select Industry",
                    Lead_Source: "Select Source",
                    First_Contact_Date: "This field is required",
                    Lead_Status: "This field is required",
                    lead_description: "This field is required",


                }

            })
        });
    </script>



    <script>
        function hidden_lead() {

            // alert("lead");
            if (document.getElementById("Lead_Source").value == "Others") {
                document.getElementById("leadsource_hidden").style.display = "flex";


            } else {
                document.getElementById("leadsource_hidden").style.display = "none";
                $(".Other_Lead_Source").val(document.getElementById("Lead_Source").value)
            }

        }


        function hidden_industry() {

            // alert("industry");
            if (document.getElementById("Industry").value == "Others") {
                document.getElementById("industry_hidden").style.display = "flex";

            } else {
                document.getElementById("industry_hidden").style.display = "none";
                $("#Other_Industry").val(document.getElementById("Industry").value)
            }

        }
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

        document.getElementById("First_Contact_Date").setAttribute("min", today);
    </script>


    <script type="text/javascript">
        function fetchcustomer() {

            $id = document.getElementById("select_customer").value;
            $.ajax({
                type: "GET",
                data: {
                    'find': $id
                },
                url: "{{ URL::to('fetchcustomer') }}",


                success: function(response) {

                    console.log(response);
                    $('#Customer_Name').val(response.customers.Customer_Name);
                    $('#POC_Name').val(response.customers.POC_Name);
                    $('#Contact_Number').val(response.customers.Contact_Number);
                    // $('#Lead_Source').val(response.customers.lead_source);
                    $('#Email').val(response.customers.Email);
                    // $('#Industry').val(response.customers.Industry);


                    $('#id_update').val(response.customers.id);



                }
            });
        }
    </script>



    <script>
        function show_form() {

            var a = document.getElementById("newcustomerform");
            // console.log(document.getElementById("select_customer").value);
            if (document.getElementById("select_customer").value == 'create_new') {

                console.log("clicked");
                a.style.display = "block";
                document.getElementById('append_form').style.display = "none";

            } else {



                console.log('fetchcustomer');

                let gud = document.getElementById("newcustomerform").innerHTML;

                a.style.display = "none";
                document.getElementById('append_form').style.display = "block";
                document.getElementById('append_form').innerHTML = gud;
                document.getElementById('form_heading').innerHTML = "Existing Customer";
                document.getElementById("select_customer").value;
                document.getElementById("myLeadform").action = "existingupdate";


                document.getElementById('saveLead').innerHTML = "Save"; //changed From Update To save

                fetchcustomer();

            }

        }
    </script>





    <script>
        $('#select_customer').select2();
    </script>



    <script>
        function maprequirements() {
            if (document.getElementById("Lead_Status").value == "Prospect") {

                document.getElementById("hide_map_requirements").style.display = "none";

            } else if (document.getElementById("Lead_Status").value == "Qualified") {

                document.getElementById("hide_map_requirements").style.display = "block";

            }
        }
    </script>
@endsection
