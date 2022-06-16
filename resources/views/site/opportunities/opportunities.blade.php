@extends('layouts.mainLayout')

@section('content')



<div class="box box-solid box-primary">
    <div class="box-header with-border">
      <h4 class="box-title">Opportunity Records</h4>
      <h6 class="box-subtitle text-white-50">Export data to Copy, CSV, Excel, PDF & Print</h6>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
            <thead>
                <tr>
                    <th>Action</th>
                    <th>Opportunity id</th>
                    <th>Brand/Company Name</th>
                    <th>Opportunity Owner</th>
                    <th>Opportunity Name</th>
                    <th>Monthly Revenue</th>
                    <th>Stage</th>
                    <th>Location</th>
                    <th>Closing Date</th>
                    <th>LOB</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Add/Edit</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                </tr>
                <tr>
                    <td>Add/Edit</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                </tr>
                
            </tbody>				  
            <tfoot>
                <tr>
                    <th>Action</th>
                    <th>Opportunity id</th>
                    <th>Brand/Company Name</th>
                    <th>Opportunity Owner</th>
                    <th>Opportunity Name</th>
                    <th>Monthly Revenue</th>
                    <th>Stage</th>
                    <th>Location</th>
                    <th>Closing Date</th>
                    <th>LOB</th>
                </tr>
            </tfoot>
        </table>
        </div>              
    </div>
    <!-- /.box-body -->
  </div>


@stop