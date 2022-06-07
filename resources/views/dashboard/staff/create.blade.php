@extends('layouts.app')

@section('title')
    Create Staff
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
            </style>
            <div class="container-fluid">
                <form class="staff" action="{{ route('staff.store') }}" method="post"  enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="card-header d-flex justify-content-between bg-transparent">
                                    <div class="header-title">
                                        <h2 class="card-title">Create Staff
                                        </h2>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group">
                                <label for="employee_id">Employee ID:</label>
                                <input type="text" class="form-control" id="employee_id" name="employee_id" placeholder="Employee ID">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="system_role">*System Role:</label>
                                <select class="form-control" id="inputGroupSelect01" name="system_role">
                                    <option value="" selected="">Select System Role</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="system_role">Title:</label>
                                <select class="form-control" id="inputGroupSelect01" name="title">
                                    <option selected="">Select Title</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="first_name">First Name:</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="last_name">Last Name:</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="system_role">Gender:</label>
                                <select class="form-control" id="inputGroupSelect01" name="gender">
                                    <option selected="">Select Gender</option>
                                    <option value="male">One</option>
                                    <option value="female">Two</option>
                                    <option value="other">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 my-3">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"> * Location (Please Select Gender First)</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="location" ></textarea>
                            </div>
                        </div>
                        <div class="col-12 my-2">
                            <div class="alert alert-primary" role="alert">
                                <div class="iq-alert-text">If no location us choosen as main location. then all the above
                                    selected locations will be treated as main locations</div>
                            </div>
                        </div>
                        <div class="col-12 my-3">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"> Main Location:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="main_location"></textarea>
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                                <input type="checkbox" class="custom-control-input bg-primary" id="customCheck-1" name="driver">
                                <label class="custom-control-label" for="customCheck-1"> Driver</label>
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                                <input type="checkbox" class="custom-control-input bg-primary" id="customCheck-2" name="fire_marshal">
                                <label class="custom-control-label" for="customCheck-2"> Fire Marshal</label>
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                                <input type="checkbox" class="custom-control-input bg-primary" id="customCheck-3" name="first_aider">
                                <label class="custom-control-label" for="customCheck-3"> First Aider</label>
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="job_title">Job Title:</label>
                                <input type="text" class="form-control" id="job_title" name="job_title" placeholder="Job Title">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="system_role">*Holiday Type:</label>
                                <select class="form-control" id="inputGroupSelect01" name="holiday_type">
                                    <option value="" selected="">Select holiday type</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="system_role">Status:</label>
                                <select class="form-control" id="inputGroupSelect01" name="status">
                                    <option selected="">Select Status</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="system_role">Position:</label>
                                <select class="form-control" id="inputGroupSelect01" name="position">
                                    <option selected="">Select postion</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="system_role">Do you agree to work on bank holiday?:</label>
                                <select class="form-control" id="inputGroupSelect01" name="agree_with_holiday">
                                    <option value="2" selected>NO</option>
                                    <option value="3">YES</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="email">*Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="mobile">Mobile:</label>
                                <input type="text" class="form-control" id="mobile" placeholder="Mobile" name="mobile">
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
                                <label for="Landline">Landline:</label>
                                <input type="text" class="form-control" id="Landline" placeholder="Landline" name="landline">
                            </div>
                        </div>
                        <div class="col-12 my-3">
                            <p style="font-weight: bold;">*Photo(Please upload an image with thier face and ID):</p>
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="imgInp" name="picture">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <ul class="list-unstyled p-0 m-0 row">
                                <li class="col-lg-12 col-md-12 col-sm-12">
                                    <img id="blah" src="{{asset('assets/images/no_avatar.jpg')}}" class=" " width="200px" height="200px" alt="Responsive image">
                                </li>
                            </ul>
                        </div>
                        <div class="col-7 my-3">
                            <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                                <input type="checkbox" class="custom-control-input bg-primary" id="customCheck-4" name="is_image_correct">
                                <label class="custom-control-label" style="color: red;" for="customCheck-4"> 
                                    Image is indeed correct and for the right person
                                </label>
                            </div>
                        </div>
                        <div class="col-5 my-3">
                            <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                                <input type="checkbox" class="custom-control-input bg-primary" id="customCheck-5" name="medical_alert">
                                <label class="custom-control-label" for="customCheck-5"> Medical Alert</label>
                            </div>
                        </div>
                        <div class="col-12 my-3">
                            <label for="exampleInputdate">Signature:</label>
                            <p style="font-size: large;">User can update their signature by editing profile</p>
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
        $("form.staff").validate({
            onkeyup: false,
            onclick: false,
            onfocusout: false,
            rules: {
                email: "required",
                system_role: "required",
                location: "required",
                picture: "required",
                holiday_type: "required",
            },
            messages: {
                email: "Please Enter Email",
                system_role: "Please Select System Role",
                location: "Please Enter Location",
                picture: "Image Required",
                holiday_type: "Please Select Holiday Type",
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
