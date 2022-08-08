
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
                        <h2>Assignments on Courses</h2>
                        <table>
                            <tr>
                                <th>SN</th>
                            <th>course-id</th>
                            <th>course-title</th>
                            <th>course-code</th>
                            <th> Question </th>
                            <th>Actions</th>
                            </tr>
                            @foreach ($assignments as $assignment )
                                 <tr>
                                <td>{{ $index++ }}</td>
                                <td>{{ $assignment->course->course_id}}</td>
                                <td>{{ $assignment->course->course_title }}</td>
                                <td> {{ $assignment->course->course_code }}</td>
                                <td> {{ $assignment->question }}</td>
                                <td>
                                        <ul >
                                          <li><a class="dropdown-item" href="assignment-submissions?assignment_id={{ $assignment->id }}">
                                            <span class="btn btn-success">Submission</span>
                                            </a></li>
                                          <li><a class="dropdown-item" href="edit-question?id={{ $assignment->id }}" > 
                                            <span class="btn btn-default">
                                              Edit</span></a></li>
                                          <li><a class="dropdown-item" href="{{ route ('delete-assignment') }}?id={{ $assignment->id }}" >
                                            <span class="btn btn-danger">Delete</span>
                                           
                                            </a></li> @error('id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                                 @enderror 

                                        </ul>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    @if(isset($successMessage))
                    <div style="color: rgb(3, 41, 3); margin-left:30px">
                      {{ $successMessage }}
                    </div>
                    @endIf

                </div>

            </div>
            
@endSection

