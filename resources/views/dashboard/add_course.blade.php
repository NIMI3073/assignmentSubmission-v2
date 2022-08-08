@extends('layouts.dashboard')

@section('body')
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
                                    <li><span class="bread-blod">Add Courses</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- second --}}
    <div class="container-fluid" >
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Courses Details</a></li>

                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="app">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad addcoursepro">
                                            <form @submit.prevent="add_courseHandler"
                                                class="dropzone dropzone-custom needsclick addcourse" name="courseForm"
                                                method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="course_title" v-model="courseData.course_title"
                                                                type="text" class="form-control"
                                                                placeholder="Course title">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="course_code" v-model="courseData.course_code"
                                                                type="text" class="form-control"
                                                                placeholder="Course code">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="course_unit" v-model="courseData.course_unit"
                                                                type="text" class="form-control"
                                                                placeholder="Course unit">
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="payment-adress">
                                                                <button type="submit"
                                                                    class="btn btn-primary ">Submit</button>
                                                            </div>
                                                            {{-- <div v-if="errorMessage" class="text-center" style=><span
                                                                    style="color:red">@{{ 
                                                                        errorMessage }}</span></div> --}}


                                                        </div>

                                                    </div>
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
                    courseData:{
                        course_title: null,
                        course_code: null,
                        course_unit: null
                    },
                    errorMessage:null
                }
            },
            methods: {
                add_courseHandler() {
                    return axios.post('http://localhost:8002/api/add_course', this.courseData).then(response => {
                        console.log(response);
                        alert(response.data.message)
                    }).catch(error => {
                        this.errorMessage = error.response.data.message
                        console.log(error.response)
                    })

                }
            },
        })
        .mount("#app")
</script>
