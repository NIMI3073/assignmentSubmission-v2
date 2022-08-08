@extends('layouts.dashboard')

@section('body')
    <title>Assignment Submission | EasySubmit</title>

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
                                    <li><span class="bread-blod">Assignment Submission</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="single-pro-review-area mt-t-30 mg-b-15" style="margin-left: 20px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Submit Assignment</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad">
                                   
                                                <div class="row">
                                               <div class="bg-info text-success">
                                                    <h4>Name: {{ $student->full_name }}</h4>
                                                    <h4>Email: {{ $student->email }} </h4>
                                                    <h4>Phone:{{ $student->phone  }} </h4>
                                               </div>

                                               <table class="table table-striped table table-dark  table table-responsive{-sm|-md|-lg|-xl}">
                                               <th>Sn</th>
                                               <th>Course title</th>
                                               <th>Question</th>
                                               <th>Submissions</th>

                                               <tr>
                                               @foreach ($submissions as $submission)
                                                 
                                                   <td>{{ $index++ }}</td>
                                                   <td>{{ $submission->assignment->course->course_title}}</td>
                                                   <td>{{ $submission->assignment->question}}</td>
                                                   <td>{{ $submission->answer}}</td>
                                               </tr>
                                               @endforeach
                                                      </table>
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
    </div>
@endSection
