@extends('layouts.dashboard')

@section('body')
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
                                <li><span class="bread-blod">Student Profile</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- second --}}
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="product-payment-inner-st">
                <ul id="myTabedu1" class="tab-review-design">
                    <li class="active"><a href="#description">Students Profiles</a></li>
                  
                </ul>
                <div id="myTabContent" class="tab-content custom-product-edit">
                    <div class="product-tab-list tab-pane fade active in" id="description">
                        <div class="row">
                            <div class="row"style="margin:10px;padding:10px">
                                <a href="{{ route('student-submissions') }}?user_id={{ $student->id }}" class="label label-success">Submissions</a>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="review-content-section">
                                    <div id="dropzone1" class="pro-ad addcoursepro">
                                        <section class="col-md-10 col-pt-8 text-dark" style="border: 2px solid blue">
                                            <div class="row" style="padding: 10px; margin:20px">
                                                <div class="section">
                                                <h4>Name : {{ $student->full_name }}</h4>
                                                <hr>
                                            </div>
                                                <div class="section">
                                                <h4>Email : {{ $student->email }}</h4>
                                                <hr>
                                            </div>
                                                <div class="section">
                                                <h4>Phone : {{ $student->phone }}</h4>
                                                <hr>
                                            </div>
                                                <div class="section">
                                                <h4>Registration Date : {{ $student->created_at }}</h4>
                                            </div>
                                            </div>

                                        </section>

                                        

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>

@endSection