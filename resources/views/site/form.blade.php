@extends('layouts.mainLayout')
@section('content')


<section class="content-header">
    <h1>
      Form Wizard
    </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#"><i class="iconsmind-Library"></i></a></li>
      <li class="breadcrumb-item"><a href="#">Forms</a></li>
      <li class="breadcrumb-item active">Form Wizard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    
    <!-- Validation wizard -->
    <div class="box box-solid box-danger">
      <div class="box-header with-border">
        <h4 class="box-title">Step wizard with validation</h4>
        <h6 class="box-subtitle text-white-50">You can us the validation like what we did</h6>
      </div>
      <!-- /.box-header -->
      <div class="box-body wizard-content">
          <form action="#" class="validation-wizard wizard-circle">
              <!-- Step 1 -->
              <h6>Step 1</h6>
              <section>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="wfirstName2"> First Name : <span class="danger">*</span> </label>
                              <input type="text" class="form-control required" id="wfirstName2" name="firstName"> </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="wlastName2"> Last Name : <span class="danger">*</span> </label>
                              <input type="text" class="form-control required" id="wlastName2" name="lastName"> </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="wemailAddress2"> Email Address : <span class="danger">*</span> </label>
                              <input type="email" class="form-control required" id="wemailAddress2" name="emailAddress"> </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="wphoneNumber2">Phone Number :</label>
                              <input type="tel" class="form-control" id="wphoneNumber2"> </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="wlocation2"> Select City : <span class="danger">*</span> </label>
                              <select class="custom-select form-control required" id="wlocation2" name="location">
                                  <option value="">Select City</option>
                                  <option value="India">India</option>
                                  <option value="USA">USA</option>
                                  <option value="Dubai">Dubai</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="wdate2">Date of Birth :</label>
                              <input type="date" class="form-control" id="wdate2"> </div>
                      </div>
                  </div>
              </section>
              <!-- Step 2 -->
              <h6>Step 2</h6>
              <section>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="jobTitle3">Company Name :</label>
                              <input type="text" class="form-control required" id="jobTitle3">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="webUrl3">Company URL :</label>
                              <input type="url" class="form-control required" id="webUrl3" name="webUrl3"> </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="shortDescription3">Short Description :</label>
                              <textarea name="shortDescription" id="shortDescription3" rows="6" class="form-control"></textarea>
                          </div>
                      </div>
                  </div>
              </section>
              <!-- Step 3 -->
              <h6>Step 3</h6>
              <section>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="wint1">Interview For :</label>
                              <input type="text" class="form-control required" id="wint1"> </div>
                          <div class="form-group">
                              <label for="wintType1">Interview Type :</label>
                              <select class="custom-select form-control required" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                                  <option value="Banquet">Normal</option>
                                  <option value="Fund Raiser">Difficult</option>
                                  <option value="Dinner Party">Hard</option>
                              </select>
                          </div>
                          <div class="form-group">
                              <label for="wLocation1">Location :</label>
                              <select class="custom-select form-control required" id="wLocation1" name="wlocation">
                                  <option value="">Select City</option>
                                  <option value="India">India</option>
                                  <option value="USA">USA</option>
                                  <option value="Dubai">Dubai</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="wjobTitle4">Interview Date :</label>
                              <input type="date" class="form-control required" id="wjobTitle4">
                          </div>
                          <div class="form-group">
                              <label>Requirements :</label>
                                  <input name="group2" type="radio" id="radio_3" value="1">
                                  <label for="radio_3" class="block">Employee</label>
                                  <input name="group2" type="radio" id="radio_4" value="1">
                                  <label for="radio_4">Contract</label>
                          </div>
                      </div>
                  </div>
              </section>
              <!-- Step 4 -->
              <h6>Step 4</h6>
              <section>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="behName3">Behaviour :</label>
                              <input type="text" class="form-control required" id="behName3">
                          </div>
                          <div class="form-group">
                              <label for="participants3">Confidance</label>
                              <input type="text" class="form-control required" id="participants3">
                          </div>
                          <div class="form-group">
                              <label for="participants4">Result</label>
                              <select class="custom-select form-control required" id="participants4" name="location">
                                  <option value="">Select Result</option>
                                  <option value="Selected">Selected</option>
                                  <option value="Rejected">Rejected</option>
                                  <option value="Call Second-time">Call Second-time</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="decisions2">Comments</label>
                              <textarea name="decisions" id="decisions2" rows="4" class="form-control"></textarea>
                          </div>
                          <div class="form-group">
                              <label>Rate Interviwer :</label>
                              <div class="c-inputs-stacked">
                                  <input type="checkbox" id="checkbox_6">
                                  <label for="checkbox_6" class="block">1 star</label>
                                  <input type="checkbox" id="checkbox_7">
                                  <label for="checkbox_7" class="block">2 star</label>
                                  <input type="checkbox" id="checkbox_8">
                                  <label for="checkbox_8" class="block">3 star</label>
                                  <input type="checkbox" id="checkbox_9">
                                  <label for="checkbox_9" class="block">4 star</label>
                                  <input type="checkbox" id="checkbox_10">
                                  <label for="checkbox_10" class="block">5 star</label>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
          </form>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
   
   <!-- Step wizard -->
    <div class="box box-solid box-primary">
      <div class="box-header with-border">
        <h4 class="box-title">Step wizard</h4>
        <h6 class="box-subtitle text-white-50">You can find the <a href="http://www.jquery-steps.com" target="_blank" class="text-white-50">offical website </a></h6>
      </div>
      <!-- /.box-header -->
      <div class="box-body wizard-content">
          <form action="#" class="tab-wizard wizard-circle">
              <!-- Step 1 -->
              <h6>Personal Info</h6>
              <section>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="firstName5">First Name :</label>
                              <input type="text" class="form-control" id="firstName5"> </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="lastName1">Last Name :</label>
                              <input type="text" class="form-control" id="lastName1"> </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="emailAddress1">Email Address :</label>
                              <input type="email" class="form-control" id="emailAddress1"> </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="phoneNumber1">Phone Number :</label>
                              <input type="tel" class="form-control" id="phoneNumber1"> </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="location3">Select City :</label>
                              <select class="custom-select form-control" id="location3" name="location">
                                  <option value="">Select City</option>
                                  <option value="Amsterdam">India</option>
                                  <option value="Berlin">USA</option>
                                  <option value="Frankfurt">Dubai</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="date1">Date of Birth :</label>
                              <input type="date" class="form-control" id="date1"> </div>
                      </div>
                  </div>
              </section>
              <!-- Step 2 -->
              <h6>Job Status</h6>
              <section>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="jobTitle1">Job Title :</label>
                              <input type="text" class="form-control" id="jobTitle1"> </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="videoUrl1">Company Name :</label>
                              <input type="text" class="form-control" id="videoUrl1">
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="shortDescription1">Job Description :</label>
                              <textarea name="shortDescription" id="shortDescription1" rows="6" class="form-control"></textarea>
                          </div>
                      </div>
                  </div>
              </section>
              <!-- Step 3 -->
              <h6>Interview</h6>
              <section>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="int1">Interview For :</label>
                              <input type="text" class="form-control" id="int1"> </div>
                          <div class="form-group">
                              <label for="intType1">Interview Type :</label>
                              <select class="custom-select form-control" id="intType1" data-placeholder="Type to search cities" name="intType1">
                                  <option value="Banquet">Normal</option>
                                  <option value="Fund Raiser">Difficult</option>
                                  <option value="Dinner Party">Hard</option>
                              </select>
                          </div>
                          <div class="form-group">
                              <label for="Location1">Location :</label>
                              <select class="custom-select form-control" id="Location1" name="location">
                                  <option value="">Select City</option>
                                  <option value="India">India</option>
                                  <option value="USA">USA</option>
                                  <option value="Dubai">Dubai</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="jobTitle2">Interview Date :</label>
                              <input type="date" class="form-control" id="jobTitle2">
                          </div>
                          <div class="form-group">
                              <label>Requirements :</label>
                              <div class="c-inputs-stacked">
                                  <input name="group1" type="radio" id="radio_1" value="1">
                                  <label for="radio_1" class="block">Employee</label>
                                  <input name="group1" type="radio" id="radio_2" value="1">
                                  <label for="radio_2">Contract</label>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <!-- Step 4 -->
              <h6>Remark</h6>
              <section>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="behName1">Behaviour :</label>
                              <input type="text" class="form-control" id="behName1">
                          </div>
                          <div class="form-group">
                              <label for="participants1">Confidance</label>
                              <input type="text" class="form-control" id="participants1">
                          </div>
                          <div class="form-group">
                              <label for="participants2">Result</label>
                              <select class="custom-select form-control" id="participants2" name="location">
                                  <option value="">Select Result</option>
                                  <option value="Selected">Selected</option>
                                  <option value="Rejected">Rejected</option>
                                  <option value="Call Second-time">Call Second-time</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="decisions1">Comments</label>
                              <textarea name="decisions" id="decisions1" rows="4" class="form-control"></textarea>
                          </div>
                          <div class="form-group">
                              <label>Rate Interviwer :</label>
                              <div class="c-inputs-stacked">
                                  <input type="checkbox" id="checkbox_1">
                                  <label for="checkbox_1" class="block">1 star</label>
                                  <input type="checkbox" id="checkbox_2">
                                  <label for="checkbox_2" class="block">2 star</label>
                                  <input type="checkbox" id="checkbox_3">
                                  <label for="checkbox_3" class="block">3 star</label>
                                  <input type="checkbox" id="checkbox_4">
                                  <label for="checkbox_4" class="block">4 star</label>
                                  <input type="checkbox" id="checkbox_5">
                                  <label for="checkbox_5" class="block">5 star</label>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
          </form>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
    
    <!-- vertical wizard -->
    <div class="box box-solid box-success">
      <div class="box-header with-border">
        <h4 class="box-title">Step wizard</h4>
        <h6 class="box-subtitle text-white-50">You can find the <a href="http://www.jquery-steps.com" target="_blank" class="text-white-50">offical website</a></h6>
      </div>
      <!-- /.box-header -->
      <div class="box-body wizard-content">
          <form action="#" class="tab-wizard vertical wizard-circle">
              <!-- Step 1 -->
              <h6>Personal Info</h6>
              <section>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="firstName1">First Name :</label>
                              <input type="text" class="form-control" id="firstName1"> </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="lastName2">Last Name :</label>
                              <input type="text" class="form-control" id="lastName2"> </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="emailAddress2">Email Address :</label>
                              <input type="email" class="form-control" id="emailAddress2"> </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="phoneNumber2">Phone Number :</label>
                              <input type="tel" class="form-control" id="phoneNumber2"> </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="location2">Select City :</label>
                              <select class="custom-select form-control" id="location2" name="location">
                                  <option value="">Select City</option>
                                  <option value="Amsterdam">India</option>
                                  <option value="Berlin">USA</option>
                                  <option value="Frankfurt">Dubai</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="date2">Date of Birth :</label>
                              <input type="date" class="form-control" id="date2"> </div>
                      </div>
                  </div>
              </section>
              <!-- Step 2 -->
              <h6>Job Status</h6>
              <section>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="jobTitle6">Job Title :</label>
                              <input type="text" class="form-control" id="jobTitle6"> </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="videoUrl2">Company Name :</label>
                              <input type="text" class="form-control" id="videoUrl2">
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="shortDescription2">Job Description :</label>
                              <textarea name="shortDescription" id="shortDescription2" rows="6" class="form-control"></textarea>
                          </div>
                      </div>
                  </div>
              </section>
              <!-- Step 3 -->
              <h6>Interview</h6>
              <section>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="int2">Interview For :</label>
                              <input type="text" class="form-control" id="int2"> </div>
                          <div class="form-group">
                              <label for="intType3">Interview Type :</label>
                              <select class="custom-select form-control" id="intType3" data-placeholder="Type to search cities" name="intType3">
                                  <option value="Banquet">Normal</option>
                                  <option value="Fund Raiser">Difficult</option>
                                  <option value="Dinner Party">Hard</option>
                              </select>
                          </div>
                          <div class="form-group">
                              <label for="Location4">Location :</label>
                              <select class="custom-select form-control" id="Location4" name="location">
                                  <option value="">Select City</option>
                                  <option value="India">India</option>
                                  <option value="USA">USA</option>
                                  <option value="Dubai">Dubai</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="jobTitle5">Interview Date :</label>
                              <input type="date" class="form-control" id="jobTitle5">
                          </div>
                          <div class="form-group">
                              <label>Requirements :</label>
                                  <input name="group3" type="radio" id="radio_5" value="1">
                                  <label for="radio_5" class="block">Employee</label>
                                  <input name="group3" type="radio" id="radio_6" value="1">
                                  <label for="radio_6">Contract</label>
                          </div>
                      </div>
                  </div>
              </section>
              <!-- Step 4 -->
              <h6>Remark</h6>
              <section>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="behName2">Behaviour :</label>
                              <input type="text" class="form-control" id="behName2">
                          </div>
                          <div class="form-group">
                              <label for="participants5">Confidance</label>
                              <input type="text" class="form-control" id="participants5">
                          </div>
                          <div class="form-group">
                              <label for="participants6">Result</label>
                              <select class="custom-select form-control" id="participants6" name="location">
                                  <option value="">Select Result</option>
                                  <option value="Selected">Selected</option>
                                  <option value="Rejected">Rejected</option>
                                  <option value="Call Second-time">Call Second-time</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="decisions3">Comments</label>
                              <textarea name="decisions" id="decisions3" rows="4" class="form-control"></textarea>
                          </div>
                          <div class="form-group">
                              <label>Rate Interviwer :</label>
                              <div class="c-inputs-stacked">
                                  <input type="checkbox" id="checkbox_11">
                                  <label for="checkbox_11" class="block">1 star</label>
                                  <input type="checkbox" id="checkbox_12">
                                  <label for="checkbox_12" class="block">2 star</label>
                                  <input type="checkbox" id="checkbox_13">
                                  <label for="checkbox_13" class="block">3 star</label>
                                  <input type="checkbox" id="checkbox_14">
                                  <label for="checkbox_14" class="block">4 star</label>
                                  <input type="checkbox" id="checkbox_15">
                                  <label for="checkbox_15" class="block">5 star</label>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
          </form>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
    
  </section>






@endsection