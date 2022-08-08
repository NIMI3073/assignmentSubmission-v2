@extends('layouts.dashboard')

@section('body')


 <title>Add Student | EasySubmit</title>


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
                                <li><span class="bread-blod">Add Student</span>
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
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description" style="margin-left: 60px">All students</a></li>
                              
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                             
                                                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 table table-responsive-sm">
                                                                  
                                                                    <table class="table tabel-striped table table-dark table table-responsive-sm"   >
                                                                        <tr>
                                                                            <th>SN</th>
                                                                        <th>Name</th>
                                                                        <th>Email</th>
                                                                        <th>Phone</th>
                                                                        <th>No of Submissions</th>
                                                                        <th>Actions</th>
                                                                        </tr>
                                                                        @foreach ($students as $student)
                                                                             <tr>
                                                                            <td>{{ $index++ }}</td>
                                                                            <td>{{$student->full_name }}</td>
                                                                            <td>{{$student->email}}</td>
                                                                            <td> {{$student->phone }}</td>
                                                                            <td> {{$student->submissions_count }}</td>
                                                                        
                                                                            <td>
                                                                                    <ul >
                                                                                      <li><a class="dropdown-item" href="{{ route('student-submissions') }}?user_id={{ $student->id }}">
                                                                                        <span class="label label-default">Submission</span>
                                                                                        </a></li>
                                                                                      <li><a class="dropdown-item" href="{{ route ('student-profiles') }}?user_id={{ $student->id}}" > 
                                                                                        <span class="label label-success">
                                                                                          Profile</span></a></li>
                                                                                      
                                                                                    </ul>
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
                                                               
                                                               

