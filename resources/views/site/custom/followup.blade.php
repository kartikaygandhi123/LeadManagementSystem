@extends('layouts.mainLayout')

@section('content')
    @if (session('success'))
        <div class="col-sm-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @endif



    <div class="box box-solid box-primary">
        <div class="box-header with-border">
            <h4 class="box-title">Follow-Up</h4>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="savefollowup" method="POST" enctype="multipart/form-data" class="form-horizontal form-element">
            @csrf
            <div class="box-body">

                <div class="form-group">



                    <!-- /.input group -->

                    <div class="form-group row">
                        <input type="hidden" value="{{ $data->id }}" name="id">

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
