@extends('layouts.app')

@section('title')
    Blank Page
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
          <div class="col-lg-4">
            <div class="card card-block p-card">
              <div class="profile-box ">
                <div class="profile-card rounded">
                  <img src="assets/images/user/1.jpg" alt="profile-bg"
                  class="avatar-100 rounded d-block mx-auto img-fluid mb-3">
                  <h3 class="font-600 text-white text-center mb-0">Uk</h3>
                  <p class="text-white text-center mb-5">edit profile</p>
                </div>
                <div class="pro-content rounded">

                  <div class="row">
                    <div class="col">
                      <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                        <a class="first nav-link" data-toggle="modal" data-target=".profile">Profile</a>
                        <a class="first nav-link" data-toggle="modal" data-target=".locationcost">Location Cost</a>
                        <a class="first nav-link" data-toggle="modal" data-target=".supporthours">Support Hours</a>
                        <a class="first nav-link" data-toggle="modal" data-target=".ofstedrating">Ofsted Rating</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <div class="col col-lg-8">
            <div class="row">
              <div class="col-sm-12 col-lg-3">
                <a data-toggle="modal" data-target=".logsModel">
                  <div class="shadow-bottom shadow-showcase text-center">
                    <div class="card">
                      <div class="card-body text-center">

                        <div class="round-box">
                          <img src="assets/images/icon/log-files.png" width="128" />
                          <!-- <p class="h5 mb-0">Logs</p> -->
                          <div class="nav flex-column nav-link" id="v-pills-tab" role="tablist"
                          aria-orientation="vertical">
                          <p class="h6 text-primary">Logs</a>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-sm-12 col-lg-3">
                <a data-toggle="modal" data-target=".staffaims">
                  <div class="shadow-bottom shadow-showcase text-center">
                    <div class="card">
                      <div class="card-body text-center">
                        <div class="round-box">
                          <img src="assets/images/icon/teamwork.png" width="128" />
                          <div class="nav flex-column nav-link" id="v-pills-tab" role="tablist"
                          aria-orientation="vertical">
                          <p class="h6 text-primary">Staff Aims</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-sm-12 col-lg-3">
                <a data-toggle="modal" data-target=".forms">
                  <div class="shadow-bottom shadow-showcase text-center">
                    <div class="card">
                      <div class="card-body text-center">

                        <div class="round-box">
                          <img src="assets/images/icon/form.png" width="128" />
                          <div class="nav flex-column nav-link" id="v-pills-tab" role="tablist"
                          aria-orientation="vertical">
                          <p class="h6 text-primary">Forms</a>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-sm-12 col-lg-3">
                <a data-toggle="modal" data-target=".people">
                  <div class="shadow-bottom shadow-showcase text-center">
                    <div class="card">
                      <div class="card-body text-center">

                        <div class="round-box">
                          <img src="assets/images/icon/team.png" width="128" />
                          <div class="nav flex-column nav-link" id="v-pills-tab" role="tablist"
                          aria-orientation="vertical">
                          <p class="h6 text-primary">People</a>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-sm-12 col-lg-3">
                <a data-toggle="modal" data-target=".property">
                  <div class="shadow-bottom shadow-showcase text-center">
                    <div class="card">
                      <div class="card-body text-center">

                        <div class="round-box">
                          <img src="assets/images/icon/house.png" width="128" />
                          <!-- <p class="h5 mb-0">Property</p> -->
                          <div class="nav flex-column nav-link" id="v-pills-tab" role="tablist"
                          aria-orientation="vertical">
                          <p class="h6 text-primary">Property</a>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </a>
              </div>

            </div>
          </div>


          <div class="col-lg-8">
            <div class="my-5 card card-block tab-content" id="v-pills-tabContent">
              <!-- Profile Details -->
              <div class="modal fade profile" tabindex="-1" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Profile</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-12">

                          <div class="card-body">
                            <div class="container">
                              <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 p-1">
                                  <h5 class="mb-2 mt-4">Property</h5>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                                  <h6>House No :</h6>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                                  <h6>Registration Number :</h6>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                                  <h6>Town :</h6>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                                  <h6>Postcode :</h6>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                                  <h6>Landline :</h6>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                                  <h6>Start Date :</h6>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                                  <h6>End Date :</h6>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                                  <h6>Region :</h6>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                                  <h6>Photo :</h6>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 p-1">
                                  <h5 class="mb-2 mt-4">Restrictions</h5>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                                  <h6>child Gender Preference :</h6>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                                  <h6>Staff Gender Preference :</h6>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 p-1">
                                  <h5 class="mb-2 mt-4">Agent</h5>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                                  <h6>Name :</h6>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                                  <h6>Address :</h6>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                                  <h6>Town :</h6>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 p-1">
                                  <h6>Postcode :</h6>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 p-1"> - </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 p-1">
                                  <h6>Landline :</h6>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 p-1"> - </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 p-1">
                                  <h6>Email :</h6>
                                </div>
                                <div class="col-lg-6 col-md-3 col-sm-6 p-1"> - </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 p-1">
                                  <h5 class="mb-2 mt-4">Landlord</h5>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 p-1">
                                  <h6>Name :</h6>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 p-1"> - </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 p-1">
                                  <h6>Address :</h6>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 p-1"> - </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 p-1">
                                  <h6>Town :</h6>
                                </div>
                                <div class="col-lg-6 col-md-3 col-sm-6 p-1"> - </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 p-1">
                                  <h6>Postcode :</h6>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 p-1"> - </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 p-1">
                                  <h6>Landline :</h6>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 p-1"> - </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 p-1">
                                  <h6>Email :</h6>
                                </div>
                                <div class="col-lg-6 col-md-3 col-sm-6 p-1"> - </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 p-1">
                                  <h5 class="mb-2 mt-4">Others</h5>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 p-1">
                                  <h6>TV Cost :</h6>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 p-1"> - </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 p-1">
                                  <h6>TV Plan :</h6>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 p-1"> - </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 p-1">
                                  <h6>TV Expiry :</h6>
                                </div>
                                <div class="col-lg-6 col-md-3 col-sm-6 p-1"> - </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 p-1">
                                  <h6>Aims Per Shift :</h6>
                                </div>
                                <div class="col-lg-6 col-md-3 col-sm-6 p-1"> - </div>
                              </div>
                            </div>
                          </div>

                        </div>

                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>



              <!-- Location Cost -->
              <div class="modal fade locationcost" tabindex="-1" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Location Cost</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-12">

                          <div class="card-header d-flex justify-content-between pb-0">
                            <div class="header-title">
                              <h4 class="card-title mb-0">Location Cost -</h4>
                              <a href="">Edit or Insert</a>
                            </div>
                          </div>
                          <div class="card-body">
                            <div class="container">
                              <div class="row">
                                <div class="alert alert-danger" role="alert">
                                  No Additional Support Pakages Exists for current week
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>

                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>


              <!-- support Hours -->
              <div class="modal fade supporthours" tabindex="-1" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Support Hours</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-12">

                          <div class="card-header d-flex justify-content-between pb-0">
                            <div class="header-title">
                              <h4 class="card-title mb-0">Support Hours -</h4>
                              <a href="">Edit or Insert</a>
                            </div>
                          </div>
                          <div class="card-body">
                            <div class="container">
                              <div class="row">
                                <div class="alert alert-danger" role="alert">
                                  No Professionals assigned yet
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>

                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>


              <!-- Ofsted Rating -->
              <div class="modal fade ofstedrating" tabindex="-1" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Ofsted Rating</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-12">

                          <div class="card-header d-flex justify-content-between pb-0">
                            <div class="header-title">
                              <h4 class="card-title mb-0">Ofsted Rating -</h4>
                              <a href="">Edit or Insert</a>
                            </div>
                          </div>
                          <div class="card-body">
                            <div class="container">
                              <div class="row">
                                <h5 class="ml-5">Placement Price:</h5>
                                <span class="price ml-auto mr-5">£0.00</span>
                              </div>
                            </div>
                          </div>

                        </div>

                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>


              <!-- Logs Location -->
              <div class="modal fade logsModel" tabindex="-1" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Logs Location</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-12">
                          <ul class="nav nav-pills m-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" id="pills-fam-log-tab" data-toggle="pill" href="#fam__log" role="tab"
                              aria-controls="pills-home" aria-selected="true">Family Visitor Log</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-prof-log-tab" data-toggle="pill" href="#prof__log" role="tab"
                              aria-controls="pills-profile" aria-selected="false">Professional Visitor Log</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-off-log-tab" data-toggle="pill" href="#off__log" role="tab"
                              aria-controls="pills-contact" aria-selected="false">OffSite Visitor Log</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-child-run-tab" data-toggle="pill" href="#child__run" role="tab"
                              aria-controls="pills-contact" aria-selected="false">Child's Running Log</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-child-off-tab" data-toggle="pill" href="#child__off" role="tab"
                              aria-controls="pills-contact" aria-selected="false">Child's Running Logs Sign Off</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-med-log-tab" data-toggle="pill" href="#med__log" role="tab"
                              aria-controls="pills-contact" aria-selected="false">Medicine Log</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-mon-log-tab" data-toggle="pill" href="#mon__log" role="tab"
                              aria-controls="pills-contact" aria-selected="false">Money Log</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-petty-log-tab" data-toggle="pill" href="#petty__log" role="tab"
                              aria-controls="pills-contact" aria-selected="false">Petty Cash Log</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-money-log-tab" data-toggle="pill" href="#money__log" role="tab"
                              aria-controls="pills-contact" aria-selected="false">HQ Money Log</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-child-log-tab" data-toggle="pill" href="#child__log" role="tab"
                              aria-controls="pills-contact" aria-selected="false">Child Valuable Log</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-location-log-tab" data-toggle="pill" href="#location__log" role="tab"
                              aria-controls="pills-contact" aria-selected="false">Location Valuable Log</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-mon-check-tab" data-toggle="pill" href="#mon__check" role="tab"
                              aria-controls="pills-contact" aria-selected="false">Money Checklist</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-value-check-tab" data-toggle="pill" href="#value__check" role="tab"
                              aria-controls="pills-contact" aria-selected="false">Valuable Checklist</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-med-check-tab" data-toggle="pill" href="#med__check" role="tab"
                              aria-controls="pills-contact" aria-selected="false">Medicine Checklist</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-med-fridge-freezer-tab" data-toggle="pill" href="#fridge__freezer"
                              role="tab" aria-controls="pills-contact" aria-selected="false">Fridge and Freezer Log</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-hot-temp-tab" data-toggle="pill" href="#hot__temp" role="tab"
                              aria-controls="pills-contact" aria-selected="false">Hot Food Temp</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-med-temp-tab" data-toggle="pill" href="#med__temp" role="tab"
                              aria-controls="pills-contact" aria-selected="false">Medication Cabinet Temp</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-appoint-task-tab" data-toggle="pill" href="#appoint__task" role="tab"
                              aria-controls="pills-contact" aria-selected="false">Appointments and Tasks Logs</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-loc-log-tab" data-toggle="pill" href="#loc__log" role="tab"
                              aria-controls="pills-contact" aria-selected="false">Location Logs</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-card-log-tab" data-toggle="pill" href="#card__log" role="tab"
                              aria-controls="pills-contact" aria-selected="false">Card Spending Log</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-fuel-log-tab" data-toggle="pill" href="#fuel__log" role="tab"
                              aria-controls="pills-contact" aria-selected="false">Fuel Card Spending Log</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-entitlement-log-tab" data-toggle="pill" href="#entitlement__log"
                              role="tab" aria-controls="pills-contact" aria-selected="false">Entitlement Log</a>
                            </li>
                          </ul>
                          <div class="tab-content" id="pills-tabContent">


                            <div class="tab-pane show active fade" id="fam__log" role="tabpanel"
                            aria-labelledby="pills-fam-log-tab">
                            <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
                              <p class="mb-0">Family Visitor Log</p>
                              <div>
                                <select class="bg-light">
                                  <option selected value="active">All</option>
                                  <option selected value="active">All</option>
                                </select>
                                <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
                                data-target="#put__id">
                                PDF
                              </button>
                            </div>
                          </div>
                          <div class=" d-flex justify-content-end align-items-center border mx-2 px-3 mb-2">

                            <input type="text" onblur="if(this.value==''){this.type='text'}" onfocus="(this.type='date')"
                            placeholder="Checkin" class="form-control form-control-sm
                            col-lg-2 bg-light" />

                            <button type="button" class="btn btn-primary ml-1 py-1 px-2" data-toggle="modal"
                            data-target="#put__id">
                            Search
                          </button>

                        </div>
                        <div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
                          <table class="table">
                            <th>
                              <tr>
                                <th scope="col">FAMILY</th>
                                <th scope="col">CHILD</th>
                                <th scope="col">PURPOSE</th>
                                <th scope="col">CHECKIN</th>
                                <th scope="col">CHECKOUT</th>
                                <th scope="col">STAYED FOR</th>
                                <th scope="col">CREATED BY</th>
                                <th scope="col">ACTIONS</th>
                              </tr>
                            </th>
                          </table>
                        </div>
                      </div>



                      <div class="tab-pane fade" id="prof__log" role="tabpanel" aria-labelledby="pills-prof-log-tab">
                        <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
                          <p class="mb-0">Professional Visitor Log</p>
                          <div>
                            <select class="bg-light">
                              <option selected value="active">All</option>
                              <option value="1">1</option>
                            </select>
                            <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
                            data-target="#put__id">
                            PDF
                          </button>
                        </div>
                      </div>
                      <div class=" d-flex justify-content-end align-items-center border mx-2 px-3 mb-2">

                        <input type="text" onblur="if(this.value==''){this.type='text'}" onfocus="(this.type='date')"
                        placeholder="Checkin" class="form-control form-control-sm
                        col-lg-2 bg-light" />

                        <button type="button" class="btn btn-primary ml-1 py-1 px-2" data-toggle="modal"
                        data-target="#put__id">
                        Search
                      </button>

                    </div>
                    <div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
                      <table class="table">
                        <th>
                          <tr>
                            <th scope="col">FAMILY</th>
                            <th scope="col">CHILD</th>
                            <th scope="col">PURPOSE</th>
                            <th scope="col">CHECKIN</th>
                            <th scope="col">CHECKOUT</th>
                            <th scope="col">STAYED FOR</th>
                            <th scope="col">CREATED BY</th>
                            <th scope="col">ACTIONS</th>
                          </tr>
                        </th>
                      </table>
                    </div>
                  </div>




                  <div class="tab-pane fade" id="off__log" role="tabpanel" aria-labelledby="pills-off-log-tab">
                    <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
                      <p class="mb-0">OffSite Visitor Log</p>
                      <div>
                        <select class="bg-light">
                          <option selected value="active">All</option>
                          <option value="1">1</option>
                        </select>
                        <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
                        data-target="#put__id">
                        PDF
                      </button>
                    </div>
                  </div>
                  <div class=" d-flex justify-content-end align-items-center border mx-2 px-3 mb-2">

                    <input type="text" onblur="if(this.value==''){this.type='text'}" onfocus="(this.type='date')"
                    placeholder="Checkin" class="form-control form-control-sm
                    col-lg-2 bg-light" />

                    <button type="button" class="btn btn-primary ml-1 py-1 px-2" data-toggle="modal"
                    data-target="#put__id">
                    Search
                  </button>

                </div>
                <div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
                  <table class="table">
                    <th>
                      <tr>
                        <th scope="col">FAMILY</th>
                        <th scope="col">CHILD</th>
                        <th scope="col">PURPOSE</th>
                        <th scope="col">CHECKIN</th>
                        <th scope="col">CHECKOUT</th>
                        <th scope="col">STAYED FOR</th>
                        <th scope="col">CREATED BY</th>
                        <th scope="col">ACTIONS</th>
                      </tr>
                    </th>
                  </table>
                </div>
              </div>


              <div class="tab-pane fade" id="child__run" role="tabpanel" aria-labelledby="pills-child-run-tab">
                <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
                  <p class="mb-0">Child's Running Log</p>
                  <div>
                    <select class="bg-light px-3">
                      <option selected value="active">All</option>
                      <option value="1">1</option>
                    </select>
                    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
                    data-target="#put__id">
                    Child's Running Logs Sign off
                  </button>
                  <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
                  data-target="#exampleModalScrollableLog">
                  Add Entry
                </button>
                <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
                data-target="#put__id">
                PDF
              </button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalScrollableLog" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalScrollableTitle">Use Icons for this</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                </div>
              </div>
            </div>
          </div>

        </div>
        <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">

          <input type="search" placeholder="Search"
          class="form-control form-control-sm bg-light col-lg-6" />

          <div>

            <input onblur="if(this.value==''){this.type='text'}" onfocus="(this.type='date')"
            class="form-control form-control-sm bg-light col-sm-6" type="text" placeholder="Created At" />

            <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
            data-target="#put__id">
            Search
          </button>
        </div>
      </div>
      <div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
        <table class="table">
          <th>
            <tr>
              <th scope="col">CHILD</th>
              <th scope="col">EVENT</th>
              <th scope="col">DATE/TIME OF EVENT</th>
              <th scope="col">CREATED BY</th>
              <th scope="col">ACTION</th>
            </tr>
          </th>
        </table>
      </div>
    </div>


    <div class="tab-pane fade" id="child__off" role="tabpanel" aria-labelledby="pills-child-off-tab">
      <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
        <p class="mb-0">Child's Running Logs Sign Off</p>
        <div>
          <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
          data-target="#exampleModalScrollableLog2">
          Add Entry
        </button>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModalScrollableLog2" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Child's Running Logs Sign Off
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="">
              <div class="form-group">
                <label class="font-weight-bold" for="">Select Child:</label>
                <input type="text" placeholder="No active child found" class="form-control" />
              </div>
              <div class="form-group">
                <label class="font-weight-bold" for="">Date:</label>
                <input type="date" class="form-control" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=" d-flex justify-content-end align-items-center border mx-2 px-3 mb-2">

    <input type="text" onblur="if(this.value==''){this.type='text'}" onfocus="(this.type='date')"
    placeholder="Checkin" class="form-control form-control-sm
    col-lg-2 bg-light" />

    <button type="button" class="btn btn-primary ml-1 py-1 px-2" data-toggle="modal"
    data-target="#put__id">
    Search
  </button>

