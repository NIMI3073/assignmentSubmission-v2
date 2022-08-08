
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
                                            <li><span class="bread-blod">Courses</span>
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
                        <h2>Student Submissions</h2>
                        <table class=" table table-responsive{-sm|-md|-lg|-xl} ">
                            <tr>
                                <th>SN</th>
                            <th>course title</th>
                            <th>course code</th>
                            <th> Question </th>
                            <th> Assignment id </th>
                            <th> Answer </th>
                            <th>Score obtained</th>
                            <th>Actions</th>
                            </tr>
                            @foreach ($submissions as $submission )
                                 <tr>
                                <td>{{ $index++ }}</td>
                                <td>{{ $submission->assignment->course->course_title }}</td>
                                <td> {{ $submission->assignment->course->course_code }}</td>
                                <td> {{ $submission->assignment->question }}</td>
                                <td> {{ $submission->assignment_id }}</td>
                                <td> {{ $submission->answer }}</td>
                                <td> {{ $submission->score_obtained }}</td>

                                <td>
                                        <ul>
                                          <li><a class="dropdown-item" href="mark-assignment?id={{ $submission->id }}"><span class="btn btn-success">Mark </span></a></li>
                                          <li><a class="dropdown-item" href="edit-score?id={{ $submission->id }}"><span class="btn btn-default">Edit</span>
                                            @error('id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror 
                                        </a></li>
                                          <li><a class="dropdown-item" href="#"><span class="btn btn-danger">Delete</span></a></li>
                                        </ul>    
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
@endSection


