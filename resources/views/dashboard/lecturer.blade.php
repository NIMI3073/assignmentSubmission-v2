@extends('layouts.dashboard')

@section('body')

    <title>All Lecturers | EasySubmit </title>


  
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
                                    <li><span class="bread-blod">All Lecturers</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row" >

            <div class="col-md-2" id="row-one" style="background-color: white">
                <h1>5 courses <br>
                    created</h1>
            </div>

            <div class="col-md-2" id="row-two" style="background-color: white">
                <h1>10 Assignments <br>
                    created
                </h1>
            </div>

            <div class="col-md-2" id="row-three"style="background-color: white">
                <h1>4  Submissions 
                    <br>
                    made
                </h1>
            </div>
        </div>
    </div>
    </div>   


    
@endSection