</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">CHILD</th>
        <th scope="col">CREATED BY</th>
        <th scope="col">CREATED FOR</th>
        <th scope="col">CREATED AT</th>
        <th scope="col">ACTIONS</th>
      </tr>
    </th>
  </table>
</div>
</div>


<div class="tab-pane fade" id="med__log" role="tabpanel" aria-labelledby="pills-med-log-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Medicine Log</p>
    <div>


      <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
      data-target="#exampleModalScrollableLog3">
      Current Inventory
    </button>
    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="#put__id">
    PDF
  </button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalScrollableLog3" tabindex="-1" role="dialog"
aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalScrollableTitle">Medicine Inventory List</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
        <table class="table">
          <th>
            <tr>
              <th scope="col">CHILD</th>
              <th scope="col">MEDICINE</th>
              <th scope="col">CONTROLLED MEDICINE</th>
              <th scope="col">QUANTITY AVAILABLE</th>
              <th scope="col">IN DATE</th>
              <th scope="col">EXPIRE(D) ON</th>
              <th scope="col">BATCH NUMBER</th>
            </tr>
          </th>
        </table>
      </div>
    </div>
  </div>
</div>
</div>

</div>
<div class=" d-flex align-items-center border mx-2 px-3 py-2 mb-2">
  <select name="" class="bg-light form-control-sm mr-1 form-control col-sm-1" id="">
    <option selected value="">All Child</option>
    <option value="">All </option>
  </select>
  <select name="" class="bg-light form-control-sm mr-1 form-control col-sm-1" id="">
    <option selected value="">All</option>
  </select>
  <select name="" class="bg-light form-control-sm mr-1 form-control col-sm-2" id="">
    <option selected value="">All Medicines</option>
    <option value="">All</option>
  </select>
  <input onblur="if(this.value==''){this.type='text'}" onfocus="(this.type='date')"
  class="form-control-sm bg-light form-control col-sm-2 mr-1" type="text"
  placeholder="Date/Time of Administration" />


  <button type="button" class="btn btn-primary py-1 px-2 mr-1" data-toggle="modal"
  data-target="#put__id">
  Search
