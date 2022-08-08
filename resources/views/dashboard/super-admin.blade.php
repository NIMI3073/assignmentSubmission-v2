@extends('layouts.dashboard')

@section('body')


<title>Super Admin | EasySubmit</title>


<div class="breadcome-area">
   <div class="container-fluid">
       <div class="row">
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="breadcome-list single-page-breadcome">
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
                               <li><span class="bread-blod">Super Admin</span>
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>

        
   
        <!-- Single pro tab review Start-->
         <div class="all-content-wrapper">
            <div class="row">
                    <div class="single-pro-review-area mt-t-30 mg-b-15">
                        <div class="container-fluid">
                            <div class="row" >
                                <div class="col-md-2" id="row-one" style="background-color: white">
                                    <h4>30 <br>
                                    Students</h4>
                                </div>
                    
                                <div class="col-md-2" id="row-two" style="background-color: white">
                                    <h4>70 <br>
                                     Lecturers
                                    </h4>
                                </div>
                    
                                <div class="col-md-2" id="row-three"style="background-color: white">
                                    <h4>150 <br>
                                    Assignments
                                    </h4>
                                </div>
                            </div>
                        </div>
                        </div>  

                        <div class="single-pro-review-area mt-t-30 mg-b-15">
                            <div class="container-fluid">
                            
                                <div class="row" >
                        
                                    <div class="col-md-2" id="row-one" style="background-color: white">
                                        <h4>330 <br>
                                        Submissions</h4>
                                    </div>
                        
                                    <div class="col-md-2" id="row-two" style="background-color: white">
                                        <h4>Administrative<br>
                                            User
                                        </h4>
                                    </div>
                        
                                    <div class="col-md-2" id="row-three"style="background-color: white">
                                        <h4>Profile
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            </div> 
                        </div>
                   
                    </div>

@endSection