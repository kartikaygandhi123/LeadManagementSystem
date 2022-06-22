@extends('layouts.mainLayout')


@section('style')
    <style>

    </style>


@section('content')
    {{-- Radio button --}}
    <link href="/assets/vendor_components/select2/dist/css/select2.min.css" rel="stylesheet" />




    <div class="col-12">
        <div class="box box-solid box-primary">
            <div class="box-header with-border">
                <h4 class="box-title">Create Lead</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <div class="form-group">

                    <label>Select Customer</label>
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

                            @foreach ($lead as $item)
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
    <div id="append_form"></div>
    {{-- Appending through Javascript --}}



    <div style="display: none" id="newcustomerform" class="row justify-content-center">
        <div class="col-md-12 mt-3">

            <div class="card">

                <div class="card-header">

                    <div class="row">
                        <h2 id="form_heading" class="card-title">New Customer</h2>
                    </div>
                </div>
                <div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" id="myLeadform" name="myform" action="followupshow">
                        @csrf
                        <input type="hidden" name="flag_id" id="flag" />
                        <input type="hidden" name="id" id="id_update" />
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="col-12 text-primary">
                                    <div class="post">
                                        <div class="user-block">
                                            <div id="accordion">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title">
                                                            <a data-toggle="collapse" data-parent="#accordion"
                                                                href="#collapseThree" class="" aria-expanded="true">
                                                                Lead Information
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseThree" class="panel-collapse collapse in show">
                                                        <div class="row mt-3">
                                                            <div class="col-md-6">
                                                                <div class="form-group row mb-4">
                                                                    <div class="col-md-5 alnright"
                                                                        style="
                                                                        text-align: right;
                                                                    ">
                                                                        <label for="Customer_Name"
                                                                            class="col-form-label">Customer_Name<span
                                                                                style="
                                                                                color: red;
                                                                            ">*</span></label>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <input name="Customer_Name" type="text"
                                                                            class="form-control" id="Customer_Name"
                                                                            tabindex="1"
                                                                            pattern="[a-zA-Z\s\[1-9]{1}[0-9]{6}[0-9]{3}]+"
                                                                            required />
                                                                        <span class="error"
                                                                            style="
                                                                            color: red;
                                                                        ">
                                                                            <p id="customer_Name">
                                                                            </p>
                                                                        </span>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row mb-4">
                                                                    <div class="col-md-5 alnright"
                                                                        style=" text-align: right; ">
                                                                        <label for="POC_Name"
                                                                            class="col-form-label">POC_Name<span
                                                                                style="
                                                                                color: red;
                                                                            ">*</span></label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input name="POC_Name" type="text"
                                                                            class="form-control" id="POC_Name"
                                                                            tabindex="3" pattern="[a-zA-Z\s]+" required />
                                                                        <span class="error"
                                                                            style="
                                                                            color: red;
                                                                        ">
                                                                            <p id="poc_Name">
                                                                            </p>
                                                                        </span>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row mb-4">
                                                                    <div class="col-md-5 alnright"
                                                                        style="
                                                                        text-align: right;
                                                                    ">
                                                                        <label for="Contact_Number"
                                                                            class="col-form-label">Contact_Number<span
                                                                                style="
                                                                                color: red;
                                                                            ">*</span></label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="number" name="Contact_Number"
                                                                            class="form-control" id="Contact_Number"
                                                                            tabindex="5" maxlength="10"
                                                                            pattern="[1-9]{1}[0-9]{6}[0-9]{3} " required />
                                                                        <span class="error"
                                                                            style="
                                                                            color: red;
                                                                        ">
                                                                            <p id="contact_Number">
                                                                            </p>
                                                                        </span>
                                                                        @if ($errors->first('Contact_Number'))
                                                                            <span class="error"
                                                                                style="
                                                                            color: red;
                                                                        ">
                                                                                {{ $errors->first('Contact_Number') }}
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mb-4">
                                                                    <div class="col-md-5 alnright"
                                                                        style="
                                                                        text-align: right;
                                                                    ">
                                                                        <label for="Email"
                                                                            class="col-form-label">Email<span
                                                                                style="
                                                                                color: red;
                                                                            ">*</span></label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="email" name="Email"
                                                                            class="form-control" id="Email"
                                                                            tabindex="7" required />
                                                                        <span class="error"
                                                                            style="
                                                                            color: red;
                                                                        ">
                                                                            <p id="email"></p>
                                                                        </span>

                                                                        @if ($errors->first('email'))
                                                                            <span class="error"
                                                                                style="
                                                                            color: red;
                                                                        ">
                                                                                {{ $errors->first('email') }}
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <!-- <div class="form-group row mb-4">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <div class="col-md-5 alnright" style="text-align: right;">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <label for="contact_name" class="col-form-label">Add Remarks</label>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <div class="col-md-6">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <input name="remarks" type="text" class="form-control" id="remarks" tabindex="3">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </div>-->
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group row mb-4">

                                                                </div>
                                                                <div class="form-group row mb-4">
                                                                    <div class="col-md-5 alnright"
                                                                        style="
                                                                        text-align: right;
                                                                    ">
                                                                        <label for="Industry"
                                                                            class="col-form-label">Industry
                                                                            <span
                                                                                style="
                                                                                color: red;
                                                                            ">*</span></label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <select name="Industry" id="Industry"
                                                                            class="form-control " tabindex="4" required>
                                                                            <option value="">
                                                                                -None-
                                                                            </option>
                                                                            @foreach ($industries as $industry)
                                                                                <option value="{{ $industry->name }}">
                                                                                    {{ $industry->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mb-4">
                                                                    <div class="col-md-5 alnright"
                                                                        style="
                                                                        text-align: right;
                                                                    ">
                                                                        <label for="Lead_Source"
                                                                            class="col-form-label">Lead_Source
                                                                            <span
                                                                                style="
                                                                                color: red;
                                                                            ">*</span></label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <select name="Lead_Source_name"
                                                                            id="Lead_Source_name" class="form-control "
                                                                            required>
                                                                            <option value="">
                                                                                -None-
                                                                            </option>

                                                                            @foreach ($leadsource as $lead)
                                                                                <option value="{{ $lead->lead_source }}">
                                                                                    {{ $lead->lead_source }}
                                                                                </option>
                                                                            @endforeach

                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row mb-4">
                                                                    <div class="col-md-5 alnright"
                                                                        style="
                                                                        text-align: right;
                                                                    ">
                                                                        <label for="First_Contact_Date"
                                                                            class="col-form-label">First_Contact_Date<span
                                                                                style="
                                                                                color: red;
                                                                            ">*</span></label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input name="First_Contact_Date" type="date"
                                                                            class="form-control" id="First_Contact_Date"
                                                                            tabindex="3" required
                                                                            value="<?php echo date('Y-m-d'); ?>" />
                                                                        <span class="error"
                                                                            style="
                                                                            color: red;
                                                                        ">
                                                                            <p id="first_Contact_Date">
                                                                            </p>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <!-- <div class="form-group row mb-4">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          </div>-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        {{-- Lead Status dropdown --}}
                        <div class="form-actions text-right">

                            <div class="form-group row mb-4">
                                <div class="col-md-5 alnright"
                                    style="
                                    text-align: right;
                                ">
                                    <label for="Lead_Status" class="col-form-label">Lead Status
                                        <span
                                            style="
                                            color: red;
                                        ">*</span></label>
                                </div>
                                <div class="col-md-3  ">
                                    <select name="Lead_Status" id="Lead_Status" class="form-control select2"
                                        tabindex="4" required>
                                        <option disabled>
                                            Select Lead Status
                                        </option>
                                        <option value="Prospect">
                                            Prospect
                                        </option>

                                        <option value="Qualified">
                                            Qualified
                                        </option>

                                    </select>
                                </div>
                            </div>






                            <div class="text-right" id="hidelead">
                                {{-- <a href="#" class="btn btn-default btn-md" tabindex="8">Cancel</a> --}}
                                <button class="btn btn-primary btn-md" id="saveLead" tabindex="9">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="/assets/vendor_components/select2/dist/js/select2.min.js"></script>



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


                    $('#Customer_Name').val(response.customers.Customer_Name);
                    $('#POC_Name').val(response.customers.POC_Name);
                    $('#Contact_Number').val(response.customers.Contact_Number);
                    $('#Email').val(response.customers.Email);
                    $('#Industry').val(response.customers.Industry);
                    $('#Lead_Source_name').val(response.customers.Lead_Source);
                    $('#First_Contact_Date').val(response.customers.First_Contact_Date);
                    $('#id_update').val(response.customers.id);


                    // $('#pin').val(data.pincode);
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
                document.getElementById("myLeadform").action = "demo";


                document.getElementById('saveLead').innerHTML = "Save"; //changed From Update To save

                fetchcustomer();




            }






        }
    </script>


    <script>
        $('#select_customer').select2();
    </script>





    {{-- <script>
        $(document).on('click', '#okSave', function() {
            //alert('theer');
            $('#flag').val(1);
            $('#myLeadform').submit();

        })
    </script> --}}



@endsection
