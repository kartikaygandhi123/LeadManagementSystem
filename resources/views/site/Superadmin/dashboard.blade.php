@extends('layouts.mainLayout')

@section('content')
    <h3>Super Admin Dashboard</h3>
    <div class="col-xl-3 col-md-6 col-6">
        <!-- small box -->
        <div class="small-box bg-primary">
            <div class="inner">
                {{-- <h4>Create Lead</h4> --}}
                <p>
                <div class="btn-group-vertical">

                    <button type="button" class="btn btn-primary " onclick="window.location.href = 'createleadshow';">
                        <h5>Create Lead<i class="fa fa-arrow-right ml-5"></i></h5>
                    </button>

                </div>



                </p>
            </div>
            <div class="icon">
                <i class="fa fa-user-plus"></i>
            </div>
            <a href="createleadshow" class="small-box-footer"> <i class="fa fa-arrow-right"></i></a>
        </div>
    </div>


    {{-- {{ dd($leads) }}; --}}







    <section class="content">
        <div class="row">
            <div class="col-xl-3 col-md-6 col-12">
                <div class="box box-body bg-primary">
                    <div class="flexbox">
                        <div id="spark1"></div>
                        <span class="font-size-40 font-weight-200">{{ $leads }}</span>
                    </div>
                    <div class="text-right">Leads</div>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12">
                <div class="box box-body bg-danger">
                    <div class="flexbox">
                        <div id="spark2"></div>
                        <span class="font-size-40 font-weight-200">{{ $stages }}</span>
                    </div>
                    <div class="text-right">Stages</div>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12">
                <div class="box box-body bg-warning">
                    <div class="flexbox">
                        <div id="spark3"></div>
                        <span class="font-size-40 font-weight-200">{{ $industry }}</span>
                    </div>
                    <div class="text-right">Industries</div>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12">
                <div class="box box-body bg-info">
                    <div class="flexbox">
                        <div id="spark4"></div>
                        <span class="font-size-40 font-weight-200">16,568</span>
                    </div>
                    <div class="text-right">Income</div>
                </div>
            </div>
            <!-- /.col -->
        </div>






    </section>

    {{-- Leads --}}
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

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($leadsname as $item)
                            <tr>
                                <td>{{ $item['Customer_Name'] }}</td>
                                <td>{{ $item['Contact_Number'] }}</td>
                                <td>{{ $item['POC_Name'] }}</td>
                                <td>{{ $item['Industry'] }}</td>
                                <td>{{ $item['Lead_Source'] }}</td>
                                <td>{{ $item['Email'] }}</td>
                                <td>{{ $item['First_Contact_Date'] }}</td>
                                <td>{{ $item['Lead_Status'] }}</td>
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
