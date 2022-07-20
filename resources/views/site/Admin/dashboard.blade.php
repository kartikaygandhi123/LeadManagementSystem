@extends('layouts.mainLayout')

@section('content')
    <h3>Admin Dashboard</h3>
    <!--
            <div class="col-xl-3 col-md-6 col-6">
                
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

               -->

    {{-- {{ dd($leads) }}; --}}







    <section class="content">
        <div class="row">
            <div class="col-xl-3 col-md-6 col-12">
                <div class="box box-body bg-success">
                    <div class="flexbox">
                        {{-- <div id="spark1"></div> --}}
                        <span class="font-size-40 font-weight-200">{{ $leads }}</span>
                    </div>
                    <div class="text-right">Leads</div>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12">
                <div class="box box-body bg-danger">
                    <div class="flexbox">
                        {{-- <div id="spark2"></div> --}}
                        <span class="font-size-40 font-weight-200">{{ $stages }}</span>
                    </div>
                    <div class="text-right">Stages</div>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12">
                <div class="box box-body bg-warning">
                    <div class="flexbox">
                        {{-- <div id="spark3"></div> --}}
                        <span class="font-size-40 font-weight-200">{{ $industry }}</span>
                    </div>
                    <div class="text-right">Industries</div>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12">
                <div class="box box-body bg-info">
                    <div class="flexbox">
                        {{-- <div id="spark4"></div> --}}
                        <span class="font-size-40 font-weight-200">{{ $usercount }}</span>
                    </div>
                    <div class="text-right">Users</div>
                </div>
            </div>
            <!-- /.col -->
        </div>






    </section>

  


@stop
