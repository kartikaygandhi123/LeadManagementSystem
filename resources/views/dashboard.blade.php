@extends('layouts.mainLayout')

@section('content')
<h3>Dashboard</h3>
<div class="col-xl-3 col-md-6 col-6">
  <!-- small box -->
  <div class="small-box bg-primary">
    <div class="inner">
      {{-- <h4>Create Lead</h4> --}}
     <p>
     <div class="btn-group-vertical">
       
     <button type="button" class="btn btn-primary "  onclick="window.location.href = 'createleadshow';"><h5>Create Lead<i class="fa fa-arrow-right ml-5"></i></h5></button>
          
        </div>
       


      </p>
    </div>
    <div class="icon">
      <i class="fa fa-user-plus"></i>
    </div>
    <a href="createleadshow" class="small-box-footer"> <i class="fa fa-arrow-right"></i></a>
  </div>
</div>



<section class="content">
  <div class="row">
    <div class="col-xl-3 col-md-6 col-12">
      <div class="box box-body bg-primary">
        <div class="flexbox">
          <div id="spark1"></div>
          <span class="font-size-40 font-weight-200">12,568</span>
        </div>
        <div class="text-right">Users</div>
      </div>
    </div>
    <!-- /.col -->
    <div class="col-xl-3 col-md-6 col-12">
      <div class="box box-body bg-danger">
        <div class="flexbox">
          <div id="spark2"></div>
          <span class="font-size-40 font-weight-200">8,568</span>
        </div>
        <div class="text-right">Invoices</div>
      </div>
    </div>
    <!-- /.col -->
    <div class="col-xl-3 col-md-6 col-12">
      <div class="box box-body bg-warning">
        <div class="flexbox">
          <div id="spark3"></div>
          <span class="font-size-40 font-weight-200">+100</span>
        </div>
        <div class="text-right">Article</div>
      </div>
    </div>
    <!-- /.col -->
    <div class="col-xl-3 col-md-6 col-12">
      <div class="box box-body bg-info">
        <div class="flexbox">
          <div id="spark4"></div>
          <span class="font-size-40 font-weight-200">16,568</span>
        </div>
        <div class="text-right">Income</div>
      </div>
    </div>
    <!-- /.col -->
  </div>
  <div class="row">
    <div class="col-xl-7 col-12">
      <div class="box">
        <div class="box-header with-border">
          <h4 class="box-title">Statistics</h4>
          <ul class="box-controls pull-right">
            <li><a class="box-btn-close" href="#"></a></li>
            <li><a class="box-btn-slide" href="#"></a></li>
            <li><a class="box-btn-fullscreen" href="#"></a></li>
          </ul>
        </div>
        <div class="box-body">
          <div id="bar"></div>
        </div>
      </div>
    </div>
    
    
   
    
  </div>
</section>




		
  
@stop