@extends('layouts.mainLayout')

@section('content')



    <div class="box box-solid box-primary">
        <div class="box-header with-border">
            <h4 class="box-title">Brands</h4>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                    <thead>
                        <tr>
                            <th>Customer_Name</th>
                            <th>Contact_Number</th>
                            <th>Industry</th>
                            <th>Email</th>



                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($brand as $item)
                            <tr>
                                <td>{{ $item['Customer_Name'] }}</td>
                                <td>{{ $item['Contact_Number'] }}</td>
                                <td>{{ $item['Industry'] }}</td>
                                <td>{{ $item['Email'] }}</td>

                            </tr>
                        @endforeach


                    </tbody>

                </table>
            </div>
        </div>
        <!-- /.box-body -->
    </div>


@stop
