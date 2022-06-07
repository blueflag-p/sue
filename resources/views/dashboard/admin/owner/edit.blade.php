@extends('layouts.app')

@section('title')
Edit Owner/Director
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
        <form class="owner" action="{{ route('owner.update',[ 'id' => $item->id ]) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="card-header d-flex justify-content-between bg-transparent">
                            <div class="header-title">
                                <h2 class="card-title">Edit Owner/Director</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="employee_id">Employee ID:</label>
                        <input type="text" value="{{ $item->employee_id  }}" class="form-control" id="employee_id" name="employee_id" placeholder="Employee ID">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="system_role">*Role:</label>
                        <select class="form-control" id="inputGroupSelect01" name="system_role">
                            <option value='' selected="">Select Role</option>
                            <option value="1" {{ $item->system_role =="1" ? "selected" : "" }}>One</option>
                            <option value="2" {{ $item->system_role =="2" ? "selected" : "" }}>Two</option>
                            <option value="3" {{ $item->system_role =="3" ? "selected" : "" }}>Three</option>
                        </select>
                    </div>
                </div>
                <div class="col-6 my-3">
                    <div class="form-group">
                        <label for="first_name">*First Name:</label>
                        <input type="text" class="form-control" id="first_name"  value="{{ $item->first_name  }}" name="first_name" placeholder="First Name">
                    </div>
                </div>
                <div class="col-6 my-3">
                    <div class="form-group">
                        <label for="last_name">*Last Name:</label>
                        <input type="text" class="form-control" id="last_name" value="{{ $item->last_name  }}" name="last_name" placeholder="Last Name">
                    </div>
                </div>
                <div class="col-6 my-3">
                    <div class="form-group">
                        <label for="system_role">*Gender:</label>
                        <select class="form-control" id="inputGroupSelect01" name="gender">
                            <option value="" selected="">Select Gender</option>
                            <option value="Male" {{ $item->gender =="Male" ? "selected" : "" }}>One</option>
                            <option value="Female" {{ $item->gender =="Female" ? "selected" : "" }}>Two</option>
                            <option value="Other" {{ $item->gender =="Other" ? "selected" : "" }}>Three</option>
                        </select>
                    </div>
                </div>
                <div class="col-6 my-2">
                    <select id="multiple" class="js-states form-control" multiple name="company">
                        <option value="Company 1" {{ $item->company =="Company 1" ? "selected" : "" }}>Company 1</option>
                        <option value="Company 2" {{ $item->company =="Company 2" ? "selected" : "" }}>Company 2</option>
                        <option value="Company 3" {{ $item->company =="Company 3" ? "selected" : "" }}>Company 3</option>
                    </select>
                </div>
                <div class="col-4 my-3">
                    <div class="form-group">
                        <label for="email">*Email:</label>
                        <input type="email" class="form-control" id="email" value="{{ $item->email  }}" placeholder="Email" name="email">
                    </div>
                </div>
                <div class="col-4 my-3">
                    <div class="form-group">
                        <label for="mobile">*Mobile:</label>
                        <input type="text" class="form-control" id="mobile" value="{{ $item->mobile  }}" placeholder="mobile" name="mobile">
                    </div>
                </div>
                <div class="col-4 my-3">
                    <div class="form-group">
                        <label for="Landline">Landline:</label>
                        <input type="text" class="form-control" id="Landline" value="{{ $item->landline  }}" placeholder="Landline" name="landline">
                    </div>
                </div>
                <div class="col-12 my-3">
                    <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                        <input type="checkbox" class="custom-control-input bg-primary" id="customCheck-1"  @if( $item->dbs == 'on' ) checked @endif name="dbs">
                        <label class="custom-control-label" for="customCheck-1"> DBS Required </label>
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
                            <img id="blah" src="{{asset('storage/owner/'.$item->image)}}" width="200px" height="200px" alt="Responsive image">
                        </li>
                    </ul>
                </div>
                <div class="col-7 my-3">
                    <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                        <input type="checkbox" class="custom-control-input bg-primary" id="customCheck-2" @if( $item->is_image_correct == 'on' ) checked @endif name="is_image_correct">
                        <label class="custom-control-label" style="color: red;" for="customCheck-2"> Image is indeed correct and for the right person</label>
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
        $("form.owner").validate({
            onkeyup: false,
            onclick: false,
            onfocusout: false,
            rules: {
                // employee_id: "required",
                first_name: "required",
                last_name: "required",
                gender: "required",
                system_role: "required",
                email: "required",
                mobile: "required",
                // landline: "required",
                // picture:  {
                //     required: true, 
                //     accept: "image/jpeg, image/png"
                // }
            },
            messages: {
                // employee_id: "Please Enter Employee ID",
                first_name: "Please Enter First Name",
                last_name: "Please Enter Last Name",
                gender: "Please Select Gender",
                system_role: "Please Select Role",
                email: "Please Enter Email",
                mobile: "Please Enter Mobile",
                // landline: "Please Enter Landline",
                // picture: "Image Required",
            },
            showErrors: function(errorMap, errorList) {
            //    errorList.map((error)=>{
                toastr["error"](errorList[0].message);
            //    })
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
