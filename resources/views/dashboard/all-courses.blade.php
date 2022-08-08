        
@extends('layouts.dashboard')

@section('body')
            <!-- Mobile Menu end -->
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
                                            <li><span class="bread-blod">All Courses</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 table table-responsive-sm">
                        <h2> List of Courses</h2>
                        <table class="table table-responsive{-sm|-md|-lg|-xl} table table-responsive-lg ">
                            <tr>
                                <th>SN</th>
                            <th>Course_Id</th>
                            <th>course-title</th>
                            <th>course_code</th>
                            <th>Actions</th>
                            </tr>
                            @foreach ($courses as $course )
                                 <tr>
                                <td>{{ $index++ }}</td>
                                <td> {{ $course->course_id }} </td>
                                <td>{{ $course->course_title }}</td>
                                <td> {{ $course->course_code }}</td>
                                <td>
                                        <ul >
                                          <li><a class="dropdown-item" href="course-assignments?course_id={{ $course->id }}"><span class="label label-info"> Assignments </span></a></li>
                                          <li><a class="dropdown-item" href="edit-question?user_id={{ $course->id }}"><span class="label label-default">Edit</span></a></li>
                                          <li><a class="dropdown-item" href="#"><span class="label label-danger">Delete </span></a></li>
                                        </ul>
                                        
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
@endSection
<script src="https://unpkg.com/vue@3"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>