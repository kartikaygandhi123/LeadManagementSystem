@section('viewtimeline')
   
                {{-- Timeline Tab --}}
                <div class="tab-pane pad" id="timeline" role="tabpanel">



                    {{-- Timeline Table --}}
                    <div class="box-header with-border">
                        <h4 class="box-title">Timeline</h4>
                        <h6 class="pull-right">
                            Stage : {{ $viewlead->stage }}
                        </h6>
                        <br>
                        <br>
                        <h6 class="pull-right">
                            Status : {{ $viewlead->Lead_Status }}
                        </h6>
                        <h6 class="box-subtitle text-white-50">Export data to Copy, CSV, Excel, PDF & Print</h6>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example"
                                class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                <thead>
                                    <tr>
                                        <th>Lead Id</th>
                                        <th>Lead Owner Id</th>
                                        <th>User Id</th>
                                        <th>Lead Status</th>
                                        <th>Lead Stage</th>
                                        <th>Message</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($leadlogdata as $log)
                                        <tr>

                                            <td>{{ $log->lead_id }}</td>

                                            <td>{{ $log->lead_owner_id }}</td>
                                            <td>{{ $log->user_id }}</td>
                                            <td>{{ $log->lead_status }}</td>
                                            <td>{{ $log->lead_stage }}</td>
                                            <td>{{ $log->message }}</td>
                                            <td>{{ $log->created_at }}</td>
                                            <td>{{ $log->updated_at }}</td>


                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Lead Id</th>
                                        <th>Lead Owner Id</th>
                                        <th>User Id</th>
                                        <th>Lead Status</th>
                                        <th>Lead Stage</th>
                                        <th>Message</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                
                
                @endsection
