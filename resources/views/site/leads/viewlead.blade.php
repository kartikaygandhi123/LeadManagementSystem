<div class="box box-default">
    {{-- <div class="box-header with-border">
        <h4 class="box-title">Customer Details</h4>

    </div> --}}
    <!-- /.box-header -->
    <div class="box-body">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab"><span
                        class="hidden-sm-up"><i class="ion-home"></i></span> <span
                        class="hidden-xs-down">Details</span></a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab"><span
                        class="hidden-sm-up"><i class="ion-person"></i></span> <span
                        class="hidden-xs-down">Stage</span></a> </li>

        </ul>
        <!-- Tab panes -->
        <div class="tab-content tabcontent-border">
            <div class="tab-pane active" id="home" role="tabpanel">
                <div class="pad">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <b> Customer Name : </b>
                                </div>

                                <div class="col-md-6">

                                    {{ $viewlead->Customer_Name }}
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">

                                    <b> Contact Number: </b>
                                </div>
                                <div class="col-md-6">
                                    {{ $viewlead->Contact_Number }}
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <b> POC Name : </b>
                                </div>

                                <div class="col-md-6">

                                    {{ $viewlead->POC_Name }}
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <b> Industry: </b>
                                </div>
                                <div class="col-md-6">
                                    {{ $viewlead->Industry }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <b> Lead Source : </b>
                                </div>

                                <div class="col-md-6">

                                    {{ $viewlead->Lead_Source }}
                                </div>
                            </div>
                        </div>
                    </div>







                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <b> Email : </b>
                                </div>

                                <div class="col-md-6">

                                    {{ $viewlead->Email }}
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">

                                    <b> First Contact Date: </b>
                                </div>
                                <div class="col-md-6">
                                    {{ $viewlead->First_Contact_Date }}
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <b> Lead Status : </b>
                                </div>

                                <div class="col-md-6">

                                    {{ $viewlead->Lead_Status }}
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <b> Created By: </b>
                                </div>
                                <div class="col-md-6">
                                    {{ $viewlead->created_by_user->name }}
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="tab-pane pad" id="profile" role="tabpanel">



                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">

                                <b> Current Stage: </b>
                            </div>
                            <div class="col-md-6">
                                <span style="background-color:#007bff;color:white;padding:10px">
                                    {{ $viewlead->stage }}</span>
                            </div>

                        </div>
                    </div>
                </div>



            </div>

        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
