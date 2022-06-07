@extends('layouts.app')

@section('title')
    Assign Location Forms
@stop

@section('header')
    @include('includes.header')
@stop
@section('sidebar')
    @include('includes.sidebar')
@stop


@section('content')
<div class="content-page">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="card-header d-flex justify-content-between bg-transparent">
                <div class="header-title">
                  <h2 class="card-title">Assign Location Forms
                  </h2>
                </div>
              </div>


            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="input-group ">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Locations</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01">
              <option selected="">Select Location</option>
              <option value="1">Assign to All locations</option>
              <option value="2">One</option>
              <option value="3">Two</option>
            </select>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="row">
            <div class="card-header d-flex justify-content-between bg-transparent">
              <div class="header-title">
                <h4 class="card-title ml-4 text-primary">Select Location Forms
                </h4>
              </div>
            </div>


          </div>
        </div>
        <div class="container">
          <div class="row main_checkboxes">
            <div class="col-6">
              <div class="custom-control custom-checkbox custom-control-inline my-2">
                <input type="checkbox" class="custom-control-input maincheckbox" id="sub_div_1">
                <label class="custom-control-label font-weight-bold " for="sub_div_1">Accident Form
                </label>
              </div>
            </div>
            <div class="col-6">
              <div class="custom-control custom-checkbox custom-control-inline my-2">
                <input type="checkbox" class="custom-control-input " id="care">
                <label class="custom-control-label font-weight-bold" for="care">Complaints Register
                  plan</label>
              </div>
            </div>
            <div class="col-sm-6 col-lg-6  my-4 sub_div_1">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <div class="custom-control custom-checkbox custom-control-inline my-2">
                        <input type="checkbox" class="custom-control-input" id="Mandatory">
                        <label class="custom-control-label font-weight-bold " for="Mandatory">Mandatory?
                        </label>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="custom-control custom-checkbox custom-control-inline my-2">
                        <input type="checkbox" class="custom-control-input" id="Summary">
                        <label class="custom-control-label font-weight-bold " for="Summary">Need
                          Form Summary?
                        </label>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="custom-control custom-checkbox custom-control-inline my-2">
                        <input type="checkbox" class="custom-control-input" id="unique">
                        <label class="custom-control-label font-weight-bold " for="unique">Generate and show unique ID?
                        </label>
                      </div>
                    </div>
                    <div class="col-12 my-4">
                      <h6>Form Expiry</h6>
                      <select class="custom-select my-2" id="datetimeselector">
                        <option selected="" value="never">Never</option>
                        <option value="1">Daily</option>
                        <option value="2">Weekly</option>
                        <option value="4">Fortnightly</option>
                        <option value="5">Monthly</option>
                        <option value="6">Quarterly</option>
                        <option value="7">Half-yearly</option>
                        <option value="8">yearly</option>
                      </select>
                    </div>
                    <div class="col-6 date">
                      <h6>Start Date :</h6>

                      <div class="form-group">
                        <input type="date" class="form-control" id="exampleInputdate" value="2019-12-18">
                      </div>
                    </div>
                    <div class="col-6 time">
                      <h6>Daily task appear time :</h6>
                      <div class="form-group">
                        <input type="time" class="form-control" id="exampleInputtime" value="" placeholder="">
                      </div>
                    </div>
                    <div class="col-4 my-4">
                      <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#version"><i
                          class="fa fa-plus" aria-hidden="true"></i>
                        Version</a>
                    </div>
                    <div class="col-4 my-4">
                      <div class="custom-control custom-radio custom-control-inline my-2">
                        <input type="radio" id="customRadio6" name="customRadio-1" data-toggle="modal"
                          data-target="#version_1" class="custom-control-input">
                        <label class="custom-control-label font-weight-bold" for="customRadio6">
                          Version 1 </label>
                      </div>
                    </div>
                    <div class="col-4 my-4">
                      <div class="custom-control custom-radio custom-control-inline my-2">
                        <input type="radio" id="customRadio7" name="customRadio-1" data-toggle="modal"
                          data-target="#version_2" class="custom-control-input">
                        <label class="custom-control-label font-weight-bold" for="customRadio7">
                          Version 2
                        </label>
                      </div>
                    </div>

                    <div class="col-12 my-4">
                      <button href="#" onclick="assign_success()" class="btn btn-primary">Assign</button>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>

        </div>
      </div>
    </div>
    <!-- modals -->
    <!-- version modal -->
    <div id="version" class="modal fade" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Accident Form
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-4 my-2">
                <h5>Version Name</h5>
              </div>
              <div class="col-8">
                <input type="text" class="form-control" placeholder="Version name">
              </div>
              <div class="col-12 my-4">
                <div class="custom-control custom-checkbox custom-control-inline my-2">
                  <input type="checkbox" class="custom-control-input" onClick="toggle(this)" id="selectall">
                  <label class="custom-control-label font-weight-bold " for="selectall">Select/Deselect all
                  </label>
                </div>
              </div>
              <div class="col-6">
                <div class="custom-control custom-checkbox custom-control-inline my-2">
                  <input type="checkbox" class="custom-control-input" name="versions" id="selectall">
                  <label class="custom-control-label font-weight-bold" for="selectall">lorem Ipsum 1
                  </label>
                </div>
              </div>
              <div class="col-6">
                <div class="custom-control custom-checkbox custom-control-inline my-2">
                  <input type="checkbox" class="custom-control-input" name="versions" id="selectall">
                  <label class="custom-control-label font-weight-bold " for="selectall">lorem Ipsum 2
                  </label>
                </div>
              </div>
              <div class="col-6">
                <div class="custom-control custom-checkbox custom-control-inline my-2">
                  <input type="checkbox" class="custom-control-input" name="versions" id="selectall">
                  <label class="custom-control-label font-weight-bold " for="selectall">lorem Ipsum 3
                  </label>
                </div>
              </div>
              <div class="col-6">
                <div class="custom-control custom-checkbox custom-control-inline my-2">
                  <input type="checkbox" class="custom-control-input" name="versions" id="selectall">
                  <label class="custom-control-label font-weight-bold " for="selectall">lorem Ipsum 4
                  </label>
                </div>
              </div>
              <div class="col-12 my-4">
                <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#version_1">submit</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="version_1" class="modal fade" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Version 1
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-4 my-2">
                <h5>Version Name</h5>
              </div>
              <div class="col-8">
                <input type="text" class="form-control" value="all" placeholder="Version name">
              </div>
              <div class="col-6">
                <div class="custom-control custom-checkbox custom-control-inline my-2">
                  <input type="checkbox" class="custom-control-input" checked disabled>
                  <label class="custom-control-label font-weight-bold" for="selectall">lorem Ipsum 1
                  </label>
                </div>
              </div>
              <div class="col-6">
                <div class="custom-control custom-checkbox custom-control-inline my-2">
                  <input type="checkbox" class="custom-control-input" checked disabled>
                  <label class="custom-control-label font-weight-bold " for="selectall">lorem Ipsum 2
                  </label>
                </div>
              </div>
              <div class="col-6">
                <div class="custom-control custom-checkbox custom-control-inline my-2">
                  <input type="checkbox" class="custom-control-input" checked disabled>
                  <label class="custom-control-label font-weight-bold " for="selectall">lorem Ipsum 3
                  </label>
                </div>
              </div>
              <div class="col-6">
                <div class="custom-control custom-checkbox custom-control-inline my-2">
                  <input type="checkbox" class="custom-control-input" checked disabled>
                  <label class="custom-control-label font-weight-bold" for="selectall">lorem Ipsum 4
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="version_2" class="modal fade" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Version 2
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-4 my-2">
                <h5>Version Name</h5>
              </div>
              <div class="col-8">
                <input type="text" class="form-control" value="all" placeholder="Version name">
              </div>
              <div class="col-6">
                <div class="custom-control custom-checkbox custom-control-inline my-2">
                  <input type="checkbox" class="custom-control-input" checked disabled>
                  <label class="custom-control-label font-weight-bold" for="selectall">lorem Ipsum 1
                  </label>
                </div>
              </div>
              <div class="col-6">
                <div class="custom-control custom-checkbox custom-control-inline my-2">
                  <input type="checkbox" class="custom-control-input" checked disabled>
                  <label class="custom-control-label font-weight-bold " for="selectall">lorem Ipsum 2
                  </label>
                </div>
              </div>
              <div class="col-6">
                <div class="custom-control custom-checkbox custom-control-inline my-2">
                  <input type="checkbox" class="custom-control-input" checked disabled>
                  <label class="custom-control-label font-weight-bold " for="selectall">lorem Ipsum 3
                  </label>
                </div>
              </div>
              <div class="col-6">
                <div class="custom-control custom-checkbox custom-control-inline my-2">
                  <input type="checkbox" class="custom-control-input" checked disabled>
                  <label class="custom-control-label font-weight-bold" for="selectall">lorem Ipsum 4
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@stop

@section('footer')
    @include('includes.footer')
@stop