</button>
<button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
data-target="#put__id">
Reset
</button>

</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">STAFF MEMBER</th>
        <th scope="col">CHILD</th>
        <th scope="col">MEDICINE DETAIL</th>
        <th scope="col">CONTROLLED MEDICINE</th>
        <th scope="col">QUANTITY</th>
        <th scope="col">LEFT QUANTITY</th>
        <th scope="col">DATE/TIME OF ADMINISTRATION/MISSED</th>
        <th scope="col">COMMENTS SECTION</th>
      </tr>
    </th>
  </table>
</div>
</div>


<div class="tab-pane fade" id="mon__log" role="tabpanel" aria-labelledby="pills-mon-log-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Money Log</p>
    <div>

      <span class="mb-0 text-secondary px-2">Available Total Balance: 0 GBP</span>
      <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
      data-target="#put__id">
      Current Inventory
    </button>
    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="#put__id">
    PDF
  </button>
  <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
  data-target="#put__id">
  Export to CSV
</button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalScrollableLog" tabindex="-1" role="dialog"
aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalScrollableTitle">Use Icons for this</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">

    </div>
  </div>
</div>
</div>

</div>
<div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">

  <select class="form-control form-control-sm bg-light col-lg-6">
    <option selected value="">All</option>
  </select>

  <div>

    <input onblur="if(this.value==''){this.type='text'}" onfocus="(this.type='date')"
    class="form-control form-control-sm bg-light col-sm-6" type="text" placeholder="Created At" />

    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="#put__id">
    Search
  </button>
</div>
</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">CREATED BY</th>
        <th scope="col">CHILD</th>
        <th scope="col">AMOUNT (GBP)</th>
        <th scope="col">REMAINING AMOUNT (GBP)</th>
        <th scope="col">EXPENDITURE</th>
        <th scope="col">CREATED/UPDATED AT</th>
        <th scope="col">VIEW</th>
      </tr>
    </th>
  </table>
</div>
</div>


<div class="tab-pane fade" id="petty__log" role="tabpanel" aria-labelledby="pills-petty-log-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Petty Cash Log</p>
    <div>

      <span class="mb-0 text-secondary px-2">Available Total Balance: 0 GBP</span>
      <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
      data-target="#put__id">
      PDF
    </button>
    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="#put__id">
    Export to CSV
  </button>
  <select name="" class="bg-light form-control-sm form-control col-sm-2" id="">
    <option selected value="">Created At (DESC)</option>
    <option value="">All </option>
  </select>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalScrollableLog" tabindex="-1" role="dialog"
aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalScrollableTitle">Use Icons for this</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">

    </div>
  </div>
</div>
</div>

</div>
<div class=" d-flex justify-content-center align-items-center border mx-2 px-3 py-2 mb-2">
  <input type="search" placeholder="Search"
  class="form-control form-control-sm bg-light col-sm-4" />

</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">CREATED BY</th>
        <th scope="col">CHILD</th>
        <th scope="col">AMOUNT (GBP)</th>
        <th scope="col">REMAINING AMOUNT (GBP)</th>
        <th scope="col">EXPENDITURE</th>
        <th scope="col">CREATED/UPDATED AT</th>
        <th scope="col">VIEW</th>
      </tr>
    </th>
  </table>
</div>
</div>


<div class="tab-pane fade" id="money__log" role="tabpanel" aria-labelledby="pills-money-log-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">HQ Money Log</p>
    <div>
      <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
      data-target="#put__id">
      PDF
    </button>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModalScrollableLog2" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Child's Running Logs Sign Off
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
          <div class="form-group">
            <label class="font-weight-bold" for="">Select Child:</label>
            <input type="text" placeholder="No active child found" class="form-control" />
          </div>
          <div class="form-group">
            <label class="font-weight-bold" for="">Date:</label>
            <input type="date" class="form-control" />
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<div class=" d-flex justify-content-end align-items-center border mx-2 px-3 mb-2">

  <input type="text" onblur="if(this.value==''){this.type='text'}" onfocus="(this.type='date')"
  placeholder="Created At" class="form-control form-control-sm
  col-lg-2 bg-light" />

  <button type="button" class="btn btn-primary ml-1 py-1 px-2" data-toggle="modal"
  data-target="#put__id">
  Search
