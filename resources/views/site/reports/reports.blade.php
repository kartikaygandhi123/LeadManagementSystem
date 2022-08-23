@extends('layouts.mainLayout')

@section('content')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


    <div class="box box-solid box-primary">
        <div class="box-header with-border">
            <h4 class="box-title">Reports</h4>
        </div>

        <!-- /.box-header -->
        <div class="box-body">
            <div class="form-group pull-right" style="width: 20%">


                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input name="daterange" type="text" class="form-control pull-right" id="reservation" />
                </div>
                <!-- /.input group -->
            </div>





            <div class="table-responsive">
                <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>Stage</th>
                            <th>Lead_Status</th>
                            <th>Customer_Name</th>
                            <th>Contact_Number</th>
                            <th>POC_Name</th>
                            <th>Industry</th>
                            <th>Lead_Source</th>
                            <th>Email</th>
                            <th>First_Contact_Date</th>

                            <th>Created By</th>


                            <th>Reason For Lost</th>
                            <th>Reason For Dormant</th>
                            <th>Reason</th>
                        </tr>
                    </thead>
                    <tbody>


                    </tbody>

                </table>
            </div>
        </div>
        <!-- /.box-body -->
    </div>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script>
        $('input[name="daterange"]').daterangepicker();
        $('#reservation').on('apply.daterangepicker', function(ev, picker) {

            // console.log(picker.startDate.format('YYYY-MM-DD'));
            // console.log(picker.endDate.format('YYYY-MM-DD'));

            var start = picker.startDate.format('YYYY-MM-DD');
            var end = picker.endDate.format('YYYY-MM-DD');


            $.ajax({
                type: "Get",
                url: "/filterresult",
                data: {
                    start: start,
                    end: end,

                },
                dataType: "json",
                success: function(response) {
                    console.log(response);
                }
            });
        })
    </script>

@stop
