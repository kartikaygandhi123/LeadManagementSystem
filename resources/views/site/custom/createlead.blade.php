@extends('layouts.mainLayout') @section('content')
    {{-- Radio button --}}

    <div class="col-12">
        <div class="box box-solid box-primary">
            <div class="box-header with-border">
                <h4 class="box-title">Create Lead</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <div class="col-lg-3">
                    <hr class="d-lg-none">
                    <h5>Select Customer</h5>

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button"
                            data-toggle="dropdown">Select</button>
                        <div class="dropdown-menu">

                            <label class="dropdown-item" onclick='check()'>Holiscope</label>
                            <a class="dropdown-item" href="#">Holiscope</a>
                            <a class="dropdown-item" href="#">Holisol</a>
                            <a class="dropdown-item" href="#">Saprootz</a>
                            <div class="dropdown-divider"></div>
                            <button class="dropdown-item bg-red" id="create_new_customer">Create New Customer</button>
                        </div>
                    </div>

                    <br><br><br><br><br><br>
                </div>


                {{-- <select  class="select2" >
                @for ($i = 1; $i <= 5; $i++)
                <option>option {{$i}}</option>
                @endfor
                <option id="create_new_customer">Create New Customer</option>
              </select> --}}







                {{-- <div class="demo-radio-button">
             <input
                    name="group1"
                    type="radio"
                    class="with-gap"
                    id="radio_3"
                />
                <label for="radio_3">Existing Customer</label>
                <input
                    name="group1"
                    type="radio"
                    id="radio_4"
                    class="with-gap"
                />
                <label for="radio_4">New Customer</label>
                
            </div> --}}
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <div id="check"></div>
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
                    <form method="post" id="myLeadform" name="myform" action="newcustomer">
                        @csrf
                        <input type="hidden" name="flag_id" id="flag" />
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
                                                                        <label for="Customer Name"
                                                                            class="col-form-label">Customer
                                                                            Name<span
                                                                                style="
                                                                                color: red;
                                                                            ">*</span></label>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <input
                                                                            name="Customer
                                                                        Name"
                                                                            type="text" class="form-control"
                                                                            id="Customer
                                                                        Name"
                                                                            tabindex="1" pattern="[a-zA-Z\s]+" required />
                                                                        <span class="error"
                                                                            style="
                                                                            color: red;
                                                                        ">
                                                                            <p
                                                                                id="customer
                                                                            Name">
                                                                            </p>
                                                                        </span>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row mb-4">
                                                                    <div class="col-md-5 alnright"
                                                                        style="
                                                                        text-align: right;
                                                                    ">
                                                                        <label
                                                                            for="POC
                                                                        Name"
                                                                            class="col-form-label">POC
                                                                            Name<span
                                                                                style="
                                                                                color: red;
                                                                            ">*</span></label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input
                                                                            name="POC
                                                                        Name"
                                                                            type="text" class="form-control"
                                                                            id="POC
                                                                        Name"
                                                                            tabindex="3" pattern="[a-zA-Z\s]+" required />
                                                                        <span class="error"
                                                                            style="
                                                                            color: red;
                                                                        ">
                                                                            <p
                                                                                id="poc
                                                                            Name">
                                                                            </p>
                                                                        </span>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row mb-4">
                                                                    <div class="col-md-5 alnright"
                                                                        style="
                                                                        text-align: right;
                                                                    ">
                                                                        <label
                                                                            for="Contact
                                                                        Number"
                                                                            class="col-form-label">Contact
                                                                            Number<span
                                                                                style="
                                                                                color: red;
                                                                            ">*</span></label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="number"
                                                                            name="Contact
                                                                        Number"
                                                                            class="form-control"
                                                                            id="Contact
                                                                        Number"
                                                                            tabindex="5" maxlength="10"
                                                                            pattern="[1-9]{1}[0-9]{6}[0-9]{3} " required />
                                                                        <span class="error"
                                                                            style="
                                                                            color: red;
                                                                        ">
                                                                            <p
                                                                                id="contact
                                                                            Number">
                                                                            </p>
                                                                        </span>
                                                                        @if ($errors->first('phone_number'))
                                                                            <span class="error"
                                                                                style="
                                                                            color: red;
                                                                        ">
                                                                                {{ $errors->first('phone_number') }}
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
                                                                    {{-- <div
                                                                    class="col-md-5 alnright"
                                                                    style="
                                                                        text-align: right;
                                                                    "
                                                                >
                                                                    <label
                                                                        for="lead_owner"
                                                                        class="col-form-label"
                                                                        >Lead
                                                                        Owner
                                                                        <span
                                                                            style="
                                                                                color: red;
                                                                            "
                                                                            >*</span
                                                                        ></label
                                                                    >
                                                                </div> --}} {{-- <div
                                                                    class="col-md-6"
                                                                >
                                                                    <select
                                                                        name="owner_id"
                                                                        id="owner"
                                                                        class="form-control select2"
                                                                        tabindex="2"
                                                                        required
                                                                    >
                                                                        <option
                                                                            value=""
                                                                        >
                                                                            -None-
                                                                        </option>
                                                                    </select>
                                                                </div> --}}
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
                                                                            class="form-control select2" tabindex="4"
                                                                            required>
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
                                                                        <label
                                                                            for="Lead
                                                                        Source"
                                                                            class="col-form-label">Lead
                                                                            Source
                                                                            <span
                                                                                style="
                                                                                color: red;
                                                                            ">*</span></label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <select name="lead_source_id"
                                                                            id="Lead
                                                                        Source"
                                                                            class="form-control select2" tabindex="6"
                                                                            required>
                                                                            <option value>
                                                                                -None-
                                                                            </option>

                                                                            @foreach ($leadsource as $leadsource)
                                                                                <option
                                                                                    value=" {{ $leadsource['lead_source'] }}">
                                                                                    {{ $leadsource['lead_source'] }}
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
                                                                        <label
                                                                            for="First
                                                                        Contact
                                                                        Date"
                                                                            class="col-form-label">First
                                                                            Contact
                                                                            Date<span
                                                                                style="
                                                                                color: red;
                                                                            ">*</span></label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input
                                                                            name="First
                                                                        Contact
                                                                        Date"
                                                                            type="date" class="form-control"
                                                                            id="First
                                                                        Contact
                                                                        Date"
                                                                            tabindex="3" required />
                                                                        <span class="error"
                                                                            style="
                                                                            color: red;
                                                                        ">
                                                                            <p
                                                                                id="first
                                                                            Contact
                                                                            Date">
                                                                            </p>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <!-- <div class="form-group row mb-4">
                                                                                            <div class="col-md-5 alnright" style="text-align: right;">
                                                                                                <label for="location" class="col-form-label">Location</label>
                                                                                            </div>
                                                                                            <div class="input-group col-md-6">
                                                                                                <select name="cities_id" id="cities_id" class="form-control select2" tabindex="10">
                                                                                                <option value="">-None-</option>
                                                                                                   
                                                                                                </select>
                                                                                                <div class="input-group-append">
                                                                                                    <span class="input-group-text square" data-toggle="modal" data-target="#modal2"><i class="fas fa-th-large"></i></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>-->
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
                        <div class="form-actions">
                            <div class="text-right" id="hidelead">
                                <a href="#" class="btn btn-default btn-md" tabindex="8">Cancel</a>
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




    <script>
        function check() {
            console.log("checked");
            let gud = document.getElementById("newcustomerform").innerHTML;
            console.log(gud);
            a.style.display = "none";
            document.getElementById('check').style.display = "block";
            document.getElementById('check').innerHTML = gud;
            document.getElementById('form_heading').innerHTML = "Existing Customer";
        }
        var a = document.getElementById("newcustomerform");
        var c = document.getElementById("create_new_customer");

        c.addEventListener("click", function() {
            console.log("clicked");
            a.style.display = "block";
            document.getElementById('check').style.display = "none";
        });
    </script>



    <script>
        // var date = new Date()
        // var day = date.getDate();
        // var month = date.getMonth()+1;
        // var year = date.getFullYear();

        // var fullDate = `${day}.${month}.${year}.`;
        // console.log(fullDate);
    </script>
@endsection