</button>

</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">CREATED BY</th>
        <th scope="col">AMOUNT (GBP)</th>
        <th scope="col">CREATED AT</th>
        <th scope="col">VIEW</th>
      </tr>
    </th>
  </table>
</div>
</div>


<div class="tab-pane fade" id="child__log" role="tabpanel" aria-labelledby="pills-child-log-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Child Valuable Log</p>
    <div>
      <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
      data-target="#put__id">
      Current Inventory
    </button>
    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="#put__id">
    PDF
  </button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalScrollableLog2" tabindex="-1" role="dialog"
aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalScrollableTitle">Child's Running Logs Sign Off
      </h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form action="">
        <div class="form-group">
          <label class="font-weight-bold" for="">Select Child:</label>
          <input type="text" placeholder="No active child found" class="form-control" />
        </div>
        <div class="form-group">
          <label class="font-weight-bold" for="">Date:</label>
          <input type="date" class="form-control" />
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>
<div class=" d-flex justify-content-end align-items-center border mx-2 px-3 mb-2">

  <input type="text" onblur="if(this.value==''){this.type='text'}" onfocus="(this.type='date')"
  placeholder="Created At" class="form-control form-control-sm
  col-lg-2 bg-light" />

  <button type="button" class="btn btn-primary ml-1 py-1 px-2" data-toggle="modal"
  data-target="#put__id">
  Search
</button>

</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">STAFF MEMBER</th>
        <th scope="col">LOCATION</th>
        <th scope="col">ITEM</th>
        <th scope="col">IN DATE</th>
        <th scope="col">VIEW</th>
      </tr>
    </th>
  </table>
</div>
</div>

<div class="tab-pane fade" id="location__log" role="tabpanel"
aria-labelledby="pills-location-log-tab">
<div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
  <p class="mb-0">Location Valuable Log</p>
  <div>
    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="#put__id">
    Current Inventory
  </button>
  <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
  data-target="#put__id">
  PDF
</button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalScrollableLog2" tabindex="-1" role="dialog"
aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalScrollableTitle">Child's Running Logs Sign Off
      </h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form action="">
        <div class="form-group">
          <label class="font-weight-bold" for="">Select Child:</label>
          <input type="text" placeholder="No active child found" class="form-control" />
        </div>
        <div class="form-group">
          <label class="font-weight-bold" for="">Date:</label>
          <input type="date" class="form-control" />
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>
<div class=" d-flex justify-content-end align-items-center border mx-2 px-3 mb-2">

  <input type="text" onblur="if(this.value==''){this.type='text'}" onfocus="(this.type='date')"
  placeholder="Created At" class="form-control form-control-sm
  col-lg-2 bg-light" />

  <button type="button" class="btn btn-primary ml-1 py-1 px-2" data-toggle="modal"
  data-target="#put__id">
  Search
</button>

</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">STAFF MEMBER</th>
        <th scope="col">LOCATION</th>
        <th scope="col">ITEM</th>
        <th scope="col">IN DATE</th>
        <th scope="col">VIEW</th>
      </tr>
    </th>
  </table>
</div>
</div>


<div class="tab-pane fade" id="mon__check" role="tabpanel" aria-labelledby="pills-mon-check-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Money Checklis Log</p>
    <div>

    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalScrollableLog2" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalScrollableTitle">Child's Running Logs Sign Off
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="">
            <div class="form-group">
              <label class="font-weight-bold" for="">Select Child:</label>
              <input type="text" placeholder="No active child found" class="form-control" />
            </div>
            <div class="form-group">
              <label class="font-weight-bold" for="">Date:</label>
              <input type="date" class="form-control" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class=" d-flex justify-content-end align-items-center border mx-2 px-3 mb-2">

  <input type="text" onblur="if(this.value==''){this.type='text'}" onfocus="(this.type='date')"
  placeholder="Created At" class="form-control form-control-sm
  col-lg-2 bg-light" />

  <button type="button" class="btn btn-primary ml-1 py-1 px-2" data-toggle="modal"
  data-target="#put__id">
  Search
</button>

</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">CREATED BY</th>
        <th scope="col">CREATED AT</th>
        <th scope="col">COMPLETED</th>
        <th scope="col">ACTIONS</th>
      </tr>
    </th>
  </table>
</div>
</div>



<div class="tab-pane fade" id="value__check" role="tabpanel" aria-labelledby="pills-value-check-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Valuable Checklis Log</p>
    <div>

    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalScrollableLog2" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalScrollableTitle">Child's Running Logs Sign Off
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="">
            <div class="form-group">
              <label class="font-weight-bold" for="">Select Child:</label>
              <input type="text" placeholder="No active child found" class="form-control" />
            </div>
            <div class="form-group">
              <label class="font-weight-bold" for="">Date:</label>
              <input type="date" class="form-control" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class=" d-flex justify-content-end align-items-center border mx-2 px-3 mb-2">

  <input type="text" onblur="if(this.value==''){this.type='text'}" onfocus="(this.type='date')"
  placeholder="Created At" class="form-control form-control-sm
  col-lg-2 bg-light" />

  <button type="button" class="btn btn-primary ml-1 py-1 px-2" data-toggle="modal"
  data-target="#put__id">
  Search
</button>

</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">CREATED BY</th>
        <th scope="col">CREATED AT</th>
        <th scope="col">COMPLETED</th>
        <th scope="col">ACTIONS</th>
      </tr>
    </th>
  </table>
</div>
</div>


<div class="tab-pane fade" id="med__check" role="tabpanel" aria-labelledby="pills-med-check-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Medicine Checklist Log</p>
    <div>

    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalScrollableLog2" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalScrollableTitle">Child's Running Logs Sign Off
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="">
            <div class="form-group">
              <label class="font-weight-bold" for="">Select Child:</label>
              <input type="text" placeholder="No active child found" class="form-control" />
            </div>
            <div class="form-group">
              <label class="font-weight-bold" for="">Date:</label>
              <input type="date" class="form-control" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class=" d-flex justify-content-end align-items-center border mx-2 px-3 mb-2">

  <input type="text" onblur="if(this.value==''){this.type='text'}" onfocus="(this.type='date')"
  placeholder="Created At" class="form-control form-control-sm
  col-lg-2 bg-light" />

  <button type="button" class="btn btn-primary ml-1 py-1 px-2" data-toggle="modal"
  data-target="#put__id">
  Search
</button>

</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">CREATED BY</th>
        <th scope="col">CREATED AT</th>
        <th scope="col">COMPLETED</th>
        <th scope="col">ACTIONS</th>
      </tr>
    </th>
  </table>
</div>
</div>


<div class="tab-pane fade" id="fridge__freezer" role="tabpanel"
aria-labelledby="pills-fridge-freezer-tab">
<div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
  <p class="mb-0">Fridge and Freezer Log</p>
  <div>
    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="#exampleModalScrollableLog4">
    Add Entry
  </button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalScrollableLog4" tabindex="-1" role="dialog"
aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalScrollableTitle">Fridge and Freezer Log
      </h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form action="">
        <div class="form-group">
          <label class="font-weight-bold" for="">Comment:</label>
          <textarea type="text" placeholder="Type Your Comment"
          class="form-control form-control-sm"></textarea>
        </div>
        <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
        data-target="#put__id">
        Submit
      </button>
    </form>
  </div>
</div>
</div>
</div>
</div>
<div class=" d-flex justify-content-end align-items-center border mx-2 px-3 mb-2">

  <input type="text" onblur="if(this.value==''){this.type='text'}" onfocus="(this.type='date')"
  placeholder="Created At" class="form-control form-control-sm
  col-lg-2 bg-light" />

  <button type="button" class="btn btn-primary ml-1 py-1 px-2" data-toggle="modal"
  data-target="#put__id">
  Search
</button>

</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">DATE/TIME</th>
        <th scope="col">CREATED BY</th>
        <th scope="col">INFORMATION</th> </tr>
      </th>
    </table>
  </div>
</div>


<div class="tab-pane fade" id="hot__temp" role="tabpanel" aria-labelledby="pills-hot-temp-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Hot Food Temp</p>
    <div>
      <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
      data-target="#exampleModalScrollableLog5">
      Add Entry
    </button>
    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="#put__id">
    PDF
  </button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalScrollableLog5" tabindex="-1" role="dialog"
aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalScrollableTitle">Hot Food Temp
      </h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form action="">
        <div class="form-group">
          <label class="font-weight-bold" for="">Date/Time:</label>
          <input type="date" class="form-control" />
        </div>
        <div class="form-group">
          <label class="font-weight-bold" for="">Information:</label>
          <textarea type="text" placeholder="Type Your Comment"
          class="form-control form-control-sm"></textarea>
        </div>
        <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
        data-target="#put__id">
        Submit
      </button>
    </form>
  </div>
</div>
</div>
</div>
</div>
<div class=" d-flex justify-content-end align-items-center border mx-2 px-3 mb-2">

  <input type="text" onblur="if(this.value==''){this.type='text'}" onfocus="(this.type='date')"
  placeholder="Created At" class="form-control form-control-sm
  col-lg-2 bg-light" />

  <button type="button" class="btn btn-primary ml-1 py-1 px-2" data-toggle="modal"
  data-target="#put__id">
  Search
</button>

</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">DATE/TIME</th>
        <th scope="col">CREATED BY</th>
        <th scope="col">INFORMATION</th>
      </tr>
    </th>
  </table>
</div>
</div>


<div class="tab-pane fade" id="med__temp" role="tabpanel" aria-labelledby="pills-med-temp-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Medication Cabinet Temp</p>
    <div>
      <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
      data-target="#exampleModalScrollableLog6">
      Add Entry
    </button>
    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="#put__id">
    PDF
  </button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalScrollableLog6" tabindex="-1" role="dialog"
aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalScrollableTitle">Medication Cabinet Temp</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form action="">
        <div class="form-group">
          <label class="font-weight-bold" for="">Date/Time:</label>
          <input type="date" class="form-control" />
        </div>
        <div class="form-group">
          <label class="font-weight-bold" for="">Information:</label>
          <textarea type="text" placeholder="Type Your Comment"
          class="form-control form-control-sm"></textarea>
        </div>
        <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
        data-target="#put__id">
        Submit
      </button>
    </form>
  </div>
</div>
</div>
</div>

</div>
<div class=" d-flex justify-content-center align-items-center border mx-2 px-3 py-2 mb-2">
  <input type="search" placeholder="Search"
  class="form-control form-control-sm bg-light col-sm-4" />
  <button type="button" class="btn btn-primary py-1 px-2 mx-2" data-toggle="modal"
  data-target="#put__id">
  Search
</button>


</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">DATE/TIME</th>
        <th scope="col">CREATED BY</th>
        <th scope="col">INFORMATION/COMMENTS</th>
        <th scope="col">ACTION</th>
      </tr>
    </th>
  </table>
</div>
</div>


<div class="tab-pane fade" id="appoint__task" role="tabpanel"
aria-labelledby="pills-appoint-task-tab">
<div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
  <p class="mb-0">Appointments and Tasks Logs</p>
  <div>
    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="#put__id">
    PDF
  </button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalScrollableLog4" tabindex="-1" role="dialog"
aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalScrollableTitle">Fridge and Freezer Log
      </h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form action="">
        <div class="form-group">
          <label class="font-weight-bold" for="">Comment:</label>
          <textarea type="text" placeholder="Type Your Comment"
          class="form-control form-control-sm"></textarea>
        </div>
        <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
        data-target="#put__id">
        Submit
      </button>
    </form>
  </div>
</div>
</div>
</div>
</div>
<div class=" d-flex justify-content-end align-items-center border mx-2 px-3 mb-2">

  <input type="text" onblur="if(this.value==''){this.type='text'}" onfocus="(this.type='date')"
  placeholder="Created At" class="form-control form-control-sm
  col-lg-2 bg-light" />

  <button type="button" class="btn btn-primary ml-1 py-1 px-2" data-toggle="modal"
  data-target="#put__id">
  Search
</button>

</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">BRIEF DESCRIPTION</th>
        <th scope="col">CREATED BY</th>
        <th scope="col">DETAILS</th>
        <th scope="col">CREATED AT</th>
        <th scope="col">STATUS</th>
        <th scope="col">ACTIONS</th>
      </tr>
    </th>
  </table>
</div>
</div>



<div class="tab-pane fade" id="loc__log" role="tabpanel" aria-labelledby="pills-loc-log-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Location Logs</p>
    <div>
      <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
      data-target="#exampleModalScrollableLog6">
      Add Entry
    </button>
    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="#put__id">
    PDF
  </button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalScrollableLog6" tabindex="-1" role="dialog"
aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalScrollableTitle">Fridge and Freezer Log
      </h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form action="">
        <div class="form-group">
          <label class="font-weight-bold" for="">Comment:</label>
          <textarea type="text" placeholder="Type Your Comment"
          class="form-control form-control-sm"></textarea>
        </div>
        <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
        data-target="#put__id">
        Submit
      </button>
    </form>
  </div>
</div>
</div>
</div>
</div>
<div class=" border mx-2 px-3 mb-2">

  <input type="text" onblur="if(this.value==''){this.type='text'}" onfocus="(this.type='date')"
  placeholder="From Date" class="form-control form-control-sm
  bg-light" />
  <input type="text" onblur="if(this.value==''){this.type='text'}" onfocus="(this.type='date')"
  placeholder="To (Preset Date, If left empty)" class="form-control form-control-sm
  bg-light" />
  <button type="button" class="btn btn-primary mt-2 mr-1 py-1 px-2" data-toggle="modal"
  data-target="#put__id">
  Reset
</button>

<button type="button" class="btn btn-primary  mt-2 py-1 px-2" data-toggle="modal"
data-target="#put__id">
Search
</button>

</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">CREATED BY</th>
        <th scope="col">CREATED AT</th>
        <th scope="col">COMMENTS</th>
        <th scope="col">DATE/TIME</th>
        <th scope="col">ACTION</th>
      </tr>
    </th>
  </table>
</div>
</div>


<div class="tab-pane fade" id="card__log" role="tabpanel" aria-labelledby="pills-card-log-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Card Spending Log</p>
    <div>

      <span class="mb-0 text-secondary px-2">Card Payment Made: 0 GBP</span>

      <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
      data-target="#put__id">
      PDF
    </button>

  </div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModalScrollableLog" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Use Icons for this</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      </div>
    </div>
  </div>
</div>

</div>
<div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">

  <select class="form-control form-control-sm bg-light col-lg-6">
    <option selected value="">All</option>
  </select>

  <div>

    <input onblur="if(this.value==''){this.type='text'}" onfocus="(this.type='date')"
    class="form-control form-control-sm bg-light col-sm-6" type="text" placeholder="Created At" />

    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="#put__id">
    Search
  </button>
</div>
</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">CREATED BY</th>
        <th scope="col">AMOUNT (GBP)</th>
        <th scope="col">EXPENDITURE</th>
        <th scope="col">CREATED AT</th>
        <th scope="col">ACTION</th>
      </tr>
    </th>
  </table>
</div>
</div>


<div class="tab-pane fade" id="fuel__log" role="tabpanel" aria-labelledby="pills-fuel-log-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Fuel Card Spending Log</p>
    <div>

      <span class="mb-0 text-secondary px-2">Fuel Card Payment Made: 0 GBP</span>

      <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
      data-target="#put__id">
      PDF
    </button>

  </div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModalScrollableLog" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Use Icons for this</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      </div>
    </div>
  </div>
</div>

</div>
<div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">

  <select class="form-control form-control-sm bg-light col-lg-6">
    <option selected value="">All</option>
  </select>

  <div>

    <input onblur="if(this.value==''){this.type='text'}" onfocus="(this.type='date')"
    class="form-control form-control-sm bg-light col-sm-6" type="text" placeholder="Created At" />

    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="#put__id">
    Search
  </button>
</div>
</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">CREATED BY</th>
        <th scope="col">AMOUNT (GBP)</th>
        <th scope="col">EXPENDITURE</th>
        <th scope="col">CREATED AT</th>
        <th scope="col">ACTION</th>
      </tr>
    </th>
  </table>
</div>
</div>

