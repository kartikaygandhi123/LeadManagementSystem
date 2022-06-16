@extends('layouts.mainLayout')

@section('content')

<section class="content-header">
    <h1>
      Contacts
    </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#"><i class="iconsmind-Library"></i></a></li>
      {{-- <li class="breadcrumb-item"><a href="#">Examples</a></li> --}}
      <li class="breadcrumb-item active">Contacts</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      {{-- <div class="col-12">
          <div class="box bg-pale-secondary box-outline-dark">
              <div class="box-body">
                <div class="contact-page-aside">
                  <ul class="list-style-none list-inline font-size-16">
                      <li class="box-label"><a href="javascript:void(0)">All Contacts <span>123</span></a></li>
                      <li><a href="javascript:void(0)">Work <span>103</span></a></li>
                      <li><a href="javascript:void(0)">Family <span>19</span></a></li>
                      <li><a href="javascript:void(0)">Friends <span>623</span></a></li>
                      <li><a href="javascript:void(0)">Private <span>53</span></a></li>
                      <li class="box-label float-right"><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" class="btn btn-primary text-white mt-10">+ Create New Label</a></li>
                  </ul>
                  
                      <div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h4 class="modal-title" id="myModalLabel">Add Lable</h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                  </div>
                                  <div class="modal-body">
                                      <from class="form-horizontal">
                                          <div class="form-group">
                                              <label class="col-md-12">Name of Label</label>
                                              <div class="col-md-12">
                                                  <input type="text" class="form-control" placeholder="type name"> </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-md-12">Select Number of people</label>
                                              <div class="col-md-12">
                                                  <select class="form-control">
                                                      <option>All Contacts</option>
                                                      <option>10</option>
                                                      <option>20</option>
                                                      <option>30</option>
                                                      <option>40</option>
                                                      <option>Custome</option>
                                                  </select>
                                              </div>
                                          </div>
                                      </from>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-info" data-dismiss="modal">Save</button>
                                      <button type="button" class="btn btn-default float-right" data-dismiss="modal">Cancel</button>
                                  </div>
                              </div>
                              <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                      </div>
              </div>
            </div>
          </div>
        <!-- /. box -->
      </div> --}}
      <!-- /.col -->
      <div class="col-12">
        <div class="box box-solid bg-primary">
              <div class="box-header with-border">
                <h4 class="box-title">Contacts / Employee List</h4>
              </div>
          <div class="box-body">
            <div class="table-responsive">
              <table id="employeelist" class="table table-hover no-wrap" data-page-size="10">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Role</th>
                          <th>Age</th>
                          <th>Joining date</th>
                          <th>Salery</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td>
                              <a href="profile.html"><img src="../../../images/avatar/1.jpg" alt="user" class="avatar avatar-sm mr-5" /> Genelia Deshmukh</a>
                          </td>
                          <td>genelia@gmail.com</td>
                          <td>+123 456 789</td>
                          <td><span class="label label-danger">Designer</span> </td>
                          <td>23</td>
                          <td>12-10-2014</td>
                          <td>$1200</td>
                          <td>
                              <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                          </td>
                      </tr>
                      <tr>
                          <td>2</td>
                          <td>
                              <a href="profile.html"><img src="../../../images/avatar/2.jpg" alt="user" class="avatar avatar-sm mr-5" /> Arijit Singh</a>
                          </td>
                          <td>arijit@gmail.com</td>
                          <td>+234 456 789</td>
                          <td><span class="label label-info">Developer</span> </td>
                          <td>26</td>
                          <td>10-09-2014</td>
                          <td>$1800</td>
                          <td>
                              <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                          </td>
                      </tr>
                      <tr>
                          <td>3</td>
                          <td>
                              <a href="profile.html"><img src="../../../images/avatar/3.jpg" alt="user" class="avatar avatar-sm mr-5" /> Govinda jalan</a>
                          </td>
                          <td>govinda@gmail.com</td>
                          <td>+345 456 789</td>
                          <td><span class="label label-success">Accountant</span></td>
                          <td>28</td>
                          <td>1-10-2013</td>
                          <td>$2200</td>
                          <td>
                              <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                          </td>
                      </tr>
                      <tr>
                          <td>4</td>
                          <td>
                              <a href="profile.html"><img src="../../../images/avatar/4.jpg" alt="user" class="avatar avatar-sm mr-5" /> Hritik Roshan</a>
                          </td>
                          <td>hritik@gmail.com</td>
                          <td>+456 456 789</td>
                          <td><span class="label label-inverse">HR</span></td>
                          <td>25</td>
                          <td>2-10-2017</td>
                          <td>$200</td>
                          <td>
                              <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                          </td>
                      </tr>
                      <tr>
                          <td>5</td>
                          <td>
                              <a href="profile.html"><img src="../../../images/avatar/5.jpg" alt="user" class="avatar avatar-sm mr-5" /> John Abraham</a>
                          </td>
                          <td>john@gmail.com</td>
                          <td>+567 456 789</td>
                          <td><span class="label label-danger">Manager</span></td>
                          <td>23</td>
                          <td>10-9-2015</td>
                          <td>$1200</td>
                          <td>
                              <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                          </td>
                      </tr>
                      <tr>
                          <td>6</td>
                          <td>
                              <a href="profile.html"><img src="../../../images/avatar/6.jpg" alt="user" class="avatar avatar-sm mr-5" /> Pawandeep kumar</a>
                          </td>
                          <td>pawandeep@gmail.com</td>
                          <td>+678 456 789</td>
                          <td><span class="label label-warning">Chairman</span></td>
                          <td>29</td>
                          <td>10-5-2013</td>
                          <td>$1500</td>
                          <td>
                              <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                          </td>
                      </tr>
                      <tr>
                          <td>7</td>
                          <td>
                              <a href="profile.html"><img src="../../../images/avatar/7.jpg" alt="user" class="avatar avatar-sm mr-5" /> Ritesh Deshmukh</a>
                          </td>
                          <td>ritesh@gmail.com</td>
                          <td>+123 456 789</td>
                          <td><span class="label label-danger">Designer</span></td>
                          <td>35</td>
                          <td>05-10-2012</td>
                          <td>$3200</td>
                          <td>
                              <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                          </td>
                      </tr>
                      <tr>
                          <td>8</td>
                          <td>
                              <a href="profile.html"><img src="../../../images/avatar/8.jpg" alt="user" class="avatar avatar-sm mr-5" /> Salman Khan</a>
                          </td>
                          <td>salman@gmail.com</td>
                          <td>+234 456 789</td>
                          <td><span class="label label-info">Developer</span></td>
                          <td>27</td>
                          <td>11-10-2014</td>
                          <td>$1800</td>
                          <td>
                              <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                          </td>
                      </tr>
                      <tr>
                          <td>9</td>
                          <td>
                              <a href="profile.html"><img src="../../../images/avatar/1.jpg" alt="user" class="avatar avatar-sm mr-5" /> Govinda jalan</a>
                          </td>
                          <td>govinda@gmail.com</td>
                          <td>+345 456 789</td>
                          <td><span class="label label-success">Accountant</span></td>
                          <td>18</td>
                          <td>12-5-2017</td>
                          <td>$100</td>
                          <td>
                              <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                          </td>
                      </tr>
                      <tr>
                          <td>10</td>
                          <td>
                              <a href="profile.html"><img src="../../../images/avatar/2.jpg" alt="user" class="avatar avatar-sm mr-5" /> Sonu Nigam</a>
                          </td>
                          <td>sonu@gmail.com</td>
                          <td>+456 456 789</td>
                          <td><span class="label label-inverse">HR</span></td>
                          <td>36</td>
                          <td>18-5-2009</td>
                          <td>$4200</td>
                          <td>
                              <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                          </td>
                      </tr>
                      <tr>
                          <td>11</td>
                          <td>
                              <a href="profile.html"><img src="../../../images/avatar/3.jpg" alt="user" class="avatar avatar-sm mr-5" /> Varun Dhawan</a>
                          </td>
                          <td>varun@gmail.com</td>
                          <td>+567 456 789</td>
                          <td><span class="label label-danger">Manager</span></td>
                          <td>43</td>
                          <td>12-10-2010</td>
                          <td>$5200</td>
                          <td>
                              <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                          </td>
                      </tr>
                      <tr>
                          <td>12</td>
                          <td>
                              <a href="profile.html"><img src="../../../images/avatar/4.jpg" alt="user" class="avatar avatar-sm mr-5" /> Genelia Deshmukh</a>
                          </td>
                          <td>genelia@gmail.com</td>
                          <td>+123 456 789</td>
                          <td><span class="label label-danger">Designer</span> </td>
                          <td>23</td>
                          <td>12-10-2014</td>
                          <td>$1200</td>
                          <td>
                              <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                          </td>
                      </tr>
                      <tr>
                          <td>13</td>
                          <td>
                              <a href="profile.html"><img src="../../../images/avatar/5.jpg" alt="user" class="avatar avatar-sm mr-5" /> Arijit Singh</a>
                          </td>
                          <td>arijit@gmail.com</td>
                          <td>+234 456 789</td>
                          <td><span class="label label-info">Developer</span> </td>
                          <td>26</td>
                          <td>10-09-2014</td>
                          <td>$1800</td>
                          <td>
                              <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                          </td>
                      </tr>
                      <tr>
                          <td>14</td>
                          <td>
                              <a href="profile.html"><img src="../../../images/avatar/6.jpg" alt="user" class="avatar avatar-sm mr-5" /> Govinda jalan</a>
                          </td>
                          <td>govinda@gmail.com</td>
                          <td>+345 456 789</td>
                          <td><span class="label label-success">Accountant</span></td>
                          <td>28</td>
                          <td>1-10-2013</td>
                          <td>$2200</td>
                          <td>
                              <button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
                          </td>
                      </tr>
                  </tbody>
                  <tfoot>
                      <tr>
                          <td colspan="2">
                              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add-contact">Add New Contact</button>
                          </td>
                          <td colspan="7">
                              <div class="text-right">
                                  <ul class="pagination"> </ul>
                              </div>
                          </td>
                      </tr>
                  </tfoot>
              </table>

              <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h4 class="modal-title" id="myModalLabel2">Add New Contact</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          </div>
                          <div class="modal-body">
                              <from class="form-horizontal form-element">												
                                  <div class="col-md-12 mb-20">
                                      <div class="form-group">
                                          <input type="text" class="form-control" placeholder="Type name"> </div>
                                      <div class="form-group">
                                          <input type="text" class="form-control" placeholder="Email"> </div>
                                      <div class="form-group">
                                          <input type="text" class="form-control" placeholder="Phone"> </div>
                                      <div class="form-group">
                                          <input type="text" class="form-control" placeholder="Designation"> </div>
                                      <div class="form-group">
                                          <input type="text" class="form-control" placeholder="Age"> </div>
                                      <div class="form-group">
                                          <input type="text" class="form-control" placeholder="Date of joining"> </div>
                                      <div class="form-group">
                                          <input type="text" class="form-control" placeholder="Salary"> </div>
                                      <div class="form-group">
                                          <div class="fileupload btn btn-danger">
                                              <div class="file-group">
                                                <span><i class="fa fa-camera file-browser mr-10"></i>Upload Contact Image</span>
                                                <input type="file">
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </from>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-info" data-dismiss="modal">Save</button>
                              <button type="button" class="btn btn-default float-right" data-dismiss="modal">Cancel</button>
                          </div>
                      </div>
                      <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
              </div>
          </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /. box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

  </section>





@stop