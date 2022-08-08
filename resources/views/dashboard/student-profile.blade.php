@extends('layouts.dashboard')

@section('body')
<title>Student Profile | EasySubmit</title>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <form role="search" class="sr-input-func">
                                    <input type="text" placeholder="Search..." class="search-int form-control">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">All Students</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="assignment-history">
    <div class="all-content-wrapper">
          
        <div class="contacts-area mg-b-15">
            <div class="container-fluid">
             <div class="col-md-12">
                 <div class="row">
                 <div class="col-md-4" >
                    <h3 style="margin-top:10px">Course Engaged</h3>
                    <div class="img">
                        <img src="../dashboard-assets/img/student/images.jpg" alt="" />
                    </div>  
                    <button type="submit" class="btn btn-primary  waves-effect waves-light" id="btn"><a href="all-course">click here to see</a></button>
                 </div>
               
                 <div class="col-md-4 " >
                    <h3 style="margin-top: 10px">Assignments</h3>  
                    <div class="img">
                        <img src="{{ asset('dashboard-assets/img/student/Deposit.jpg') }}" alt="" />
                    </div>  
                    <button type="submit" class="btn btn-primary waves-effect waves-light" id="btn"> <a href="assignment-upload">click here to see</a></button>
                    
                 </div>

                 <div class="col-md-4">
                    
                    <h3 style="margin-top: 10px">Submission</h3>
                    <div class="img">
                        <img src="{{ asset('dashboard-assets/img/student/wishful.webp') }}" alt="" />
                    </div>
                    <button type="submit" class="btn btn-primary waves-effect waves-light"  id="btn"><a href="assignment-submission">click here to see</a></button>
                </div>  
             </div>
            

                </div>  
            </div>
        </div>
    </div>
    </div>
</div>
   
@endSection


