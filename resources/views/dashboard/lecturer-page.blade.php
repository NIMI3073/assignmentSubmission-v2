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
                                <li><span class="bread-blod">All Lecturer</span>
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
                                <li class="active"><a href="#description" style="margin-left: 100px">All Lecturer</a></li>
                              
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                             
                                                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 table table-responsive-sm">
                                                                  
                                                                    <table>
                                                                        <tr>
                                                                            <th>SN</th>
                                                                        <th>Name</th>
                                                                        <th>Email</th>
                                                                        <th>Phone</th>
                                                                        <th>No of Courses</th>
                                                                        <th>Actions</th>
                                                                        </tr>
                                                                        @foreach ($lecturers as $lecturer)
                                                                             <tr>
                                                                            <td>{{ $index++ }}</td>
                                                                            <td>{{$lecturer->full_name }}</td>
                                                                            <td>{{$lecturer->email}}</td>
                                                                            <td> {{$lecturer->phone }}</td>
                                                                            <td> {{$lecturer->courses_count }}</td>
                                                                        
                                                                            <td>
                                                                                    <ul >
                                                                                      <li><a class="dropdown-item" href="{{ route('lecturer-assignments') }}?lecturer_id={{ $lecturer->id }}">
                                                                                        <span class="label label-primary">Assignments</span>
                                                                                        </a></li>
                                                                                      <li><a class="dropdown-item" href="{{ route ('lecturer-profiles') }}?user_id={{ $lecturer->id }}" > 
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
                                                               
                                                               

