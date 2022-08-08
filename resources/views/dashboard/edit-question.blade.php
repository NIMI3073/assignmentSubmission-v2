
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
                                <li><span class="bread-blod">Update Question</span>
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
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="product-payment-inner-st">
                <ul id="myTabedu1" class="tab-review-design">
                    <li class="active"><a href="#description">Edit Previous Question</a></li>
                  
                </ul>
        
                <div id="myTabContent" class="tab-content custom-product-edit" style="padding: 30px; margin:20px">
                    <div class="product-tab-list tab-pane fade active in" id="description">
                        <div class="row">
                           
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="review-content-section">
                                    <div id="dropzone1" class="pro-ad addcoursepro">
                                        
                                            <div class="row" style="padding: 10px; margin:20px">
                                                <div class="section">
                                                    <h4>Course title : {{ $assignment->course->course_title }}</h4>
                                                    
                                                </div>

                                                <div class="section">
                                                    <h4>Course code : {{ $assignment->course->course_code }}</h4>
                                                    
                                                </div>
                                                <form action="{{ route ('edit-question') }}" method="post">
                                                @csrf
                                                <div class="section">
                                                    <textarea rows="5" cols="40" name="question" value=""> {{ $assignment->question  }}</textarea>
                                                    <input type="hidden" name="id" value="{{ $assignment->id }}">
                                                </div>
                                                
                                                <button type="submit" class="btn btn-primary">Update</button>
                                                @if(isset($successMessage))
                                                <div style="color: rgb(4, 48, 4); margin-left:30px">
                                                  {{ $successMessage }}
                                                </div>
                                                @endIf
                          
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