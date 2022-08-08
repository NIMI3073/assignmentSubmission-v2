@extends('layouts.dashboard')

@section('body')


    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Assignment course Search</a></li>
                        </ul>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <form action="{{ route('search-course') }}" method="POST">
                                @csrf
                                <div class="row" style="width:80%; margin-left:100px;margin-top:100px">
                                    <input type="text" value="" name="course_id" style="width: 200px; height:60px"
                                        placeholder="Enter course id" required="">
                                    @error('course_id')
                                        <span style="color:red"> {{ $message }} </span>
                                    @enderror
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Proceed</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    @if (isset($course))
        <div class="single-pro-review-area mt-t-30 mg-b-15" id="assignment">
            <div class="container-fluid">

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 table table-responsive-sm">
                    <h4>Course Assignments</h4>
                    <div class="row">
                        <h6>Course Code: {{ $course->course_code }}</h6>
                        <h6>Course-Title:{{ $course->course_title }}</h6>
                        <h6>Course-Unit:{{ $course->course_unit }}</h6>
                        <h6>Lecturer In Charge: {{ $course->lecturer->full_name }}</h6>
                    </div>
                    <table class="table table-responsive{-sm|-md|-lg|-xl} table table-responsive-lg ">
                        <tr>
                            <th>SN</th>
                            <th>Question</th>
                            <th>Score-obtainable</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                        @foreach ($course->assignments as $assignment)
                            <tr>
                                <td>{{ $index++ }}</td>
                                <td>{{ substr($assignment->question, 0, 100) }}...</td>
                                <td>{{ $assignment->total_score }}</td>
                                <td>{{ $assignment->course->created_at }}</td>
                                <td>
                                    <label class="label label-success text-dark">
                                        <span><a
                                                href="{{ route('assignment-submission-form') }}?assignment_id={{ $assignment->id }}">Provide
                                                Answer </a></span>

                                    </label>
                                </td>

                            </tr>
                        @endforeach
                    </table>
                    <span style="color:red">
                        @if (isset($submissionError))
                            {{ $submissionError }}
                        @endif
                    </span>
                </div>
            </div>
        </div>
        </div>
    @endif
@endSection
