@extends('layouts.dashboard')

@section('body')
    <title>Add Score |EasySubmit</title>

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
                                    <li><span class="bread-blod">Scores</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="info">
        <ul id="myTabedu1" class="tab-review-design">
            <li class="active"><a href="#description">Mark Assignment</a></li>

        </ul>
        <div class="product-payment-inner-st" id="app">
            <div id="myTabContent" class="tab-content custom-product-edit">
                <div class="product-tab-list tab-pane fade active in" id="description">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-content-section">
                                <div class="col-lg-12 col-md-12 col-pt-8">

                                    <div class="courses">
                                       <div class="list"> <h5>Course title: {{ $submission->assignment->course->course_title}}</h5></div>
                                        <div class="list"><h5>Course code: {{ $submission->assignment->course->course_code }}</h5></div>
                                        <h5>Student Name: {{ $submission->student->full_name }}</h5>
                                    <div class="list"><h5>Status: {{ ucfirst($submission->status) }}</h5></div>
                                        <div class="col-lg-12" id="course">
                                            <div class="list"><h5>Question:</h5></div>
                                            
                                            <div>
                                                {{ $submission->assignment->question }}
                                            </div>
                                        </div>
                                        <div class="col-lg-12" id="course">
                                            <div class="list"><h5>Answer:</h5></div>
                                            <div>
                                                {{ $submission->answer }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-8 col-lg-8 col-sm-8" id="score">
                                        <div class="row">
                                            <ul id="myTabedu1" class="tab-review-design">
                                                <li class="active"><a href="#description">Enter score Obtain</a>
                                                </li>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-8" id="">
                                        <form action="{{ route ('add-score') }}"  method="post" name="markingForm">
                                            @csrf
                                        <input type="text" name="score" value="{{ $submission->score_obtained }}" v-model="markForm.score"  placeholder="Enter score"
                                            style="width:100px; height:40px">
                                            <input type="hidden" name="submission_id" value="{{ $submission->id }}">
                                        <input type="submit" class="btn btn-primary text-white" value="proceed">
                                        </form>
                                        @if(session('error'))
                                       <span style="color:red"> {{ session('error')  }} </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        </div>   
        {{-- @if(isset($successMessage))
        <div style="color: green; margin-left:30px">
          {{ $successMessage }}
        </div>
        @endIf --}}
    </div>
@endSection
<script src="https://unpkg.com/vue@3"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
const {createApp} = Vue

createApp ({
        data() {
            return {
                markForm:{
                    score: null,
                }
                errorMessage : null,
            }
        },
        methods: {
            addScoreHandler(){
                return axios.post('http://localhost:8002/api/mark-assignment',this.markForm).then(response =>{
                    console.log(response);
                        alert(response.data.message)
                }).catch(error =>{
                    this.errorMessage = error.response.data.message
                        console.log(error.response)
                })
            }
        },
})





.mount('#app')

</script>