<div class="tab-pane fade" id="entitlement__log" role="tabpanel"
aria-labelledby="pills-entitlement-log-tab">
<div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
  <p class="mb-0">Entitlement Log</p>
  <div>
    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="#put__id">
    PDF
  </button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalScrollableLog" tabindex="-1" role="dialog"
aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalScrollableTitle">Use Icons for this</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
    </div>
  </div>
</div>
</div>

</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">CREATED BY</th>
        <th scope="col">STAFF</th>
        <th scope="col">START DATE</th>
        <th scope="col">END DATE</th>
        <th scope="col">TIME USED</th>
        <th scope="col">TIME ABSENT</th>
        <th scope="col">TYPE OF NON DEDUCTIBLE ABSENCE</th>
        <th scope="col">TYPE OF DEDUCTIBLE ABSENCE</th>
        <th scope="col">REQUESTED HOLIDAYS</th>
        <th scope="col">STATUS</th>
      </tr>
    </th>
  </table>
</div>
</div>

</div>


</div>

</div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>



<!-- Staff Aims -->
<div class="modal fade staffaims" tabindex="-1" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Staff Aims</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12">

            <ul class="nav nav-pills m-3" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-sta-rat-tab" data-toggle="pill" href="#sta__rat" role="tab"
                aria-controls="pills-home" aria-selected="true">Staff Aim Ratio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-sta-gra-tab" data-toggle="pill" href="#sta__gra" role="tab"
                aria-controls="pills-profile" aria-selected="false">Staff Aim Ratio Speedo Graph</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-sta-cha-tab" data-toggle="pill" href="#sta__cha" role="tab"
                aria-controls="pills-contact" aria-selected="false">Staff Aim Ratio Chart(Accumulative)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-qua-graph-tab" data-toggle="pill" href="#qua__graph" role="tab"
                aria-controls="pills-contact" aria-selected="false">Qualifications Graph</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane show active fade" id="sta__rat" role="tabpanel"
              aria-labelledby="pills-sta-rat-tab">
              <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
                <p class="mb-0">Staff Aim Ratio</p>
              </div>
              <div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
                <table class="table">
                  <th>
                    <tr>
                      <th scope="col">STAFF</th>
                      <th scope="col">EXPECTED AIMS</th>
                      <th scope="col">COMPLETED AIMS</th>
                      <th scope="col">PERCENTAGE</th>
                      <th scope="col">REMOVED AT</th>
                    </tr>
                  </th>
                </table>
              </div>
            </div>



            <div class="tab-pane fade" id="sta__gra" role="tabpanel" aria-labelledby="pills-sta-gra-tab">
              <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
                <p class="mb-0">Staff Aim Ratio Speedo Graph</p>
                <div>

                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="sta__cha" role="tabpanel" aria-labelledby="pills-sta-cha-tab">
              <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
                <p class="mb-0">Staff Aim Ratio Chart(Accumulative)</p>
                <div>

                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="qua__graph" role="tabpanel" aria-labelledby="pills-qua-graph-tab">




              <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
                <p class="mb-0">Qualifications Graph</p>
                <div>
                  <select name="" class="bg-light form-control-sm form-control col-sm-2" id="">
                    <option selected value="">All</option>
                    <option value="">All </option>
                  </select>
                  <select name="" class="bg-light form-control-sm form-control col-sm-2" id="">
                    <option selected value="">All</option>
                    <option value="">All </option>
                  </select>
                  <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
                  data-target="#put__id">
                  Filter
                </button>
                <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
                data-target="#put__id">
                View as PDF
              </button>
              <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
              data-target="#put__id">
              Genertate CSV
            </button>
          </div>
        </div>
        <div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
          <table class="table">
            <th>
              <tr>
                <th scope="col">NAME</th>
                <th scope="col">STAFF NAME</th>
                <th scope="col">FILE NAME</th>
                <th scope="col">NATURE</th>
                <th scope="col">TYPE</th>
                <th scope="col">ISSUED ON</th>
                <th scope="col">EXPIRE ON</th>
                <th scope="col">CREATED AT</th>
                <th scope="col">CREATED BY</th>
              </tr>
            </th>
          </table>
        </div>
      </div>


    </div>

  </div>

</div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>



<!-- Forms -->
<div class="modal fade forms" tabindex="-1" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Forms</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12">
            <ul class="nav nav-pills m-3" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-loc-char-tab" data-toggle="pill" href="#loc__char" role="tab"
                aria-controls="pills-home" aria-selected="true">Location Forms Chart</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-chi-char-tab" data-toggle="pill" href="#chi__char" role="tab"
                aria-controls="pills-profile" aria-selected="false">Child Forms Charts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-daily-log-tab" data-toggle="pill" href="#daily__log" role="tab"
                aria-controls="pills-contact" aria-selected="false">Daily Log</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">

              <div class="tab-pane show active fade" id="loc__char" role="tabpanel"
              aria-labelledby="pills-loc-char-tab">
              <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
                <p class="mb-0">Location Forms Chart</p>
                <div>
                  <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
                  data-target="#exampleModalScrollableForm">
                  Change Form
                </button>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="exampleModalScrollableForm" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Location Forms Chart</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="alert alert-primary my-3" role="alert">
                      <div class="iq-alert-text">
                        Please Select a form to submit
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="">*Form:</label>
                      <textarea class="form-control form-control-sm"></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="tab-pane fade" id="chi__char" role="tabpanel" aria-labelledby="pills-chi-char-tab">
          <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
            <p class="mb-0">Child Forms Charts</p>
            <div>
              <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
              data-target="#exampleModalScrollableForm2">
              Change Form
            </button>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="exampleModalScrollableForm2" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Child Forms Charts</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="alert alert-primary my-3" role="alert">
                  <div class="iq-alert-text">
                    Please Select a form to submit
                  </div>
                </div>
                <div class="form-group">
                  <label for="">*Form:</label>
                  <textarea class="form-control form-control-sm"></textarea>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="tab-pane fade" id="daily__log" role="tabpanel" aria-labelledby="pills-daily-log-tab">
      <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
        <p class="mb-0">Daily Log</p>
        <div>
          <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
          data-target="#exampleModalScrollableForm3">
          Change Form
        </button>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModalScrollableForm3" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Daily Log</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="alert alert-primary my-3" role="alert">
              <div class="iq-alert-text">
                Please Select a form to submit
              </div>
            </div>
            <div class="form-group">
              <label for="">*Form:</label>
              <textarea class="form-control form-control-sm"></textarea>
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
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>


<!-- People -->
<div class="modal fade people" tabindex="-1" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">People</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12">

            <ul class="nav nav-pills m-3" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-staff-mem-tab" data-toggle="pill" href="#staff__mem" role="tab"
                aria-controls="pills-home" aria-selected="true">Staff Members</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-staff-rota-tab" data-toggle="pill" href="#staff__rota" role="tab"
                aria-controls="pills-profile" aria-selected="false">Staff Rota Check-ins</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-staff-chi-tab" data-toggle="pill" href="#staff__chi" role="tab"
                aria-controls="pills-contact" aria-selected="false">Child</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">

              <div class="tab-pane show active fade" id="staff__mem" role="tabpanel"
              aria-labelledby="pills-staff-mem-tab">
              <div class="d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
                <p class="mb-0">Staff Members</p>
                <div class="d-flex">
                  <select class="form-control form-control-sm bg-light col-sm-2 mr-2">
                    <option selected value="">All</option>
                  </select>
                  <button type="button" class="btn btn-primary py-1 px-2 text-nowrap" data-toggle="modal"
                  data-target="#put__id">
                  Add Staff Members to this Location
                </button>
              </div>
            </div>
            <div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
              <table class="table">
                <th>
                  <tr>
                    <th scope="col">STAFF</th>
                    <th scope="col">ASSIGNED ON</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">ACTIONS</th>
                  </tr>
                </th>
              </table>
            </div>
          </div>

          <div class="tab-pane fade" id="staff__rota" role="tabpanel" aria-labelledby="pills-staff-rota-tab">
            <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
              <p class="mb-0">Staff Rota Check-ins</p>
              <div>
                <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
                data-target="#exampleModalScrollablePeople">
                Add Entry
              </button>
              <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
              data-target="#put__id">
              PDF
            </button>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="exampleModalScrollablePeople" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">View Check in Locations
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="">
                  <div class="form-group">
                    <label class="font-weight-bold" for="">*Staff:</label>
                    <textarea placeholder="Staff" class="form-control form-control-sm"></textarea>
                  </div>
                  <div class="form-group d-flex w-100">
                    <div class="w-100 mr-1">
                      <label class="font-weight-bold" for="">In Time*:</label>
                      <input type="text" placeholder="Search" class="form-control" />
                    </div>
                    <div class="w-100 ml-1">
                      <label class="font-weight-bold" for="">Out Time*:</label>
                      <input type="text" placeholder="Search" class="form-control" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold" for="">*Did You do a Sleeping Shift:</label>
                    <select class="form-control">
                      <option selected value="">No</option>
                      <option value="">Yes</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold" for="">*Comment:</label>
                    <textarea placeholder="Type Your Comment"
                    class="form-control form-control-sm"></textarea>
                  </div>
                  <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
                  data-target="#put__id">
                  Submit
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=" border mx-2 px-3 mb-2">

      <input type="text" onblur="if(this.value==''){this.type='text'}" onfocus="(this.type='date')"
      placeholder="From Date" class="form-control form-control-sm
      bg-light" />
      <input type="text" onblur="if(this.value==''){this.type='text'}" onfocus="(this.type='date')"
      placeholder="To (Preset Date, If left empty)" class="form-control form-control-sm
      bg-light" />
      <button type="button" class="btn btn-primary mt-2 mr-1 py-1 px-2" data-toggle="modal"
      data-target="#put__id">
      Reset
    </button>

    <button type="button" class="btn btn-primary  mt-2 py-1 px-2" data-toggle="modal"
    data-target="#put__id">
    Search
  </button>

