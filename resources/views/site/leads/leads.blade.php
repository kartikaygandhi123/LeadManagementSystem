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
            <p id="createleadbtn" class="pull-right"><button type="button" class="btn btn-light btn-md"
                    onclick="window.location.href = 'createleadshow';">

                    Create Lead<span><i class="fa fa-arrow-right ml-5"></i></span>

                </button></p>






        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table id="example" class="display table table-bordered table-hover  nowrap margin-top-10 w-p100">
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

                        @foreach ($leads as $item)
                            <tr>



                                <td>
                                    {{-- <a onclick="view_data('{{ $item->id }}')" data-toggle="modal"
                                            data-target="#modal-center"><span class="ti-eye"></span></a> --}}

                                    <a href="view_lead/{{ $item->id }}"><span class="ti-eye lg\:absolute"
                                            style="font-size:19px;color:#17a2b8"></span></a>
                                    {{-- <a onclick="return confirm('Are you sure you want to Delete?')"
                                        href="delete-lead/{{ $item->id }}"><span class="ti-close"
                                            style="font-size:19px;color:#dc3545"></a> --}}
                                </td>


                                <td style="color: rgb(87, 209, 87)">{{ $item['stage'] }}</td>
                                <td>{{ $item['Lead_Status'] }}</td>
                                <td>{{ $item['Customer_Name'] }}</td>
                                <td>{{ $item['Contact_Number'] }}</td>
                                <td>{{ $item['POC_Name'] }}</td>
                                <td>{{ $item['Industry'] }}</td>
                                <td>{{ $item['Lead_Source'] }}</td>
                                <td>{{ $item['Email'] }}</td>
                                <td>{{ $item['First_Contact_Date'] }}</td>



                                <td>{{ $item->created_by_user->name }}</td>


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




    <script>
        function view_data(id) {


            $.ajax({
                type: "GET",
                url: "view_lead?id=" + id,
                success: function(msg) {

                    $("#mymodalbody").html(msg);
                }
            });

        }
    </script>

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


    <script>
        $(document).ready(function() {
            // Setup - add a text input to each footer cell
            $('#example thead tr')
                .clone(true)
                .addClass('filters')
                .appendTo('#example thead');

            var table = $('#example').DataTable({
                orderCellsTop: true,
                fixedHeader: true,
                initComplete: function() {
                    var api = this.api();

                    // For each column
                    api
                        .columns()
                        .eq(0)
                        .each(function(colIdx) {
                            // Set the header cell to contain the input element
                            var cell = $('.filters th').eq(
                                $(api.column(colIdx).header()).index()
                            );
                            var title = $(cell).text();
                            if ($(api.column(colIdx).header()).index() >= 0) {
                                $(cell).html('<input type="text" placeholder="' + title + '"/>');
                            }


                            // On every keypress in this input
                            $(
                                    'input',
                                    $('.filters th').eq($(api.column(colIdx).header()).index())
                                )
                                .off('keyup change')
                                .on('change', function(e) {
                                    // Get the search value
                                    $(this).attr('title', $(this).val());
                                    var regexr =
                                        '({search})'; //$(this).parents('th').find('select').val();

                                    var cursorPosition = this.selectionStart;
                                    // Search the column for that value
                                    api
                                        .column(colIdx)
                                        .search(
                                            this.value != '' ?
                                            regexr.replace('{search}', '(((' + this.value +
                                                ')))') :
                                            '',
                                            this.value != '',
                                            this.value == ''
                                        )
                                        .draw();
                                })
                                .on('keyup', function(e) {
                                    e.stopPropagation();

                                    $(this).trigger('change');
                                    $(this)
                                        .focus()[0]
                                        .setSelectionRange(cursorPosition, cursorPosition);
                                });
                        });
                },
            });
        });
    </script>









@stop
