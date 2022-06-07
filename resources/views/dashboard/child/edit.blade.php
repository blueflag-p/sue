@extends('layouts.app')

@section('title')
Edit Child
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="card-header d-flex justify-content-between bg-transparent">
                                <div class="header-title">
                                    <h2 class="card-title">Edit Child
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="dc-tabscontenttitle">
                            <h3>Personal Information</h3>
                        </div>
                    </div>
                    <form class='w-100 row child' action="{{ route('child.update',[ 'id' => $item->id ]) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="col-4">
                            <div class="form-group">
                                <label for="Status">*Legal Status:</label>
                                <input type="text" class="form-control" id="Status" value="{{ $item->status  }}"  name="status" placeholder="Legal Status">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="First_Name">*First Name:</label>
                                <input type="text" class="form-control" id="First_Name" value="{{ $item->first_name  }}"  name="first_name" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="Middle_Name">Middle Name:</label>
                                <input type="text" class="form-control" id="Middle_Name" value="{{ $item->middle_name  }}"  name="middle_name" placeholder="Middle Name">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="Last_Name">*Last Name:</label>
                                <input type="text" class="form-control" id="Last_Name" value="{{ $item->last_name  }}"  name="last_name" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="exampleInputdate">*Date of Birth</label>
                                <input type="date" class="form-control" id="exampleInputdate" value="{{ $item->dob  }}"  name="dob" placeholder="Date of Birth">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="system_role">*Gendr:</label>
                                <select class="form-control" id="inputGroupSelect01" name="gender">
                                    <option value="" selected="">Select Gender</option>
                                    <option value="1" {{ $item->gender =="1" ? "selected" : "" }}>One</option>
                                    <option value="2" {{ $item->gender =="2" ? "selected" : "" }}>Two</option>
                                    <option value="3" {{ $item->gender =="3" ? "selected" : "" }}>Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="system_role">*Address:</label>
                                <select class="form-control" id="inputGroupSelect01"  name="address_type">
                                    <option value="" selected="">Select Address</option>
                                    <option value="1" {{ $item->address_type =="1" ? "selected" : "" }}>One</option>
                                    <option value="2" {{ $item->address_type =="2" ? "selected" : "" }}>Two</option>
                                    <option value="3" {{ $item->address_type =="3" ? "selected" : "" }}>Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="Address">Address prior to placement:</label>
                                <input type="text" class="form-control" id="Address" value="{{ $item->placement_address  }}"  name="placement_address"
                                    placeholder="Address prior to placement">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="Telephone">Home Telephone Number:</label>
                                <input type="text" class="form-control" id="Telephone" value="{{ $item->telephone  }}"  name="telephone" placeholder="Home Telephone Number">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="Mobile">Mobile Telephone Number:</label>
                                <input type="text" class="form-control" id="Mobile" value="{{ $item->mobile  }}"  name="mobile" placeholder="Mobile Telephone Number">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="system_role">Recial Origin/Ethnicity:</label>
                                <select class="form-control" id="inputGroupSelect01" name="ethnicity">
                                    <option value="" selected="">Select Ethnicity</option>
                                    <option value="1" {{ $item->ethnicity =="1" ? "selected" : "" }}>One</option>
                                    <option value="2" {{ $item->ethnicity =="2" ? "selected" : "" }}>Two</option>
                                    <option value="3" {{ $item->ethnicity =="3" ? "selected" : "" }}>Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="Religion">Religion:</label>
                                <input type="text" class="form-control" id="Religion" value="{{ $item->religion }}"  name="religion" placeholder="Religion">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="National_Insurance">National Insurance:</label>
                                <input type="text" class="form-control" id="National_Insurance" value="{{ $item->national_insurance }}"  name="national_insurance"
                                    placeholder="National Insurance">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="kin">Next of kin:</label>
                                <input type="text" class="form-control" id="kin" placeholder="Next of kin" value="{{ $item->kin }}"  name="kin">
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="Allergy">Allergy:</label>
                                <input type="text" class="form-control" id="Allergy" placeholder="Allergy" value="{{ $item->allergy }}"  name="allergy">
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="School">School:</label>
                                <input type="text" class="form-control" id="School" placeholder="School" value="{{ $item->school }}"  name="school">
                            </div>
                        </div>
                        <div class="col-12 my-3">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"> Address Of School</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" value="{{ $item->school_address  }}"  name="school_address"></textarea>
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="School_tel">Telephone number of school:</label>
                                <input type="text" class="form-control" id="School_tel" value="{{ $item->school_tel  }}"  name="school_tel"
                                    placeholder="Telephone number of school">
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="Eye_color">Eye Color:</label>
                                <input type="text" class="form-control" id="Eye_color" placeholder="Eye Color" value="{{ $item->eye_color  }}"  name="eye_color">
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="Hair_Color">Hair Color:</label>
                                <input type="text" class="form-control" id="Hair_Color" placeholder="Hair Color" value="{{ $item->hair_color  }}"  name="hair_color">
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="Height">Height(in meters):</label>
                                <input type="text" class="form-control" id="Height" placeholder="Height(in meters)" value="{{ $item->height  }}"  name="height">
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"> Build</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" value="{{ $item->build  }}"  name="build"></textarea>
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"> Distinguish Features:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" value="{{ $item->distinguish_features  }}"  name="distinguish_features"></textarea>
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="system_role">In education:</label>
                                <select class="form-control" id="inputGroupSelect01" name="education_type">
                                    <option value="" selected="">Select..</option>
                                    <option value="1" {{ $item->education_type =="1" ? "selected" : "" }}>One</option>
                                    <option value="2" {{ $item->education_type =="2" ? "selected" : "" }}>Two</option>
                                    <option value="3" {{ $item->education_type =="3" ? "selected" : "" }}>Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"> Placing Authority:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" value="{{ $item->placing_Authority }}"  name="placing_Authority"></textarea>
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"> Complexion:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" value="{{ $item->complexion }}"  name="complexion"></textarea>
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"> Who Has Parental Responsibilty:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" value="{{ $item->parental_responsibilty }}"  name="parental_responsibilty"></textarea>
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"> Any Other Form Of Communication:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" value="{{ $item->form_communication }}"  name="form_communication"></textarea>
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"> Previous Names:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" value="{{ $item->previos_name }}"  name="previos_name"></textarea>
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"> GP Details:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" value="{{ $item->gp_details  }}"  name="gp_details"></textarea>
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"> Key Worker:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" value="{{ $item->key_worker  }}"  name="key_worker"></textarea>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="dc-tabscontenttitle my-3">
                                <h3>Child's Employer</h3>
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"> Child's Employer:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" value="{{ $item->child_employer }}"  name="child_employer"></textarea>
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"> Contact Name:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" value="{{ $item->contact_name }}"  name="contact_name"></textarea>
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"> Address:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" value="{{ $item->address }}"  name="address"></textarea>
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="Tel_no">Tel No:</label>
                                <input type="text" class="form-control" id="Tel_no" placeholder="Tel No" value="{{ $item->tel_no }}"  name="tel_no">
                            </div>
                        </div>
                        <div class="col-12 my-3">
                            <p style="font-weight: bold;">Photo(Please upload an image with thier face and ID):</p>
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="imgInp"  name="picture">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <ul class="list-unstyled p-0 m-0 row">
                                <li class="col-lg-12 col-md-12 col-sm-12">
                                    <img id="blah" src="{{asset('storage/child/'.$item->image)}}" width="200px" height="200px" alt="Responsive image">
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 my-3">
                            <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                                <input type="checkbox" class="custom-control-input bg-primary" id="customCheck-1" @if( $item->image_check == 'on' ) checked @endif  name="image_check">
                                <label class="custom-control-label" style="color: red;" for="customCheck-1"> 
                                    Image is indeed correct and for the right person
                                </label>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="dc-tabscontenttitle my-3">
                                <h3>Dates</h3>
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="exampleInputdate">*Admission Date:</label>
                                <input type="date" class="form-control" id="exampleInputdate" placeholder="Admission Date" value="{{ $item->Admission_date  }}"  name="Admission_date">
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="exampleInputdate">Discharge Date:</label>
                                <input type="date" class="form-control" id="exampleInputdate" placeholder="Discharge Date" value="{{ $item->discharge_date  }}"  name="discharge_date">
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="exampleInputdate">Date Of Last LAC review:</label>
                                <input type="date" class="form-control" id="exampleInputdate"
                                    placeholder="Date Of Last LAC review" value="{{ $item->Lac_review_date  }}"  name="Lac_review_date">
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="exampleInputdate">Date Of next LAC review:</label>
                                <input type="date" class="form-control" id="exampleInputdate"
                                    placeholder="Date Of next LAC review" value="{{ $item->lac_review_next_date  }}"  name="lac_review_next_date">
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="dc-tabscontenttitle my-3">
                                <h3>Comments</h3>
                            </div>
                        </div>
                        <div class="col-12 my-3">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"> Comments:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" value="{{ $item->comments  }}"  name="comments"></textarea>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="dc-tabscontenttitle my-3">
                                <h3>Special Dietary Reuirements</h3>
                            </div>
                        </div>
                        <div class="col-12 my-3">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"> Special Dietary Reqirements:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" value="{{ $item->special_dietart_reqirements  }}"  name="special_dietart_reqirements"></textarea>
                            </div>
                        </div>
                        <div class="col-12 my-3">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"> Local Authority:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" value="{{ $item->local_authority  }}"  name="local_authority"></textarea>
                            </div>
                        </div>
                        <div class="offset-3 col-6 my-3">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@stop

@push('include-js')
<script>
    $(function() {
        $("form.child").validate({
            onkeyup: false,
            onclick: false,
            onfocusout: false,
            rules: {
                status: "required",
                first_name: "required",
                last_name: "required",
                dob: "required",
                gender: "required",
                address_type: "required",
                Admission_date: "required",
            },
            messages: {
                status: "Please Enter Status",
                first_name: "Please Enter First Name",
                last_name: "Please Enter Last Name",
                dob: "Please Enter Date of birth",
                gender: "Please Select Gender",
                address_type: "Please Select Address Type",
                Admission_date: "Please Enter Admission Date",
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