</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">CREATED BY</th>
        <th scope="col">CREATED AT</th>
        <th scope="col">COMMENTS</th>
        <th scope="col">DATE/TIME</th>
        <th scope="col">ACTION</th>
      </tr>
    </th>
  </table>
</div>
</div>

<div class="tab-pane fade" id="staff__chi" role="tabpanel" aria-labelledby="pills-staff-chi-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Child</p>
  </div>
  <div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
    <table class="table">
      <th>
        <tr>
          <th scope="col">CHILD</th>
          <th scope="col">ASSIGNED DATE</th>
          <th scope="col">STATUS</th>
        </tr>
      </th>
    </table>
  </div>
</div>


</div>

</div>

</div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>


<!-- Property -->
<div class="modal fade property" tabindex="-1" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Property</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12">
            <ul class="nav nav-pills m-3" id="pills-tab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="pills-prop-paper-tab" data-toggle="pill" href="#prop__paper"
      role="tab" aria-controls="pills-home" aria-selected="true">Property Paperwork</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-schedule-fire-tab" data-toggle="pill" href="#schedule__fire"
      role="tab" aria-controls="pills-home" aria-selected="true">Schedule Fire Safety</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-fire-safety-tab" data-toggle="pill" href="#fire__safety" role="tab"
      aria-controls="pills-home" aria-selected="true">Fire Safety</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-floor-plan-tab" data-toggle="pill" href="#floor__plan" role="tab"
      aria-controls="pills-profile" aria-selected="false">Floor plan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-maintenance-tab" data-toggle="pill" href="#maintenance" role="tab"
      aria-controls="pills-contact" aria-selected="false">Maintenance</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-appoint-tasks-tab" data-toggle="pill" href="#appoint__tasks"
      role="tab" aria-controls="pills-contact" aria-selected="false">Appointments and Tasks</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-cost-chart-tab" data-toggle="pill" href="#cost__chart" role="tab"
      aria-controls="pills-contact" aria-selected="false">Cost Chart</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-emer-plan-tab" data-toggle="pill" href="#emer__plan" role="tab"
      aria-controls="pills-contact" aria-selected="false">Emergency Contingency Plan</a>
    </li>
  </ul>
  <div class="tab-content" id="pills-tabContent">

    <div class="tab-pane show active fade" id="prop__paper" role="tabpanel"
    aria-labelledby="pills-prop-paper-tab">
    <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
      <p class="mb-0">Property Paperwork</p>
      <div>
        <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
        data-target="#exampleModalScrollableProperty">
        Add Entry
      </button>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalScrollableProperty" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalScrollableTitle">Add to documents</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="exampleFormControlTextarea1" class="col-form-label-sm">
                *Name:
              </label>
              <input type="text" class="form-control form-control-sm bg-light"
              id="exampleFormControlTextarea1" />
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1" class="col-form-label-sm">
                *Choose File: (<span style="color: red;">This can not be edit later</span>)
              </label>
              <select class="form-control form-control-sm bg-light" id="exampleFormControlTextarea1"
              rows="2">
              <option disabled selected>Please Select</option>
              <option value="file">File</option>
              <option value="url">URL</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1" class="col-form-label-sm">
              *Type:
            </label>
            <select class="form-control form-control-sm bg-light" id="exampleFormControlTextarea1"
            rows="2">
            <option disabled selected>Select Type</option>
            <option value="file">Accomadation Request</option>
            <option value="file">Activit Consent</option>
            <option value="file">Activity Risk Assesment</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1" class="col-form-label-sm">
            *Issue Date:
          </label>
          <input type="date" class="form-control form-control-sm bg-light"
          id="exampleFormControlTextarea1" />
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1" class="col-form-label-sm">
            *Expiry Date:
          </label>
          <input type="date" class="form-control form-control-sm bg-light"
          id="exampleFormControlTextarea1" />
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
</div>

</div>
<div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">

  <select class="form-control form-control-sm bg-light col-lg-6">
    <option selected value="">All</option>
  </select>

  <div>

    <input onblur="if(this.value==''){this.type='text'}" onfocus="(this.type='date')"
    class="form-control form-control-sm bg-light col-sm-6" type="text" placeholder="Created At" />

    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="#put__id">
    Search
  </button>
</div>
</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">FILENAME</th>
        <th scope="col">FILE</th>
        <th scope="col">TYPE</th>
        <th scope="col">ISSUED AT</th>
        <th scope="col">EXPIRY ON</th>
        <th scope="col">CREATED AT</th>
        <th scope="col">CREATED BY</th>
        <th scope="col">ACTIONS</th>>
      </tr>
    </th>
  </table>
</div>
</div>

<div class="tab-pane fade" id="schedule__fire" role="tabpanel"
aria-labelledby="pills-schedule-fire-tab">
<div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
  <p class="mb-0">Schedule Fire Safety</p>

  <div>
    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="#exampleModalScrollableProperty2">
    Add Entry
  </button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalScrollableProperty2" tabindex="-1" role="dialog"
aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalScrollableTitle">Schedule Fire Safety
      </h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form action="">
        <div class="form-group">
          <label class="font-weight-bold" for="">Date & Time:</label>
          <input type="date" placeholder="Search" class="form-control" />
        </div>
        <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
        data-target="#put__id">
        Submit
      </button>
    </form>
  </div>
</div>
</div>
</div>
</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">SCHEDULED BY</th>
        <th scope="col">SCHEDULED AT</th>
        <th scope="col">CREATED AT</th>
        <th scope="col">ACTIONS</th>
      </tr>
    </th>
  </table>
</div>
</div>





<div class="tab-pane fade" id="fire__safety" role="tabpanel" aria-labelledby="pills-fire-safety-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Fire Safety</p>
    <div>
      <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
      data-target="#put__id">
      Generate PDF
    </button>
  </div>
</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">CREATED BY</th>
        <th scope="col">CREATED AT</th>
        <th scope="col">COMPLETED BY</th>
        <th scope="col">COMPLETED AT</th>
        <th scope="col">DURATION</th>
        <th scope="col">STATUS</th>
        <th scope="col">SUMMARY</th>
        <th scope="col">ACTIONS</th>
      </tr>
    </th>
  </table>
</div>
</div>


<div class="tab-pane fade" id="floor__plan" role="tabpanel" aria-labelledby="pills-floor-plan-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Floor plan</p>
    <div>
      <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
      data-target="#exampleModalScrollableProper2">
      Add Entry
    </button>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModalScrollableProper2" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Floor plan
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
          <label class="font-weight-bold" for="">Select Floor Plan:</label>
          <div class="form-group">
            <input type="file" />
          </div>
          <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
          data-target="#put__id">
          Upload
        </button>
      </form>
    </div>
  </div>
