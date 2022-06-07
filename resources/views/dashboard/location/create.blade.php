@extends('layouts.app')

@section('title')
Create Location
@stop

@section('header')
    @include('includes.header')
@stop
@section('sidebar')
    @include('includes.sidebar')
@stop


@section('content')
<div class="content-page">
            <style>
                label {
                    font-weight: bold;
                }

                .form-control {
                    border: 1px solid #cdbfbf;
                }

                .dc-tabscontenttitle {
                    float: left;
                    width: 100%;
                    position: relative;
                    padding: 10px 30px;
                    background: #fcfcfc;
                    margin-bottom: 20px;
                }

                .dc-tabscontenttitle::before {
                    top: 0;
                    left: 0;
                    width: 3px;
                    content: '';
                    height: 100%;
                    position: absolute;
                    background: #5B1647;
                }
            </style>
            <div class="container-fluid">
                <form class="location" action="{{ route('location.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="card-header d-flex justify-content-between bg-transparent">
                                    <div class="header-title">
                                        <h2 class="card-title">Create Location
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="dc-tabscontenttitle">
                                <h3>Location</h3>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group">
                                <label for="house_no">House No:</label>
                                <input type="text" class="form-control" id="house_no" name="house_no" placeholder="House No">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="Registeration_Number">Registeration Number:</label>
                                <input type="text" class="form-control" id="Registeration_Number" name="registeration_number"
                                    placeholder="Registeration Number">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="Address">*Address:</label>
                                <input type="text" class="form-control" id="Address" placeholder="Address" name="address">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="Town">*Town:</label>
                                <input type="text" class="form-control" id="Town" placeholder="Town" name="town">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="Address">*Postcode:</label>
                                <input type="text" class="form-control" id="Postcode" placeholder="Postcode" name="postcode">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="Landline">Landline:</label>
                                <input type="text" class="form-control" id="Landline" placeholder="Landline" name="landline">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="exampleInputdate">Start Date</label>
                                <input type="date" class="form-control" id="exampleInputdate" placeholder="Start Date" name="start_date">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="exampleInputdate">End Date</label>
                                <input type="date" class="form-control" id="exampleInputdate" placeholder="End Date" name="end_date">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="system_role">Region:</label>
                                <select class="form-control" id="inputGroupSelect01" name="region">
                                    <option selected="">Select Region</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 my-3">
                            <p style="font-weight: bold;">*Photo:</p>
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="imgInp" name="picture" >
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <ul class="list-unstyled p-0 m-0 row">
                                <li class="col-lg-12 col-md-12 col-sm-12">
                                    <img id="blah" src="{{asset('assets/images/no_avatar.jpg')}}" width="200px" height="200px" alt="Responsive image">
                                </li>
                            </ul>
                        </div>
                        <div class="container-fluid">
                            <div class="dc-tabscontenttitle my-3">
                                <h3>Restrictions</h3>
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="system_role">*Child Gender Preference:</label>
                                <select class="form-control" id="inputGroupSelect01" name="child_gender_preference">
                                    <option value="" selected="">Select..</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="system_role">*Staff Gender Preference:</label>
                                <select class="form-control" id="inputGroupSelect01" name="staff_gender_preference">
                                    <option value="" selected="">Select..</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="dc-tabscontenttitle my-3">
                                <h3>Agent</h3>
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="agent_name">Name:</label>
                                <input type="text" class="form-control" id="agent_name" placeholder="Agent Name" name="agent_name">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="Address">Address:</label>
                                <input type="text" class="form-control" id="Address" placeholder="Agent Address" name="agent_address">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="Town">Town:</label>
                                <input type="text" class="form-control" id="Town" placeholder="Agent Town" name="agent_town">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="Postcode">Postcode:</label>
                                <input type="text" class="form-control" id="Postcode" placeholder="Postcode" name="agent_postcode">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="Landline">Landline:</label>
                                <input type="text" class="form-control" id="Landline" placeholder="Landline" name="agent_landline">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="Email">Email:</label>
                                <input type="email" class="form-control" id="Email" placeholder="Agent Email" name="agent_email">
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="dc-tabscontenttitle my-3">
                                <h3>Landlord</h3>
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="Landlord_name">Name:</label>
                                <input type="text" class="form-control" id="Landlord_name" placeholder="Landlord Name" name="landlord_name">
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="Landlord_Address">Address:</label>
                                <input type="text" class="form-control" id="Landlord_Address" name="landlord_address" 
                                    placeholder="Landlord Address">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="Landlord_Town">Town:</label>
                                <input type="text" class="form-control" id="Landlord_Town" placeholder="Landlord Town" name="landlord_town">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="Landlord_Postcode">Postcode:</label>
                                <input type="text" class="form-control" id="Landlord_Postcode" name="landlord_postcode"
                                    placeholder="Landlord Postcode">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="Landlord_Landline">Landline:</label>
                                <input type="text" class="form-control" id="Landlord_Landline" name="landlord_landline"
                                    placeholder="Landlord Landline">
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="Landlord_Email">Email:</label>
                                <input type="email" class="form-control" id="Landlord_Email" placeholder="Landlord Email" name="landlord_email">
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="system_role">Head Location:</label>
                                <select class="form-control" id="inputGroupSelect01" name="head_location">
                                    <option selected="">Select Head location</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="dc-tabscontenttitle my-3">
                                <h3>Other</h3>
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="cost">TV Cost:</label>
                                <input type="text" class="form-control" id="cost" placeholder="cost(in pounds)" name="tv_cost">
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="plan">TV Plan:</label>
                                <input type="text" class="form-control" id="plan" placeholder="Plan Number" name="tv_plan">
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="exampleInputdate">TV Expiry:</label>
                                <input type="date" class="form-control" id="exampleInputdate" placeholder="Start Date" name="tv_expirey_date">
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="aims">*Number of Aims per Shift:</label>
                                <input type="text" class="form-control" id="aims" placeholder="Number of Aims per Shift" name="no_of_aims">
                            </div>
                        </div>
                        <div class="offset-3 col-6 my-3">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@stop

@push('include-js')
<script>
    $(function() {
        $("form.location").validate({
            onkeyup: false,
            onclick: false,
            onfocusout: false,
            rules: {
                address: "required",
                town: "required",
                postcode: "required",
                picture: "required",
                child_gender_preference: "required",
                staff_gender_preference: "required",
                no_of_aims: "required",
            },
            messages: {
                address: "Please Enter Address",
                town: "Please Enter Town",
                postcode: "Please Enter Postcode",
                picture: "Image Required",
                child_gender_preference: "Please Select Child Gender Preference",
                staff_gender_preference: "Please Select Staff Gender Preference",
                no_of_aims: "Please Enter No of Aims",
            },
            showErrors: function(errorMap, errorList) {
                toastr["error"](errorList[0].message);
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>
@endpush


@section('footer')
    @include('includes.footer')
@stop
