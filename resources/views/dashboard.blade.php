@extends('layouts.mainLayout')

@section('content')
    <h3>Lead Stages</h3>





    <section class="content">
        <div class="row">
            <div class="col-xl-3 col-md-6 col-12">
                <div class="box box-body bg-success">
                    <div class="flexbox">
                        {{-- <div id="spark1"></div> --}}
                        <span class="font-size-40 font-weight-200">{{ isset($stage['Lead']) ? $stage['Lead'] : 0 }}</span>
                    </div>
                    <div class="text-right">Lead</div>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12">
                <div class="box box-body bg-danger">
                    <div class="flexbox">
                        {{-- <div id="spark2"></div> --}}
                        <span
                            class="font-size-40 font-weight-200">{{ isset($stage['Requirements Mapping']) ? $stage['Requirements Mapping'] : 0 }}</span>
                    </div>
                    <div class="text-right">Requirements Mapping</div>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12">
                <div class="box box-body bg-info">
                    <div class="flexbox">
                        {{-- <div id="spark3"></div> --}}
                        <span
                            class="font-size-40 font-weight-200">{{ isset($stage['Proposal']) ? $stage['Proposal'] : 0 }}</span>
                    </div>
                    <div class="text-right">Proposal</div>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12">
                <div class="box box-body bg-warning">
                    <div class="flexbox">
                        {{-- <div id="spark4"></div> --}}
                        <span
                            class="font-size-40 font-weight-200">{{ isset($stage['Negotiation']) ? $stage['Negotiation'] : 0 }}</span>
                    </div>
                    <div class="text-right">Negotiation</div>
                </div>
            </div>
            <!-- /.col -->
        </div>


        <div class="row">

            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12">
                <div class="box box-body bg-info">
                    <div class="flexbox">
                        {{-- <div id="spark2"></div> --}}
                        <span
                            class="font-size-40 font-weight-200">{{ isset($stage['Agreement']) ? $stage['Agreement'] : 0 }}</span>
                    </div>
                    <div class="text-right">Agreement</div>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12">
                <div class="box box-body bg-success">
                    <div class="flexbox">
                        {{-- <div id="spark3"></div> --}}
                        <span
                            class="font-size-40 font-weight-200">{{ isset($stage['Business Onboarded']) ? $stage['Business Onboarded'] : 0 }}</span>
                    </div>
                    <div class="text-right">Busines Onboarded</div>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12">
                <div class="box box-body bg-danger">
                    <div class="flexbox">
                        {{-- <div id="spark4"></div> --}}
                        <span class="font-size-40 font-weight-200">{{ isset($stage['Lost']) ? $stage['Lost'] : 0 }}</span>
                    </div>
                    <div class="text-right">Lost</div>
                </div>
            </div>
            <!-- /.col -->

            <div class="col-xl-3 col-md-6 col-12">
                <div class="box box-body bg-danger">
                    <div class="flexbox">
                        {{-- <div id="spark2"></div> --}}
                        <span
                            class="font-size-40 font-weight-200">{{ isset($stage['Dormant']) ? $stage['Dormant'] : 0 }}</span>
                    </div>
                    <div class="text-right">Dormant</div>
                </div>
            </div>
        </div>




    </section>




@stop
