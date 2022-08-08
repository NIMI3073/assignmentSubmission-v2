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
                                    <li><span class="bread-blod">Lecturer Assignments</span>
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
                            <li class="active"><a href="#description">Lecturer Assignment</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad">


                                               <table class="table table-striped table table-dark table table-responsive{-sm|-md|-lg|-xl}">
                                               <th>Sn</th>
                                               <th><h4>Assignment Questions</h4></th>
                                               <th><h4> course-title</h4></th>
                                               <th><h4>Assignment Question by</h4></th>
                                               <th><h4>Action</h4></th>

                                               <tr>
                                               @foreach ($lecturerAssignments as $lecturerAssignment)
                                                 
                                                   <td>{{ $index++ }}</td>
                                                   <td>{{ $lecturerAssignment->question}}</td>
                                                   <td>{{ $lecturerAssignment->course->course_title}}</td>
                                                   <td>{{ $lecturerAssignment->course->lecturer->full_name}}</td>

                                                   <td>
                                                    <div><a href="{{ route ('student-assignmentSubmissions') }}?assignment_id={{$lecturerAssignment->id }}" class="label label-info text-dark"> Submissions
                                                        </a>
                                                    </div>
                                                   </td>
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
