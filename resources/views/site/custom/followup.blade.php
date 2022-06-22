@extends('layouts.mainLayout')

@section('content')
    {{-- {{ dd($data) }}; --}}
    <div class="box box-solid box-primary">
        <div class="box-header with-border">
            <h4 class="box-title">Follow-Up</h4>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="/sendhtmlemail" method="POST" enctype="multipart/form-data" class="form-horizontal form-element">
            @csrf
            <div class="box-body">

                <div class="form-group">



                    <!-- /.input group -->

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-5 col-form-label">Remarks:</label>
                        <div class="col-sm-10">
                            {{-- <input class="form-control" type="text" value="Johen Doe" id="example-text-input"> --}}
                            <textarea class="form-control" type="text" value="" name="remarks" id="Remarks"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-date-input" class="col-sm-5 col-form-label">Follow-Up Date</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" value="<?php echo date('Y-m-d'); ?>" name="date"
                                id="Follow_Up_Date">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-info ">Schedule Mail</button>
                {{-- <button type="submit" class="btn btn-default">Cancel</button> --}}

            </div>
            <!-- /.box-footer -->

        </form>
    </div>





    <script>
        document.getElementById('stage').style.display = "block";
        document.getElementById('notificationbell').style.display = "block";
        document.getElementById('stage').innerHTML = `<p>{{ $data->stage }}</p>`;
    </script>
@endsection
