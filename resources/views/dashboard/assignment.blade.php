@extends('layouts.dashboard')

@section('body')
    <title>Add Lecturer|EasySubmit</title>

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
                                    <li><span class="bread-blod">Add Lecturer</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area mt-t-30 mg-b-15"  id="app">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Add Assignment</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row" >
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad">
                                                @if (isset($courses))
                                                    <form @submit.prevent="assignmentHandler"
                                                        class="dropzone dropzone-custom needsclick add-professors"
                                                        id="demo1-upload" name="assignmentForm" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <select class="select" name="course_id"
                                                                        v-model="assignmentForm.course_id" required="">
                                                                        <option value=""> -- Select Course --</option>
                                                                        @foreach ($courses as $course)
                                                                            <option value="{{ $course->id }}">
                                                                                {{ $course->course_title }} </option>
                                                                        @endforeach

                                                                    </select>
                                                                    @error('course_id')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group res-mg-t-15">
                                                                    <textarea name="question" v-model="assignmentForm.question" placeholder="write question"></textarea>
                                                                    @error('question')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                              
                                                                <div class="form-group">
                                                                    <input name="total_score"
                                                                        v-model="assignmentForm.total_score" type="text"
                                                                        class="form-control"
                                                                        placeholder="Total score for this question">
                                                                    @error('total_score')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="payment-adress" id="payment-adress">
                                                        <button type="submit"
                                                            class="btn btn-primary waves-effect waves-light;btn-lg">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                            </form>
                                            @endIf
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div v-if="errorMessage" class="text-center"><span style="color:red"> @{{ errorMessage }}</span></div> 
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
                assignmentForm: {
                    course_id: null,
                    question: null,
                    text_score: null,
                },
                errorMessage: null,
            }
        },
        methods: {
            assignmentHandler() {
                return axios.post('http://localhost:8002/api/assignment', this.assignmentForm).then(
                    response => {
                        alert(response.data.message)
                        console.log(response)
                        

                    }).catch(error => {
                    this.errorMessage = error.response.data.message
                    console.log(error.response)
                })
            }
        },
    }).mount("#app")

</script>


