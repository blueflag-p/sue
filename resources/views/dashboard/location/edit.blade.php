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
                <form class="location" action="{{ route('location.update',[ 'id' => $item->id ]) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="card-header d-flex justify-content-between bg-transparent">
                                    <div class="header-title">
                                        <h2 class="card-title">Edit Location
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
                                <input type="text" class="form-control" id="house_no" value="{{ $item->house_no  }}"  name="house_no" placeholder="House No">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="Registeration_Number">Registeration Number:</label>
                                <input type="text" class="form-control" id="Registeration_Number" value="{{ $item->registeration_number  }}"  name="registeration_number"
                                    placeholder="Registeration Number">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="Address">*Address:</label>
                                <input type="text" class="form-control" id="Address" placeholder="Address" value="{{ $item->address  }}"  name="address">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="Town">*Town:</label>
                                <input type="text" class="form-control" id="Town" placeholder="Town" value="{{ $item->town  }}"  name="town">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="Address">*Postcode:</label>
                                <input type="text" class="form-control" id="Postcode" placeholder="Postcode" value="{{ $item->postcode  }}"  name="postcode">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="Landline">Landline:</label>
                                <input type="text" class="form-control" id="Landline" placeholder="Landline" value="{{ $item->landline  }}"  name="landline">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="exampleInputdate">Start Date</label>
                                <input type="date" class="form-control" id="exampleInputdate" placeholder="Start Date" value="{{ $item->start_date  }}"  name="start_date">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="exampleInputdate">End Date</label>
                                <input type="date" class="form-control" id="exampleInputdate" placeholder="End Date" value="{{ $item->end_date  }}"  name="end_date">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="system_role">Region:</label>
                                <select class="form-control" id="inputGroupSelect01" name="region">
                                    <option value="" selected="">Select Region</option>
                                    <option value="1" {{ $item->region =="1" ? "selected" : "" }}>One</option>
                                    <option value="2" {{ $item->region =="2" ? "selected" : "" }}>Two</option>
                                    <option value="3" {{ $item->region =="3" ? "selected" : "" }}>Three</option>
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
                                    <img id="blah" src="{{asset('storage/location/'.$item->image)}}" width="200px" height="200px" alt="Responsive image">
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
                                    <option value="1" {{ $item->child_gender_preference =="1" ? "selected" : "" }}>One</option>
                                    <option value="2" {{ $item->child_gender_preference =="2" ? "selected" : "" }}>Two</option>
                                    <option value="3" {{ $item->child_gender_preference =="3" ? "selected" : "" }}>Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="system_role">*Staff Gender Preference:</label>
                                <select class="form-control" id="inputGroupSelect01" name="staff_gender_preference">
                                    <option value="" selected="">Select..</option>
                                    <option {{ $item->staff_gender_preference =="1" ? "selected" : "" }} value="1">One</option>
                                    <option {{ $item->staff_gender_preference =="2" ? "selected" : "" }} value="2">Two</option>
                                    <option {{ $item->staff_gender_preference =="3" ? "selected" : "" }} value="3">Three</option>
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
                                <input type="text" class="form-control" id="agent_name" placeholder="Agent Name" value="{{ $item->agent_name  }}"  name="agent_name">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="Address">Address:</label>
                                <input type="text" class="form-control" id="Address" placeholder="Agent Address" value="{{ $item->agent_address  }}"  name="agent_address">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="Town">Town:</label>
                                <input type="text" class="form-control" id="Town" placeholder="Agent Town" value="{{ $item->agent_town  }}"  name="agent_town">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="Postcode">Postcode:</label>
                                <input type="text" class="form-control" id="Postcode" placeholder="Postcode" value="{{ $item->agent_postcode  }}"  name="agent_postcode">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="Landline">Landline:</label>
                                <input type="text" class="form-control" id="Landline" placeholder="Landline" value="{{ $item->agent_landline  }}"  name="agent_landline">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="Email">Email:</label>
                                <input type="email" class="form-control" id="Email" placeholder="Agent Email" value="{{ $item->agent_email  }}"  name="agent_email">
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
                                <input type="text" class="form-control" id="Landlord_name" placeholder="Landlord Name" value="{{ $item->landlord_name  }}"  name="landlord_name">
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="Landlord_Address">Address:</label>
                                <input type="text" class="form-control" id="Landlord_Address" value="{{ $item->landlord_address  }}"  name="landlord_address" 
                                    placeholder="Landlord Address">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="Landlord_Town">Town:</label>
                                <input type="text" class="form-control" id="Landlord_Town" placeholder="Landlord Town" value="{{ $item->landlord_town  }}"  name="landlord_town">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="Landlord_Postcode">Postcode:</label>
                                <input type="text" class="form-control" id="Landlord_Postcode" value="{{ $item->landlord_postcode  }}"  name="landlord_postcode"
                                    placeholder="Landlord Postcode">
                            </div>
                        </div>
                        <div class="col-4 my-3">
                            <div class="form-group">
                                <label for="Landlord_Landline">Landline:</label>
                                <input type="text" class="form-control" id="Landlord_Landline" value="{{ $item->landlord_landline  }}"  name="landlord_landline"
                                    placeholder="Landlord Landline">
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="Landlord_Email">Email:</label>
                                <input type="email" class="form-control" id="Landlord_Email" placeholder="Landlord Email" value="{{ $item->landlord_email  }}"  name="landlord_email">
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="system_role">Head Location:</label>
                                <select class="form-control" id="inputGroupSelect01"  name="head_location">
                                    <option selected="">Select Head location</option>
                                    <option value="1" {{ $item->head_location =="1" ? "selected" : "" }}>One</option>
                                    <option value="2" {{ $item->head_location =="2" ? "selected" : "" }}>Two</option>
                                    <option value="3" {{ $item->head_location =="3" ? "selected" : "" }}>Three</option>
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
                                <input type="text" class="form-control" id="cost" placeholder="cost(in pounds)" value="{{ $item->tv_cost  }}"  name="tv_cost">
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="plan">TV Plan:</label>
                                <input type="text" class="form-control" id="plan" placeholder="Plan Number" value="{{ $item->tv_plan  }}"  name="tv_plan">
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="exampleInputdate">TV Expiry:</label>
                                <input type="date" class="form-control" id="exampleInputdate" placeholder="Start Date" value="{{ $item->tv_expirey_date  }}"  name="tv_expirey_date">
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="aims">*Number of Aims per Shift:</label>
                                <input type="text" class="form-control" id="aims" placeholder="Number of Aims per Shift" value="{{ $item->no_of_aims  }}"  name="no_of_aims">
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
                child_gender_preference: "required",
                staff_gender_preference: "required",
                no_of_aims: "required",
            },
            messages: {
                address: "Please Enter Address",
                town: "Please Enter Town",
                postcode: "Please Enter Postcode",
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
