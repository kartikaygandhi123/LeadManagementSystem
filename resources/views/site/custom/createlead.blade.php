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


    {{-- select customer dropdown --}}
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
    <div id="append_form" class="box box-solid box-primary"></div>
    {{-- Appending through Javascript --}}





    {{-- first page form --}}
    <div style="display: none" id="newcustomerform" class="box box-solid box-primary">
        <div class="box-header with-border">
            <h2 id="form_heading" class="box-title">New Customer</h2>
        </div>

        <div>
            <!-- /.card-header -->
            <!-- form start -->



            <form method="post" id="myLeadform" name="myform" action="followupshow" class="form-horizontal form-element">
                @csrf


                <input type="hidden" name="flag_id" id="flag" />
                <input type="hidden" name="id" id="id_update" />
                <div class="box-body">
                    <div class="form-group row">
                        <label for="Customer_Name" class="col-sm-2 control-label">Customer_Name<span
                                style="color: red">*</span></label>

                        <div class="col-sm-10">
                            <input name="Customer_Name" type="text" class="form-control" id="Customer_Name"
                                tabindex="1" pattern="[a-zA-Z\s\[1-9]{1}[0-9]{6}[0-9]{3}]+" required />
                            <span class="error" style="color: red;">
                                <p id="customer_Name"> </p>
                            </span>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="POC_Name" class="col-sm-2 control-label">POC_Name<span
                                style="color: red;">*</span></label>
                        <div class="col-sm-10">
                            <input name="POC_Name" type="text" class="form-control" id="POC_Name" tabindex="3"
                                pattern="[a-zA-Z\s]+" required /><span class="error" style="color: red;">
                                <p id="poc_Name"> </p>
                            </span>
                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="Contact_Number" class="col-sm-2 control-label">Contact_Number<span
                                style="color: red;">*</span></label>
                        <div class="col-sm-10">
                            <input type="number" name="Contact_Number" class="form-control" id="Contact_Number"
                                tabindex="5" maxlength="10" pattern="[1-9]{1}[0-9]{6}[0-9]{3} " required />
                            <span class="error" style="color: red;">
                                <p id="contact_Number"> </p>
                            </span>
                            @if ($errors->first('Contact_Number'))
                                <span class="error" style="color: red;">{{ $errors->first('Contact_Number') }}</span>
                            @endif
                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="Email" class="col-sm-2 control-label">Email<span style="color: red;">*</span></label>
                        <div class="col-sm-10">
                            <input type="email" name="Email" class="form-control" id="Email" tabindex="7"
                                required /><span class="error" style="color: red;">
                                <p id="email"></p>
                            </span>
                            @if ($errors->first('email'))
                                <span class="error" style="color: red;">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>




                    <div class="form-group row">
                        <label for="Industry" class="col-sm-2 control-label">Industry<span
                                style="color: red;">*</span></label>
                        <div class="col-sm-10">
                            <select name="Industry" id="Industry" class="form-control  " tabindex="7" required>
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




                    <div class="form-group row">
                        <label for="Lead_Source_name" class="col-sm-2 control-label">Lead_Source_name<span
                                style="color: red;">*</span></label>
                        <div class="col-sm-10">
                            <select name="Lead_Source_name" id="Lead_Source_name" class="form-control  " required>
                                <option value="">
                                    -None-
                                </option>
                                @foreach ($leadsource as $lead)
                                    <option value="{{ $lead->lead_source }}">{{ $lead->lead_source }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="First_Contact_Date" class="col-sm-2 control-label">First_Contact_Date<span
                                style="color: red;">*</span></label>
                        <div class="col-sm-10">
                            <input name="First_Contact_Date" type="date" class="form-control" id="First_Contact_Date"
                                tabindex="3" required value="<?php echo date('Y-m-d'); ?>" />
                            <span class="error" style="color: red;">
                                <p id="first_Contact_Date"></p>
                            </span>
                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="Lead_Status" class="col-sm-2 control-label">Lead Status<span
                                style="color: red;">*</span></label>
                        <div class="col-sm-10">
                            <select name="Lead_Status" id="Lead_Status" class="form-control select2" tabindex="4"
                                required>
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



    {{-- first page form --}}
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
        // $('#Lead_Source_name').select2();
        // $('#Industry').select2();
    </script>
@endsection
