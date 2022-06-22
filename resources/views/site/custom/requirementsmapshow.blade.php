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

    <div class="box box-solid box-primary">
        <div class="box-header with-border">
            <h4 class="box-title">Business Requirements Mapping</h4>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal form-element">
            <div class="box-body">
                {{-- Business Requirements --}}
                <div class="form-group row">
                    <label for="Business_Requirements" class="col-sm-2 control-label">Business Requirements</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Business_Requirements"
                            placeholder="Business Requirements">
                    </div>
                </div>
                {{-- Upload Documents --}}
                <div class="form-group row">
                    <label for="Upload_Documents" class="col-sm-2 control-label">Upload Documents</label>
                    <div class="col-sm-10">
                        <input type="file" id="Upload_Documents">
                    </div>
                </div>

                {{-- LOB --}}

                <div class="form-group row">
                    <label for="LOB" class="col-sm-2 control-label">LOB</label>
                    <div class="col-sm-10">
                        <select id="LOB" class="form-control">
                            <option disabled>Select Lob</option>
                            <option>lob 1</option>
                            <option>lob 2</option>
                            <option>lob 3</option>
                            <option>lob 4</option>
                            <option>lob 5</option>
                        </select>
                    </div>
                </div>

                {{-- Services --}}

                <div class="form-group row">
                    <label for="Services" class="col-sm-2 control-label">Services</label>
                    <div class="col-sm-10">
                        <select id="Services" class="form-control">
                            <option disabled>Select Services</option>
                            <option>Service 1</option>
                            <option>Service 2</option>
                            <option>Service 3</option>
                            <option>Service 4</option>
                            <option>Service 5</option>
                        </select>
                    </div>
                </div>

                {{-- Area only for selective --}}

                <div class="form-group row">
                    <label for="Area" class="col-sm-2 control-label">Area</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="number" value="" id="Area" placeholder="Area">
                    </div>
                </div>

                {{-- Expected closure date --}}

                <div class="form-group row">
                    <label for="example-date-input" class="col-sm-2 control-label">Date</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="date" value="<?php echo date('Y-m-d'); ?>" id="example-date-input">
                    </div>
                </div>

                {{-- Location --}}

                <div class="form-group row">
                    <label for="Location" class="col-sm-2 control-label">Location</label>
                    <div class="col-sm-10">
                        <select id="Location" class="form-control">
                            <option disabled>Select Location</option>
                            <option>Location 1</option>
                            <option>Location 2</option>
                            <option>Location 3</option>
                            <option>Location 4</option>
                            <option>Location 5</option>
                        </select>
                    </div>
                </div>

                {{-- Business Type --}}

                <div class="form-group row">
                    <label for="Business" class="col-sm-2 control-label">Business</label>
                    <div class="col-sm-10">
                        <select id="Business" class="form-control">
                            <option disabled>Select Business</option>
                            <option>Business 1</option>
                            <option>Business 2</option>
                            <option>Business 3</option>
                            <option>Business 4</option>
                            <option>Business 5</option>
                        </select>
                    </div>
                </div>

                {{-- Expected Monthly revenue --}}

                <div class="form-group row">
                    <label for="Expected_Monthy_Revenue" class="col-sm-2 control-label">Expected Monthy Revenue</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="number" value="" id="Expected_Monthy_Revenue">
                    </div>
                </div>

                {{-- Expected Capex --}}

                <div class="form-group row">
                    <label for="Expected_Capex" class="col-sm-2 control-label">Expected Capex</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="number" value="" id="Expected_Capex">
                    </div>
                </div>

                {{-- EBDTA% --}}

                <div class="form-group row">
                    <label for="EBDTA%" class="col-sm-2 control-label">EBDTA%</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="number" value="" id="EBDTA">
                    </div>
                </div>

                {{-- EBDTA Amount (monthly revenue*EBDTA%) --}}

                <div class="form-group row">
                    <label for="EBDTA_Amount" class="col-sm-2 control-label">EBDTA Amount</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="number" value="" id="EBDTA_Amount">
                    </div>
                </div>

            </div>
            <!-- /.box-body -->
            <div class="box-footer" style="justify-content: center">
                <button type="submit" class="btn btn-default ">Cancel</button>
                <button type="submit" class="btn btn-info ">Sign in</button>
            </div>
            <!-- /.box-footer -->
        </form>
    </div>


    <script>
        document.getElementById("EBDTA").addEventListener('keyup', function() {

            var a = document.getElementById("Expected_Monthy_Revenue").value;

            var b = document.getElementById("EBDTA").value;
            var c = document.getElementById("EBDTA_Amount");
            c.value = a / b;


            console.log(c.value);

        })
    </script>
@endsection
