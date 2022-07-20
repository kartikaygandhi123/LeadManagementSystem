@extends('layouts.mainLayout')

@section('content')

    <style>
        #createleadbtn :hover {

            background-color: white;

        }
    </style>


    <div class="box box-solid box-primary">
        <div class="box-header with-border">
            <h4 class="box-title">Leads</h4>
            {{-- <p id="createleadbtn" class="pull-right"><button type="button" class="btn btn-light btn-sm"
                    onclick="window.location.href = 'createleadshow';">
                    <h5>Create Lead<i class="fa fa-arrow-right ml-5"></i></h5>
                </button></p> --}}





            <h6 class="box-subtitle text-white-50">Export data to Copy, CSV, Excel, PDF & Print</h6>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                    <thead>
                        <tr>
                            <th>Action</th>

                            <th>Customer_Name</th>
                            <th>Contact_Number</th>
                            <th>POC_Name</th>
                            <th>Industry</th>
                            <th>Lead_Source</th>
                            <th>Email</th>
                            <th>First_Contact_Date</th>
                            <th>Lead_Status</th>
                            <th>Created By</th>

                            <th>Stage</th>
                            <th>Reason For Lost</th>
                            <th>Reason For Dormant</th>
                            <th>Reason</th>


                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($leads as $item)
                            <tr>



                                <td>
                                    {{-- <a onclick="view_data('{{ $item->id }}')" data-toggle="modal"
                                            data-target="#modal-center"><span class="ti-eye"></span></a> --}}

                                    <a href="view_lead_legal/{{ $item->id }}"><span
                                            class="ti-eye lg\:absolute"></span></a>

                                    <!--                                        <a onclick="Edit_Lead('{{ $item->id }}')" data-toggle="modal"
                                                                                                                    data-target="#modal-center1"><span class="ti-write"></span></a>-->



                                    <a onclick="return confirm('Are you sure you want to Delete?')"
                                        href="delete-lead/{{ $item->id }}"><span class="ti-close"></button>
                                </td>



                                <td>{{ $item['Customer_Name'] }}</td>
                                <td>{{ $item['Contact_Number'] }}</td>
                                <td>{{ $item['POC_Name'] }}</td>
                                <td>{{ $item['Industry'] }}</td>
                                <td>{{ $item['Lead_Source'] }}</td>
                                <td>{{ $item['Email'] }}</td>
                                <td>{{ $item['First_Contact_Date'] }}</td>


                                <td>{{ $item['Lead_Status'] }}</td>
                                <td>{{ $item->created_by_user->name }}</td>
                                <td style="color: rgb(87, 209, 87)">{{ $item['stage'] }}</td>

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



    {{-- view modal --}}
    <div class="modal center-modal fade" id="modal-center" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Customer Details</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="mymodalbody" class="modal-body">
                    {{-- Appending through Ajax --}}
                </div>
                <div class="modal-footer modal-footer-uniform">
                    {{-- <button type="button" class="btn btn-bold btn-pure btn-secondary pull-right"
                        data-dismiss="modal">Close</button> --}}

                </div>
            </div>
        </div>
    </div>

    <div class="modal center-modal fade" id="modal-center1" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Details</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="myEditmodalbody" class="modal-body">
                    {{-- Appending through Ajax --}}
                </div>
                <div class="modal-footer modal-footer-uniform">
                    {{-- <button type="button" class="btn btn-bold btn-pure btn-secondary pull-right"
                        data-dismiss="modal">Close</button> --}}

                </div>
            </div>
        </div>
    </div>




    {{-- <script>
        function view_data(id) {


            $.ajax({
                type: "GET",
                url: "view_lead?id=" + id,
                success: function(msg) {

                    $("#mymodalbody").html(msg);
                }
            });

        }
    </script> --}}

    <script>
        function Edit_Lead(id) {


            $.ajax({
                type: "GET",
                url: "edit_lead?id=" + id,
                success: function(msg) {

                    $("#myEditmodalbody").html(msg);
                }
            });

        }
    </script>













@stop
