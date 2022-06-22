@extends('layouts.mainLayout')

@section('content')



    <div class="box box-solid box-primary">
        <div class="box-header with-border">
            <h4 class="box-title">Leads</h4>
            <h6 class="box-subtitle text-white-50">Export data to Copy, CSV, Excel, PDF & Print</h6>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                    <thead>
                        <tr>
                            <th>Customer_Name</th>
                            <th>Contact_Number</th>
                            <th>POC_Name</th>
                            <th>Industry</th>
                            <th>Lead_Source</th>
                            <th>Email</th>
                            <th>First_Contact_Date</th>
                            <th>Lead_Status</th>
                            <th>Stage</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($leads as $item)
                            <tr>
                                <td>{{ $item['Customer_Name'] }}</td>
                                <td>{{ $item['Contact_Number'] }}</td>
                                <td>{{ $item['POC_Name'] }}</td>
                                <td>{{ $item['Industry'] }}</td>
                                <td>{{ $item['Lead_Source'] }}</td>
                                <td>{{ $item['Email'] }}</td>
                                <td>{{ $item['First_Contact_Date'] }}</td>
                                <td>{{ $item['Lead_Status'] }}</td>
                                <td>{{ $item['stage'] }}</td>
                            </tr>
                        @endforeach


                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Customer_Name</th>
                            <th>Contact_Number</th>
                            <th>POC_Name</th>
                            <th>Industry</th>
                            <th>Lead_Source</th>
                            <th>Email</th>
                            <th>First_Contact_Date</th>
                            <th>Lead_Status</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <!-- /.box-body -->
    </div>


@stop