</div>
</div>
</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">FLOOR PLAN</th>
        <th scope="col">ACTIVE</th>
        <th scope="col">CREATED AT</th>
        <th scope="col">ACTION</th>
      </tr>
    </th>
  </table>
</div>
</div>


<div class="tab-pane fade" id="maintenance" role="tabpanel" aria-labelledby="pills-maintenance-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Maintenance</p>
    <div>
      <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
      data-target="#put__id">
      PDF
    </button>
    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="#exampleModalScrollableProperty3">
    Add Entry
  </button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalScrollableProperty3" tabindex="-1" role="dialog"
aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalScrollableTitle">Add to Maintenance Work</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form>
        <div class="form-group">
          <label for="exampleFormControlTextarea1" class="col-form-label-sm">
            *Level:
          </label>
          <select class="form-control form-control-sm bg-light" id="exampleFormControlTextarea1"
          rows="2">
          <option disabled selected>Please Select Level</option>
          <option value="file">Accomadation Request</option>
          <option value="file">Activit Consent</option>
          <option value="file">Activity Risk Assesment</option>>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1" class="col-form-label-sm">
          *Maintenance Category:
        </label>
        <select class="form-control form-control-sm bg-light" id="exampleFormControlTextarea1"
        rows="2">
        <option disabled selected>Select Maintenance Category</option>
        <option value="file">Accomadation Request</option>
        <option value="file">Activit Consent</option>
        <option value="file">Activity Risk Assesment</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1" class="col-form-label-sm">
        *Type:
      </label>
      <select class="form-control form-control-sm bg-light" id="exampleFormControlTextarea1"
      rows="2">
      <option disabled selected>Select Type</option>
      <option value="file">Accomadation Request</option>
      <option value="file">Activit Consent</option>
      <option value="file">Activity Risk Assesment</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1" class="col-form-label-sm">
      *Issue:
    </label>
    <input type="text" placeholder="Issue" class="form-control form-control-sm bg-light"
    id="exampleFormControlTextarea1" />
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1" class="col-form-label-sm">
      *Description:
    </label>
    <textarea placeholder="Description"
    class="form-control form-control-sm bg-light"></textarea>
  </div>
  <label>*Image:</label>
  <div class="form-group">
    <input type="file" />
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1" class="col-form-label-sm">
      *Professional (optional):
    </label>
    <select class="form-control form-control-sm bg-light" id="exampleFormControlTextarea1"
    rows="2">
    <option disabled selected>Please Select Professional</option>
    <option value="file">Accomadation Request</option>
    <option value="file">Activit Consent</option>
    <option value="file">Activity Risk Assesment</option>
  </select>
</div>
<div class="form-group">
  <label for="exampleFormControlTextarea1" class="col-form-label-sm">
    *Staff (optional):
  </label>
  <select class="form-control form-control-sm bg-light" id="exampleFormControlTextarea1"
  rows="2">
  <option disabled selected>Please Select Staff</option>
  <option value="file">Accomadation Request</option>
  <option value="file">Activit Consent</option>
  <option value="file">Activity Risk Assesment</option>
</select>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">LEVEL</th>
        <th scope="col">ISSUE</th>
        <th scope="col">CREATED AT</th>
        <th scope="col">CREATED BY</th>
        <th scope="col">DUE DATE</th>
        <th scope="col">STATUS</th>
        <th scope="col">ACTION</th>
      </tr>
    </th>
  </table>
</div>
</div>



<div class="tab-pane fade" id="appoint__tasks" role="tabpanel"
aria-labelledby="pills-appoint-tasks-tab">
<div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
  <p class="mb-0">Appointments and Tasks</p>
  <div>
    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="#exampleModalScrollableProperty5">
    Add Entry
  </button>
  <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
  data-target="#put__id">
  PDF
</button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalScrollableProperty5" tabindex="-1" role="dialog"
aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalScrollableTitle">Add to Appointments and Tasks
      </h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form>
        <div class="form-group">
          <label for="exampleFormControlTextarea1" class="col-form-label-sm">
            *Description:
          </label>
          <textarea placeholder="Description"
          class="form-control form-control-sm bg-light"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1" class="col-form-label-sm">
            *Category:
          </label>
          <select class="form-control form-control-sm bg-light" id="exampleFormControlTextarea1"
          rows="2">
          <option disabled selected>Select Category</option>
          <option value="file">Accomadation Request</option>
          <option value="file">Activit Consent</option>
          <option value="file">Activity Risk Assesment</option>>
        </select>
      </div>
      <label>*Repetition:</label>
      <div class="form-group ml-2">
        <input checked id="daily" type="radio" />
        <label class="mr-2" for="daily">Daily</label>
        <input id="weekly" type="radio" />
        <label class="mr-2" for="weekly">weekly</label>
        <input id="fortnightly" type="radio" />
        <label class="mr-2" for="fortnightly">Fortnightly</label>
        <input id="monthly" type="radio" />
        <label class="mr-2" for="monthly">Monthly</label>
        <input id="none" type="radio" />
        <label class="mr-2" for="none">None</label>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1" class="col-form-label-sm">
          *Time & Date:
        </label>
        <input type="date" class="form-control form-control-sm bg-light" />
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1" class="col-form-label-sm">
          *Duration:
        </label>
        <input type="number" placeholder="1" class="form-control form-control-sm bg-light" />
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1" class="col-form-label-sm">
          *Purpose of Visit:
        </label>
        <textarea placeholder="Purpose of Visit"
        class="form-control form-control-sm bg-light"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1" class="col-form-label-sm">
          *Select Staff:
        </label>
        <select class="form-control form-control-sm bg-light" id="exampleFormControlTextarea1"
        rows="2">
        <option disabled selected>Please Select Staff</option>
        <option value="file">Accomadation Request</option>
        <option value="file">Activit Consent</option>
        <option value="file">Activity Risk Assesment</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1" class="col-form-label-sm">
        *Comment:
      </label>
      <textarea placeholder="Type Your Comment"
      class="form-control form-control-sm bg-light"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>
</div>
</div>

</div>
<div class=" d-flex align-items-center border mx-2 px-3 py-2 mb-2">
  <input class="form-control-sm bg-light form-control col-sm-3 mr-1" type="search"
  placeholder="Search" />
  <select name="" class="bg-light form-control-sm mr-1 form-control col-sm-2" id="">
    <option selected value="">All Medicines</option>
    <option value="">All</option>
  </select>
  <button type="button" class="btn btn-primary py-1 px-2 mr-1" data-toggle="modal"
  data-target="#put__id">
  Search
</button>
</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">BREIF DESCRPTION</th>
        <th scope="col">CREATED BY</th>
        <th scope="col">DETAILS</th>
        <th scope="col">CREATED AT</th>
        <th scope="col">ACTION</th>
      </tr>
    </th>
  </table>
</div>
</div>



<div class="tab-pane fade" id="cost__chart" role="tabpanel" aria-labelledby="pills-cost-chart-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Cost Chart</p>
  </div>
</div>




<div class="tab-pane fade" id="emer__plan" role="tabpanel" aria-labelledby="pills-emer-plan-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Emergency Contingency Plan</p>
    <div>
      <select class="form-control form-control-sm bg-light col-sm-6">
        <option disabled selected>All</option>
        <option value="file">Accomadation Request</option>
      </select>
      <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
      data-target="#exampleModalScrollableProperty6">
      Add Entry
    </button>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModalScrollableProperty6" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Add to Emergency Contingency Plan
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="exampleFormControlTextarea1" class="col-form-label-sm">
              *Date:
            </label>
            <input type="date" class="form-control form-control-sm bg-light" />
          </div>
          <label>*Upload:</label>
          <div class="form-group">
            <input type="file" />
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1" class="col-form-label-sm">
              *Description:
            </label>
            <textarea placeholder="Description"
            class="form-control form-control-sm bg-light"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">BREIF DESCRPTION</th>
        <th scope="col">CREATED BY</th>
        <th scope="col">DETAILS</th>
        <th scope="col">CREATED AT</th>
        <th scope="col">ACTION</th>
      </tr>
    </th>
  </table>
</div>
</div>

</div>


          </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
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
