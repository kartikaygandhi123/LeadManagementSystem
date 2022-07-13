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
                                    <input id="Business_Requirements" type="text"
                                        class="form-control  @error('name') is-invalid @enderror" name="name"
                                        placeholder="Business Requirements" autocomplete="name" autofocus required>
                                    <span class="invalid-feedback" role="alert"><strong> @error('name')
                                                {{ $message }}
                                            @enderror </strong></span>

                                </div>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="Upload_Documents" class="col-sm-2 control-label">Upload Documents</label>
                            <div class="col-sm-10">
                                <input type="file" id="Upload_Documents">
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
                                        <option disabled>Select Lob</option>
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
                                        <option disabled>Select Services</option>
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
                                    <input class="form-control" type="number" value="" id="Area"
                                        placeholder="Area">
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
                                        <option disabled>Select Location</option>
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
                                        <option disabled>Select Business</option>
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
                                    <input class="form-control" type="number" value=""
                                        id="Expected_Monthy_Revenue">
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


                        <div class="form-group row">
                            <label for="EBDTA_Amount" class="col-sm-2 control-label">EBDTA Amount</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" value="" id="EBDTA_Amount">
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
