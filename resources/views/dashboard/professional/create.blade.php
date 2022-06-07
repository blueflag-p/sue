@extends('layouts.app')

@section('title')
   Create Professional
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
    <form class="professional" action="{{ route('professional.store') }}" method="post"  enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="card-header d-flex justify-content-between bg-transparent">
                        <div class="header-title">
                            <h2 class="card-title">Create Professional
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="Company_Name">*Professional Name:</label>
                    <input type="text" class="form-control" id="Company_Name" name="company_name" placeholder="Professional Name" required="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="system_role">* Type: </label>
                    <select class="form-control" id="inputGroupSelect01"  name="system_role">
                        <option value="" selected="" disabled>Select Type</option>
                        <option value="Social Worker">Social Worker</option>
                        <option value="PA/SWA">PA/SWA</option>
                        <option value="Local Authority">Local Authority</option>
                        <option value="Reviewing Office">Reviewing Office</option>
                        <option value="YOT">YOT</option>
                        <option value="CAMHS">CAMHS</option>
                        <option value="GP">GP</option>
                        <option value="Dentist">Dentist</option>
                        <option value="Opticians">Opticians</option>
                        <option value="EDT Contact">EDT Contact</option>
                        <option value="Advocate">Advocate</option>
                        <option value="Employer">Employer</option>
                        <option value="Education">Education</option>
                        <option value="Probation">Probation</option>
                        <option value="Finance">Finance</option>
                        <option value="YPT">YPT</option>
                        <option value="Bail Worker">Bail Worker</option>
                        <option value="Maintenance">Maintenance</option>
                        <option value="Independent Visitor">Independent Visitor</option>
                        <option value="Virtual Schools">Virtual Schools</option>
                        <option value="Health">Health</option>
                        <option value="Police">Police</option>
                        <option value="Missing from home team">Missing from home team</option>
                        <option value="CSE team">CSE team</option>
                        <option value="EDT">EDT</option>
                        <option value="Therapist">Therapist</option>
                        <option value="Interview">Interview</option>
                        <option value="Reg 44">Reg 44</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 my-3">
                <div class="form-group">
                    <label for="Address">*Address:</label>
                    <input type="text" class="form-control" id="Address" name="address" placeholder="Address">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 my-3">
                <div class="form-group">
                    <label for="Telephone">Telephone:</label>
                    <input type="text" class="form-control" id="Telephone" name="telephone" placeholder="Telephone">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 my-3">
                <div class="form-group">
                    <label for="First_Name">Alt Telephone:</label>
                    <input type="text" class="form-control" id="First_Name" name="alt_telephone" placeholder="Alt Telephone" >
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 my-3">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="Email" name="email" placeholder="Email">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="First_Name">Car registration number:</label>
                    <input type="text" class="form-control" id="First_Name" name="car_reg_no" placeholder="Company Name" >
                </div>
            </div>
            <div class="col-12 my-3">
                <p style="font-weight: bold;">Photo (Please upload an image with their face and ID)</p>
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
                <div class="offset-3 col-6 my-3">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
@stop

@push('include-js')
<script>
    $(function() {
        $("form.professional").validate({
            onkeyup: false,
            onclick: false,
            onfocusout: false,
            rules: {
                company_name: "required",
                system_role: "required",
                address: "required",
            },
            messages: {
                company_name: "Please Enter Company Name",
                system_role: "Please Select System Role",
                address: "Please Enter Address",
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
