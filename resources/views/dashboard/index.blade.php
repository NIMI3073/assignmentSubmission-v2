@extends('layouts.dashboard')

@section('body')

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
                                    <a href="#"><i class="fa fas-search"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Dashboard</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="analytics-sparkle-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 table table-responsive-sm">
                <table>
                    <tr>
                        <th>SN</th>
                    <th>Departments</th>
                    <th>Courses</th>
                    <th>Lecturers</th>
                    <th>Students</th>
                    <th>Actions</th>
                    </tr>

                    <tr>
                        <td>1.</td>
                        <td> NATURAL SCIENCES</td>
                        <td>Computer and information sciences,mathematics</td>
                        <td>PROF.ANJOLA</td>
                        <td>20</td>
                        <td><i class="fa-solid fa-location-check">Active</i></td>
                    </tr>
                        <tr>
                            <td>2.</td>
                        <td>ENGINEERING AND TECHNOLOGY</td>
                        <td>Civil engineering,Mechanical engineering,Electrical/Electronics engineering</td>
                        <td>Prof.Adaraniwon</td>
                        <td>20</td>
                        <td>Active</td>
                        </tr>

                        <tr>
                            <td>3.</td>
                        <td>MEDICAL AND HEALTH SCIENCES </td>
                        <td>Basic medicine,Clinical medicine,Health Sciences,Other medical sciences</td>
                        <td>Prof.Arigbabola</td>
                        <td>10</td>
                        <td>Active</td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td> AGRICULTURAL SCIENCES </td>
                        <td> Agriculture, Forestry, and Fisheries,Animal and Dairy science,Veterinary science</td>
                        <td>Prof.Eniolorunda</td>
                        <td>30</td>
                        <td>Active</td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>SOCIAL SCIENCES </td>
                        <td>Psychology,Sociology,Law,Political science, Social and economic geography</td>
                        <td>Prof.Taliat</td>
                        <td>20</td>
                        <td>Active</td>

                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>HUMANITIES</td>
                        <td>History and Archaeology, Languages and Literature,Philosophy, Ethics and Religion</td>
                        <td>Prof.Lawins</td>
                        <td>12</td>
                        <td>Active</td>
                    </tr>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="row" style="padding: 20px;margin:10px">
    <h3 id="show"></h3>
</div>
@endSection

