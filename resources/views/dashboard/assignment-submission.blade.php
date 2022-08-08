@extends('layouts.dashboard')

@section('body')
    <title>Assignment Submission | EasySubmit</title>

    {{-- <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list single-page-breadcome">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcome-heading">
                                    <form role="search" class="sr-input-func">
                                        <input type="text" placeholder="Search..." class="search-int form-control">
                                        <a href="index"><i class="fa fa-search"></i></a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul class="breadcome-menu">
                                    <li><a href="panel">Home</a> <span class="bread-slash">/</span>
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
    </div> --}}

    <div class="single-pro-review-area mt-t-30 mg-b-15" id="app">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st ">
                        <ul id="myTabedu1" class="tab-review-design text-center" style="margin-top:10px">
                            <li class="active"><a href="#description">Submit Assignment</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row" id="app">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad">
                                                <div class="row">
                                                    {{-- style="margin-left:50px; padding:20px;text-align:center;margin-top:10px;"> --}}
                                                    <div class="row" style="margin-top:20px;margin-left:50px">
                                                        <h6> Course Title : {{ $assignment->course->course_title }} </h6>
                                                        <h6> Course Code : {{ $assignment->course->course_code }} </h6>
                                                        <h6> Course Unit : {{ $assignment->course->course_unit }} </h6>
                                                        <h6> Lecturer In Charge :
                                                            {{ $assignment->course->lecturer->full_name }} </h6>
                                                        <h6> Score Obtainable : {{ $assignment->total_score }} </h6>
                                                        <h6> Question : {{ $assignment->question }} </h6>
                                                    </div>
                                                    <form action="{{ route('assignment-submission') }}" method="post"
                                                        id="upl">
                                                        @csrf
                                                        <div class="form-group"
                                                            style="margin-top:50px;width:300px;margin-left:80px">
                                                            <textarea rows="4" cols="50" placeholder="Provide Answer..." v-model="submissionForm.answer" name="answer"
                                                                 id="upload"></textarea>

                                                            <input type="hidden" name="assignment_id"
                                                                value="{{ $assignment->id }}">
                                                        </div>
                                                        <button type="submit"
                                                            class="btn btn-primary btn-lg ">submit</button>
                                                </div>
                                                {{-- @if (isset($successMessage))
                                                    <div style="color: green; margin-left:30px">
                                                        {{ $successMessage }}
                                                    </div>
                                                @endIf --}}
                                                </form>

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
<script src="https://unpkg.com/vue@3"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    const {
        createApp
    } = Vue

    createApp({
            data() {
                return {
                    submissionForm: {
                        answer: null,
                    }
                    errorMessage: null,
                }
            },
            methods: {
                assignmentsubmissionHandler() {
                    return axios.post('http://localhost:8002/api/assignment-submission', this.submissionForm).then(
                        response => {
                            console.log(response)
                            alert(response.data.message)

                        }).catch(error => {
                        this.errorMessage = error.response.data.message
                        console.log(error.response)
                      

                    })

                },
            }
        })



        .mount('#app')
</script>
