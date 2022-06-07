@extends('layouts.app')

@section('title')
Edit Professional Company
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
                <form class='company' action="{{ route('professional.company.update',[ 'id' => $item->id ]) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="card-header d-flex justify-content-between bg-transparent">
                                    <div class="header-title">
                                        <h2 class="card-title">Edit Professional Company</h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="Company_Name">*Company Name:</label>
                                <input type="text" class="form-control" id="Company_Name" value="{{ $item->company_name }}"  name="company_name" placeholder="Company Name">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="Contact_Name">*Contact Name:</label>
                                <input type="text" class="form-control" id="Contact Name" value="{{ $item->contact_name }}"  name="contact_name" placeholder="Full Name">
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="Address">*Address:</label>
                                <input type="text" class="form-control" id="Address" value="{{ $item->address }}"  name="address" placeholder="Address">
                            </div>
                        </div>

                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="Telephone">Telephone:</label>
                                <input type="text" class="form-control" id="Telephone" value="{{ $item->telephone }}"  name="telephone" placeholder="Telephone">
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" value="{{ $item->email }}"  name="email" id="Email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="Website">Website:</label>
                                <input type="text" class="form-control" value="{{ $item->website }}"  name="website" id="Website" placeholder="Website">
                            </div>
                        </div>
                        <div class="col-12 my-3">
                            <p style="font-weight: bold;">Logo:</p>
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="imgInp" name="picture">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <ul class="list-unstyled p-0 m-0 row">
                                <li class="col-lg-12 col-md-12 col-sm-12">
                                    <img id="blah" src="{{asset('storage/company/logo/'.$item->image)}}" class=" " width="200px" height="200px" alt="Responsive image">
                                </li>
                            </ul>
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
        $("form.company").validate({
            onkeyup: false,
            onclick: false,
            onfocusout: false,
            rules: {
                company_name: "required",
                contact_name: "required",
                address: "required",
            },
            messages: {
                company_name: "Please Enter Email",
                contact_name: "Please Select System Role",
                address: "Please Enter Location",
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
