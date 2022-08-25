@extends('layouts.mainLayout')

@section('content')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link href="/assets/vendor_components/select2/dist/css/select2.min.css" rel="stylesheet" />



    <div class="box box-solid box-primary">
        <div class="box-header with-border">
            <h4 class="box-title">Reports</h4>
        </div>

        <!-- /.box-header -->
        <div class="box-body">

            <div class="pull-right">
                <button id="filter_button" class="btn btn-sm btn-primary "><i class="fa fa-filter">Filters</i> </button>
                <br>
                <br>


            </div>

            {{-- ........................................................................................................................................................... --}}
            <div id="hidden_filters" class="box box-solid box-light" style="display:none">
                <form action="/filterresult" method="POST">
                    @csrf
                    <div class="row filter-row">
                        <div class="col-sm-6 col-md-2 col-lg-2">
                            <div class="form-group form-focus">
                                <label class="focus-label ">Customer Name</label>
                                <select class="select2 form-control floating" id="" name='name[]' multiple
                                    style="width: 100%">

                                    {{-- <option value="">-- Select --</option> --}}
                                    @foreach ($leads as $name)
                                        <option value="{{ $name->Customer_Name }}">{{ $name->Customer_Name }}</option>
                                    @endforeach
                                </select>


                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2 col-lg-2">
                            <div class="form-group form-focus select-focus">
                                <label class="focus-label">Stage</label>
                                <select class="select2 form-control floating" id="" name='stage[]' multiple
                                    style="width: 100%">

                                    {{-- <option value="">-- Select --</option> --}}
                                    @foreach ($stage as $stage)
                                        <option value="{{ $stage->stage }}">{{ $stage->stage }}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>

                        <div class="col-sm-6 col-md-2 col-lg-2">
                            <div class="form-group form-focus select-focus">
                                <label class="focus-label">Lead Source</label>
                                <select class="select2 form-control floating" id="" name="lead_source[]" multiple
                                    style="width: 100%">
                                    {{-- <option value="">Select --</option> --}}
                                    @foreach ($lead_source as $lead_source)
                                        <option value="{{ $lead_source->lead_source }}">{{ $lead_source->lead_source }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2 col-lg-2">
                            <div class="form-group form-focus select-focus">
                                <label class="focus-label">User</label>
                                <select class="select2 form-control floating" id="" name="user[]" multiple
                                    style="width: 100%;border-color:blue">
                                    {{-- <option value="">Select --</option> --}}
                                    @foreach ($user as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 col-lg-3">

                            <div class="form-group form-focus select-focus">
                                <label class="focus-label">DateRange</label>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>

                                    <input name="daterange" type="text" class="form-control pull-right"
                                        id="reservation" />
                                </div>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <input id="from" type="hidden" name="from">
                        <input id="to" type="hidden" name="to">

                        <div class="col-sm-6 col-md-1 col-lg-1">
                            <div class="form-group form-focus select-focus">
                                <label class="focus-label"><i class="fa fa-filter"></i></label>
                                <button type="submit" class="btn btn-sm btn-success w-fit-content">Search</button>
                            </div>
                        </div>



                    </div>
                </form>

            </div>







            <div class="table-responsive">
                <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                    <thead>
                        <tr>
                            {{-- <th>Action</th> --}}
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
                    <tbody class="tablebody">
                        @foreach ($leads as $item)
                            <tr>
                                {{-- <td>
                                        <a href="view_lead/{{ $item->id }}"><span class="ti-eye lg\:absolute "
                                                style="font-size:19px;color:#17a2b8;display:flex;justify-content:center"></span></a>

                                    </td> --}}
                                <td style="color: rgb(87, 209, 87)">{{ $item->stage }}</td>
                                <td>{{ $item['Lead_Status'] }}</td>
                                <td>{{ $item['Customer_Name'] }}</td>
                                <td>{{ $item['Contact_Number'] }}</td>
                                <td>{{ $item['POC_Name'] }}</td>
                                <td>{{ $item['Industry'] }}</td>
                                <td>{{ $item['Lead_Source'] }}</td>
                                <td>{{ $item['Email'] }}</td>
                                <td>{{ $item['First_Contact_Date'] }}</td>



                                <td>{{ $item['created_by_user']['name'] }}</td>


                                <td>{{ $item['lost_reason'] }}</td>
                                <td>{{ $item['dormant_reason'] }}</td>
                                <td>{{ $item['Reason'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
        <!-- /.box-body -->
    </div>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <script src="/assets/vendor_components/select2/dist/js/select2.min.js"></script>


    <script>
        $('#filter_button').on('click', function() {

            $('#hidden_filters').toggle();


        })
    </script>
    <script>
        $('.select2').select2({
            width: 'resolve'
        });
    </script>
    <script>
        $('input[name="daterange"]').daterangepicker();
        $('#reservation').on('apply.daterangepicker', function(ev, picker) {

            // console.log(picker.startDate.format('YYYY-MM-DD'));
            // console.log(picker.endDate.format('YYYY-MM-DD'));

            var start = picker.startDate.format('YYYY-MM-DD');
            var end = picker.endDate.format('YYYY-MM-DD');

            $('#from').val(start);
            $('#to').val(end);


        })
    </script>




@stop
