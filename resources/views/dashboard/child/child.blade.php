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
              <div class="profile-box">
                <div class="profile-card rounded">
                  <img src="assets/images/user/1.jpg" alt="profile-bg"
                  class="avatar-100 rounded d-block mx-auto img-fluid mb-3">
                  <h3 class="font-600 text-white text-center mb-0">John Doe</h3>
                  <p class="text-white text-center mb-5">edit profile</p>
                </div>
                <div class="pro-content rounded">

                  <div class="row">
                    <div class="col">
                      <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                        <a class="first nav-link" data-toggle="modal" data-target=".profile">Profile</a>
                        <a class="first nav-link" data-toggle="modal" data-target=".additionalsupport">Additional Support</a>
                        <a class="first nav-link" data-toggle="modal" data-target=".professionals">Professionals</a>
                        <a class="first nav-link" data-toggle="modal" data-target=".cost">Cost</a>
                        <a class="first nav-link" data-toggle="modal" data-target=".archivehistory">Archive History</a>
                        <a class="first nav-link" data-toggle="modal" data-target=".guestaccess">Guest/Inspector access</a>
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
                <div class="shadow-bottom shadow-showcase text-center">
                  <div class="card">
                    <a href="" class="text-right p-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                        </polygon>
                      </svg>
                    </a>
                    <div class="card-body text-center">
                      <div class="round-box">
                        <a data-toggle="modal" data-target=".childlife">
                          <img src="assets/images/icon/blogger.png" width="128" />
                          <!-- <p class="h5 mb-0"><a href="#child__life">Window Into A child's Life ™</a></p> -->
                          <div class="nav flex-column nav-link" id="v-pills-tab" role="tablist"
                          aria-orientation="vertical">
                          <p class="h6 text-primary">Window Into A Child's Life</p>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>  
            </div>

            <div class="col-sm-12 col-lg-3">
              <div class="shadow-bottom shadow-showcase text-center">
                <div class="card">
                  <a href="" class="text-right p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                      </polygon>
                    </svg>
                  </a>
                  <div class="card-body text-center">
                    <div class="round-box">
                      <a data-toggle="modal" data-target=".aboutme">
                        <img src="assets/images/icon/about.png" width="128" />
                        <!-- <p class="h5 mb-0">All About Me</p> -->
                        <div class="nav flex-column nav-link" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical"><p class="h6 text-primary"> All About Me
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-12 col-lg-3">
              <div class="shadow-bottom shadow-showcase text-center">
                <div class="card">
                  <a href="" class="text-right p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                      </polygon>
                    </svg>
                  </a>
                  <div class="card-body text-center">
                    <div class="round-box">
                      <a data-toggle="modal" data-target=".riskdevelopment">
                        <img src="assets/images/icon/repair.png" width="128" />
                        <div class="nav flex-column nav-link" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical"><p class="h6 text-primary">Aims & Outcomes</p> 
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-12 col-lg-3">
            <div class="shadow-bottom shadow-showcase text-center">
              <div class="card">
                <a href="" class="text-right p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                    </polygon>
                  </svg>
                </a>
                <div class="card-body text-center">
                  <a data-toggle="modal" data-target=".documents">
                    <div class="round-box">
                      <img src="assets/images/icon/folders.png" width="128" />
                      <div class="nav flex-column nav-link" id="v-pills-tab" role="tablist"
                      aria-orientation="vertical"><p class="h6 text-primary">Documents</p> 
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>  
        </div>

        <div class="col-sm-12 col-lg-3">
          <div class="shadow-bottom shadow-showcase text-center">
            <div class="card">
              <a href="" class="text-right p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                  <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                  </polygon>
                </svg>
              </a>
              <div class="card-body text-center">
                <div class="round-box">
                  <a data-toggle="modal" data-target=".logsModel">
                    <img src="assets/images/icon/log-files.png" width="128" />
                    <div class="nav flex-column nav-link" id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    <p class="h6 text-primary">Logs</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- dsddsds -->

      <div class="col col-lg-8">
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
                      <div class="card-header d-flex justify-content-between pb-0 tab-pane">
                        <div class="header-title">
                          <h4 class="card-title mb-0">Profile</h4>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Legal status :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">123</div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Full Name :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">John Doe</div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Address Prior to Placement :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Home Telephone Number :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Mobile Telephone Number :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Address :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Gender :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Religion :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Legal status :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Language/Local Accent :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Form of communication :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Racial Origin / Ethnicity :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>DOB :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>National Insurance :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Parental responsibility :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Next of Kin :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Allergy :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>School :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Address of School :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Telephone number of school :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Eye Color :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Hair Color :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Height :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6> :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Weight :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Build :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Distinguishing Features :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Complexion :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Special Dietary Requirements :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Date of last LAC review :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Date of next LAC review :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>In education? :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Placing Authority :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Previous names :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>GP Details :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Key Worker :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 p-1">
                              <h5 class="mb-2 mt-4">child's Employer</h5>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>child's Employer :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Contact Name :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Address :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Tel No :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Admission Date :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Discharge Date :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 p-1">
                              <h6>Discharge Address :</h6>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 p-1"> - </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 p-1">
                              <h6>Have you sent the notification to the local authority to inform of the child’s discharge? :
                              </h6>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 p-1"> - </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 p-1">
                              <h6>Comments :</h6>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Medical Alert :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                              <h6>Local Authority :</h6>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>

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



          <!-- Additional Support Details -->
          <div class="modal fade additionalsupport" tabindex="-1" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Additional Support</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-12">

                      <div class="card-header d-flex justify-content-between pb-0">
                        <div class="header-title">
                          <h4 class="card-title mb-0">Additional Support -</h4>
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

          <!-- Professionals -->
          <div class="modal fade professionals" tabindex="-1" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Professionals</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-12">

                      <div class="card-header d-flex justify-content-between pb-0">
                        <div class="header-title">
                          <h4 class="card-title mb-0">Professionals -</h4>
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


          <!-- Cost -->
          <div class="modal fade cost" tabindex="-1" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Cost</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-12">
                     <div class="card-header d-flex justify-content-between pb-0">
                      <div class="header-title">
                        <h4 class="card-title mb-0">Cost -</h4>
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


        <!-- Archive History -->
        <div class="modal fade archivehistory" tabindex="-1" aria-hidden="true" style="display: none;">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Archive History</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-12">
                    <div class="card-header d-flex justify-content-between pb-0">
                      <div class="header-title">
                        <h4 class="card-title mb-0">Archive History</h4>
                        <a href="">View History</a>
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


        <!-- Guest/Inspector access -->
        <div class="modal fade guestaccess" tabindex="-1" aria-hidden="true" style="display: none;">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Guest/Inspector access</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-12">
                    <div class="card-header d-flex justify-content-between pb-0">
                      <div class="header-title">
                        <h4 class="card-title mb-0">Guest/Inspector access -</h4>
                        <a href="">Edit or Insert</a>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="container">
                        <div class="row">
                          <div class="alert alert-danger" role="alert">
                            No Staff assigned yet
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


        <!-- Childs Life -->
        <div class="modal fade childlife" tabindex="-1" aria-hidden="true" style="display: none;">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Window Into A Child's Life</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-12">
                    <ul class="nav nav-pills m-3" id="pills-tab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#triggers" role="tab"
                        aria-controls="pills-home" aria-selected="true">Triggers</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " id="pills-home-tab" data-toggle="pill" href="#med__req" role="tab"
                        aria-controls="pills-home" aria-selected="true">Medicine</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#edu" role="tab"
                        aria-controls="pills-contact" aria-selected="false">Independent Tasks</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#safe" role="tab"
                        aria-controls="pills-contact" aria-selected="false">Safeguarding Information & Restrictions </a>
                      </li>                          

                      <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#risk" role="tab"
                        aria-controls="pills-contact" aria-selected="false">Risk Chart</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#recordofappointments" role="tab"
                        aria-controls="pills-contact" aria-selected="false">Record of Appointments </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#family" role="tab"
                        aria-controls="pills-contact" aria-selected="false">Family and Friends</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#edu" role="tab"
                        aria-controls="pills-contact" aria-selected="false">Education Attendance </a>
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane active show fade " id="triggers" role="tabpanel"
                      aria-labelledby="pills-home-tab">
                      <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
                        <p class="mb-0">Triggers</p>
                        <div>
                          <select>
                            <option value="active">Active</option>
                          </select>
                          <select>
                            <option value="all">All</option>
                          </select>
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
                          data-target="#exampleModalScrollable">
                          Add Entry
                        </button>

                      </div>
                    </div>
                  </div>
                

                    
                      <div class="tab-pane  fade " id="med__req" role="tabpanel"
                      aria-labelledby="pills-home-tab">
                      <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
                        <p class="mb-0">Medicine Required</p>
                        <div>
                          <select>
                            <option value="active">Active</option>
                          </select>
                          <select>
                            <option value="all">All</option>
                          </select>
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
                          data-target="#exampleModalScrollable">
                          Add Entry
                        </button>

                      </div>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">

                            <form>
                              <div class="form-group">
                                <label for="medicine__name" class="col-form-label-sm">* Medicine Name:</label>
                                <input type="email" class="form-control form-control-sm" id="medicine__name"
                                placeholder="Medicine Name">
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlTextarea1" class="col-form-label-sm">* Description of
                                Medication and reason for Administration:</label>
                                <textarea class="form-control form-control-sm bg-light"
                                id="exampleFormControlTextarea1" rows="2"></textarea>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlFile1" class="col-form-label-sm">Medicine Guidence
                                Leaflet:</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlFile1" class="col-form-label-sm">Medicine Kept with
                                child:</label>
                                <select class="form-control form-control-sm">
                                  <option>No</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlFile1" class="col-form-label-sm">Is this Medicine
                                Prescribed:</label>
                                <select class="form-control form-control-sm">
                                  <option>Select</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlTextarea1" class="col-form-label-sm">Administration
                                Route:</label>
                                <textarea class="form-control form-control-sm bg-light"
                                id="exampleFormControlTextarea1" rows="2"></textarea>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlFile1" class="col-form-label-sm">Controlled medicines
                                  (<span class="text-primary">"This can be edited later"</span>)</label>
                                  <select class="form-control form-control-sm">
                                    <option>No</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="exampleFormControlFile1" class="col-form-label-sm">* Dose Catagory</label>
                                  <select class="form-control form-control-sm">
                                    <option>Select Catagory</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="exampleFormControlFile1" class="col-form-label-sm">* Dose Frequent</label>
                                  <select class="form-control form-control-sm">
                                    <option>Select Dose Frequence:</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="medicine__name" class="col-form-label-sm">* Frequency per Time
                                  frame:</label>
                                  <input type="text" class="form-control form-control-sm" id="medicine__name"
                                  placeholder="No of times">
                                </div>
                                <div class="form-group">
                                  <label for="exampleFormControlFile1" class="col-form-label-sm">* Dose
                                  Application</label>
                                  <select class="form-control form-control-sm">
                                    <option>Select dose Application</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="exampleFormControlFile1" class="col-form-label-sm">* Measurment
                                  Type:</label>
                                  <select class="form-control form-control-sm">
                                    <option>Select Measurment type</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="exampleFormControlFile1" class="col-form-label-sm">* Time Frame:</label>
                                  <select class="form-control form-control-sm">
                                    <option>Select</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="medicine__name" class="col-form-label-sm">* Medicine Start Date:</label>
                                  <input type="date" class="form-control form-control-sm" id="medicine__name"
                                  placeholder="No of times">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </form>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="container">
                      <div class="row">
                        <div class="col-xl-3">
                          <div class="card income-card card-primary">
                            <div class="card-body text-center">
                              <div class="round-box">
                                <img src="assets/images/icon/medicine-01.png" width="100">
                              </div>
                              <p>Medicine</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-3">
                          <div class="card income-card card-primary">
                            <div class="card-body text-center">
                              <div class="round-box">
                                <img src="assets/images/icon/medicine-in-stock-01.png" width="100">
                              </div>
                              <p>Medicine In Stock</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-3">
                          <div class="card income-card card-primary">
                            <div class="card-body text-center">
                              <div class="round-box">
                                <img src="assets/images/icon/medicine-to-be-returned-01.png" width="100">
                              </div>
                              <p>Medicine To Be Returned</p>
                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>


                  <div class="tab-pane fade" id="cur__med" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
                      <p class="mb-0">Current Medicine</p>
                      <div>
                        <select>
                          <option value="active">Active</option>
                        </select>
                        <select>
                          <option value="all">All</option>
                        </select>
                      </div>
                    </div>
                  </div>


                  <div class="tab-pane fade" id="exp__med" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
                      <p class="mb-0">Expired Medicine</p>
                      <div>
                        <select>
                          <option value="active">Active</option>
                        </select>
                        <select>
                          <option value="all">All</option>
                        </select>
                      </div>
                    </div>
                  </div>


                  <div class="tab-pane fade" id="edu" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
                      <p class="mb-0">Independent Tasks</p>
                      <div>
                        <select>
                          <option value="active">Active</option>
                        </select>
                        <select>
                          <option value="all">All</option>
                        </select>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
                        data-target="#exampleModalScrollable1">
                        Add Entry
                      </button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable1" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form>

                            <div class="form-group">
                              <label for="exampleFormControlTextarea1" class="col-form-label-sm">Information:
                              </label>
                              <textarea class="form-control form-control-sm bg-light"
                              id="exampleFormControlTextarea1" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlFile1" class="col-form-label-sm">Documents</label>
                              <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

              <div class="tab-pane fade" id="safe" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
                      <p class="mb-0">Safeguarding Information & Restrictions</p>
                      <div>
                        <select>
                          <option value="active">Active</option>
                        </select>
                        <select>
                          <option value="all">All</option>
                        </select>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
                        data-target="#exampleModalScrollable1">
                        Add Entry
                      </button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable1" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form>

                            <div class="form-group">
                              <label for="exampleFormControlTextarea1" class="col-form-label-sm">Information:
                              </label>
                              <textarea class="form-control form-control-sm bg-light"
                              id="exampleFormControlTextarea1" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlFile1" class="col-form-label-sm">Documents</label>
                              <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>


              <div class="tab-pane fade" id="risk" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2">
                  <p class="mb-0">Risk</p>
                </div>
                <div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
                  Cool! No risk found to draw the Risk Charts
                </div>
              </div>


              <div class="tab-pane fade" id="family" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2">
                  <p class="mb-0">Family and Friends</p>
                  <div>
                    <select>
                      <option value="all">All</option>
                    </select>
                  </div>


                </div>
                <div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
                  <table class="table">
                    <th>
                      <tr>
                        <th scope="col">NAME</th>
                        <th scope="col">RELATIONSHIP</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">CREATED BY</th>
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



<!-- All About ME -->
<div class="modal fade aboutme" tabindex="-1" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">All About Me</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12">
            <ul class="nav nav-pills m-3" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-looked-after-tab" data-toggle="pill" href="#looked__after"
                role="tab" aria-controls="looked__after" aria-selected="true">How do i want to be looked after</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-make-happy-tab" data-toggle="pill" href="#make__happy" role="tab"
                aria-controls="make__happy" aria-selected="false">What Makes Me Happy 😊</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-make-sad-tab" data-toggle="pill" href="#make__sad" role="tab"
                aria-controls="make__sad" aria-selected="false">What Makes Me Unhappy  😩</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-make-sad-tab" data-toggle="pill" href="#views__wishe" role="tab"
                aria-controls="make__sad" aria-selected="false">My Views & Wishes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-relationship-tab" data-toggle="pill" href="#relationship" role="tab"
                aria-controls="relationship" aria-selected="false">My Relationships</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-my-risk-tab" data-toggle="pill" href="#my__risk" role="tab"
                aria-controls="my__risk" aria-selected="false">Do I Know My Risks</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-my-risk-tab" data-toggle="pill" href="#my__risk" role="tab"
                aria-controls="my__risk" aria-selected="false">My Routine</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-my-risk-tab" data-toggle="pill" href="#my__risk" role="tab"
                aria-controls="my__risk" aria-selected="false">My Achievements </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-my-risk-tab" data-toggle="pill" href="#my__risk" role="tab"
                aria-controls="my__risk" aria-selected="false">Qualification/Certifcates </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="pills-reward-log-tab" data-toggle="pill" href="#rew__log" role="tab"
                aria-controls="rew__log" aria-selected="false">Reward Log 💥</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-reward-log-tab" data-toggle="pill" href="#rew__log" role="tab"
                aria-controls="rew__log" aria-selected="false">Gift log </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="pills-photo-gallery-tab" data-toggle="pill" href="#pho__gal" role="tab"
                aria-controls="pho__gal" aria-selected="false">Photo Gallery</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane active show fade " id="looked__after" role="tabpanel"
              aria-labelledby="pills-looked-after-tab">
              <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
                <p class="mb-0">How do i want to be looked after</p>
                <div>
                  <select>
                    <option value="all">All</option>
                  </select>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
                  data-target="#exampleModalScrollableAbout">
                  Add Entry
                </button>
                <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
                data-target="#put_id">
                Generate PDF
              </button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalScrollableAbout" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalScrollableTitle">How Do I Want To Be Looked After
                  </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>

                    <div class="form-group">
                      <label for="exampleFormControlTextarea1" class="col-form-label-sm">Information:
                      </label>
                      <textarea class="form-control form-control-sm bg-light"
                      id="exampleFormControlTextarea1" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1" class="col-form-label-sm">Action:
                      </label>
                      <textarea class="form-control form-control-sm bg-light"
                      id="exampleFormControlTextarea1" rows="2"></textarea>
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
                <th scope="col">INFORMATION</th>
                <th scope="col">CREATED BY</th>
                <th scope="col">CREATED AT</th>
                <th scope="col">ACTION</th>
              </tr>
            </th>
          </table>
        </div>
      </div>


      <div class="tab-pane fade" id="make__happy" role="tabpanel" aria-labelledby="pills-make-happy-tab">
        <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
          <p class="mb-0">What Makes Me 😊</p>
          <div>
            <select>
              <option value="all">All</option>
            </select>
            <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
            data-target="#exampleModalScrollableAbout2">
            Add Entry
          </button>
          <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
          data-target="#put_id">
          Generate PDF
        </button>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="exampleModalScrollableAbout2" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Add To What Makes Me Happy</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>

              <div class="form-group">
                <label for="exampleFormControlTextarea1" class="col-form-label-sm">Information:
                </label>
                <textarea class="form-control form-control-sm bg-light"
                id="exampleFormControlTextarea1" rows="2"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1" class="col-form-label-sm">Action:
                </label>
                <textarea class="form-control form-control-sm bg-light"
                id="exampleFormControlTextarea1" rows="2"></textarea>
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
          <th scope="col">INFORMATION</th>
          <th scope="col">CREATED BY</th>
          <th scope="col">CREATED AT</th>
          <th scope="col">ACTION</th>
        </tr>
      </th>
    </table>
  </div>
</div>


<div class="tab-pane fade" id="make__sad" role="tabpanel" aria-labelledby="pills-make-sad-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">What Makes Me 😩</p>
    <div>
      <select>
        <option value="all">All</option>
      </select>
      <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
      data-target="#exampleModalScrollableAbout3">
      Add Entry
    </button>
    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="#put_id">
    Generate PDF
  </button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalScrollableAbout3" tabindex="-1" role="dialog"
aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalScrollableTitle">Add To What Makes Me Sad</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form>

        <div class="form-group">
          <label for="exampleFormControlTextarea1" class="col-form-label-sm">Information:
          </label>
          <textarea class="form-control form-control-sm bg-light"
          id="exampleFormControlTextarea1" rows="2"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1" class="col-form-label-sm">Action:
          </label>
          <textarea class="form-control form-control-sm bg-light"
          id="exampleFormControlTextarea1" rows="2"></textarea>
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
        <th scope="col">INFORMATION</th>
        <th scope="col">CREATED BY</th>
        <th scope="col">CREATED AT</th>
        <th scope="col">ACTION</th>
      </tr>
    </th>
  </table>
</div>
</div>


<div class="tab-pane fade" id="relationship" role="tabpanel" aria-labelledby="pills-relationship-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">My Relationships</p>
    <div>
      <select>
        <option value="all">All</option>
      </select>

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
      data-target="#exampleModalScrollableAbout4">
      Add Entry
    </button>
    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="put_id">
    Generate PDF
  </button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalScrollableAbout4" tabindex="-1" role="dialog"
aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalScrollableTitle">Add To My Relationship</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form>
        <div class="form-group">
          <label for="exampleFormControlTextarea1" class="col-form-label-sm">Information:
          </label>
          <textarea class="form-control form-control-sm bg-light"
          id="exampleFormControlTextarea1" rows="2"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1" class="col-form-label-sm">Action:
          </label>
          <textarea class="form-control form-control-sm bg-light"
          id="exampleFormControlTextarea1" rows="2"></textarea>
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
        <th scope="col">INFORMATION</th>
        <th scope="col">CREATED BY</th>
        <th scope="col">CREATED AT</th>
        <th scope="col">ACTION</th>
      </tr>
    </th>
  </table>
</div>
</div>


<div class="tab-pane fade" id="my__risk" role="tabpanel" aria-labelledby="pills-my-risk-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2">
    <p class="mb-0">Do I know my risk</p>
    <div>
      <select>
        <option value="all">All</option>
      </select>
      <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
      data-target="#exampleModalScrollableAbout5">
      Add Entry
    </button>
    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="#put_id">
    Generate PDF
  </button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalScrollableAbout5" tabindex="-1" role="dialog"
aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalScrollableTitle">Add to do My Own Risks</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form>
        <div class="form-group">
          <label for="exampleFormControlTextarea1" class="col-form-label-sm">Information:
          </label>
          <textarea class="form-control form-control-sm bg-light"
          id="exampleFormControlTextarea1" rows="2"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1" class="col-form-label-sm">Action:
          </label>
          <textarea class="form-control form-control-sm bg-light"
          id="exampleFormControlTextarea1" rows="2"></textarea>
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
        <th scope="col">INFORMATION</th>
        <th scope="col">CREATED BY</th>
        <th scope="col">CREATED AT</th>
        <th scope="col">ACTION</th>
      </tr>
    </th>
  </table>
</div>
</div>


<div class="tab-pane fade" id="rew__log" role="tabpanel" aria-labelledby="pills-reward-log-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2">
    <p class="mb-0">Reward Log</p>
    <div>
      <select>
        <option value="all">All</option>
      </select>
      <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
      data-target="#exampleModalScrollableAbout6">
      Add Entry
    </button>
    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="#put_id">
    Generate PDF
  </button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalScrollableAbout6" tabindex="-1" role="dialog"
aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalScrollableTitle">My Rewards</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form>
        <div class="form-group">
          <label for="exampleFormControlTextarea1" class="col-form-label-sm">Information:
          </label>
          <textarea class="form-control form-control-sm bg-light"
          id="exampleFormControlTextarea1" rows="2"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1" class="col-form-label-sm">Action:
          </label>
          <textarea class="form-control form-control-sm bg-light"
          id="exampleFormControlTextarea1" rows="2"></textarea>
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
        <th scope="col">INFORMATION</th>
        <th scope="col">CREATED BY</th>
        <th scope="col">CREATED AT</th>
        <th scope="col">ACTION</th>
      </tr>
    </th>
  </table>
</div>
</div>


<div class="tab-pane fade" id="height" role="tabpanel" aria-labelledby="pills-height-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2">
    <p class="mb-0">Height</p>
    <div>
      <select>
        <option value="all">All</option>
      </select>
      <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
      data-target="#exampleModalScrollableAbout7">
      Add Entry
    </button>
    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="#put_id">
    Generate PDF
  </button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalScrollableAbout7" tabindex="-1" role="dialog"
aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalScrollableTitle">Add Height</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form>
        <div class="form-group">
          <label for="exampleFormControlTextarea1" class="col-form-label-sm">Height (in Meters):
          </label>
          <input type="number" placeholder="Meters"
          class="form-control form-control-sm bg-light" id="exampleFormControlTextarea1"
          rows="2" />
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1" class="col-form-label-sm">Measured At:
          </label>
          <input type="date" class="form-control form-control-sm bg-light"
          id="exampleFormControlTextarea1" rows="2" />
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
        <th scope="col">CREATED BY</th>
        <th scope="col">HEIGHT</th>
        <th scope="col">MEASURED AT</th>
        <th scope="col">ACTION</th>
      </tr>
    </th>
  </table>
</div>
</div>


<div class="tab-pane fade" id="weight" role="tabpanel" aria-labelledby="pills-weight-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2">
    <p class="mb-0">Weight</p>
    <div>
      <select>
        <option value="all">All</option>
      </select>
      <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
      data-target="#exampleModalScrollableAbout8">
      Add Entry
    </button>
    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="#put_id">
    Generate PDF
  </button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalScrollableAbout8" tabindex="-1" role="dialog"
aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalScrollableTitle">Add Weight</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form>
        <div class="form-group">
          <label for="exampleFormControlTextarea1" class="col-form-label-sm">Weight (in Kg):
          </label>
          <input type="number" placeholder="KG" class="form-control form-control-sm bg-light"
          id="exampleFormControlTextarea1" rows="2" />
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1" class="col-form-label-sm">Measured At:
          </label>
          <input type="date" class="form-control form-control-sm bg-light"
          id="exampleFormControlTextarea1" rows="2" />
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
</div>
</div>
<div class="border text-center py-1 text-success mx-2 mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">CREATED BY</th>
        <th scope="col">WEIGHT</th>
        <th scope="col">MEASURED AT</th>
        <th scope="col">ACTION</th>
      </tr>
    </th>
  </table>
</div>
</div>


<div class="tab-pane fade" id="pho__gal" role="tabpanel" aria-labelledby="pills-photo-gallery-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2">
    <p class="mb-0">Photo Gallery</p>
    <div>
      <select>
        <option value="all">All</option>
      </select>
      <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
      data-target="#exampleModalScrollableAbout9">
      Add Entry
    </button>
    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="#put_id">
    PDF
  </button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalScrollableAbout9" tabindex="-1" role="dialog"
aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalScrollableTitle">Photo Gallery</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form>
        <div class="form-group">
          <label for="exampleFormControlFile1" class="col-form-label-sm">Upload a Photo</label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1" class="col-form-label-sm">Description:
          </label>
          <textarea class="form-control form-control-sm bg-light"
          id="exampleFormControlTextarea1" rows="2"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
</div>
</div>
<div class="border text-center py-1 text-success mx-2 mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">PHOTO</th>
        <th scope="col">DESCRIPTION</th>
        <th scope="col">CREATED BY</th>
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

<!-- all about me end -->



<!-- Risk & Development -->

<div class="modal fade riskdevelopment" tabindex="-1" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Aims & Outcomes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12">
            <ul class="nav nav-pills m-3" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-aims-progress-tab" data-toggle="pill" href="#aims__progress"
                role="tab" aria-controls="aims__progress" aria-selected="true">Aims & Outcome Planner</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-primary-aims-tab" data-toggle="pill" href="#primary__aims" role="tab"
                aria-controls="primary__aims" aria-selected="false">Outcome Tracker</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-aims-completed-tab" data-toggle="pill" href="#aims__completed"
                role="tab" aria-controls="aims__completed" aria-selected="false">Record of Session</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-child-performance-tab" data-toggle="pill" href="#child__performance"
                role="tab" aria-controls="child__performance" aria-selected="false">Outcomes Achieved</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane active show fade " id="aims__progress" role="tabpanel"
              aria-labelledby="pills-aims-progress-tab">
              <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
                <p class="mb-0">Aims Progress</p>
                <div>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
                  data-target="#exampleModalScrollableRisk">
                  Add Progress
                </button>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="exampleModalScrollableRisk" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Edit/Insert Aims Progress</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="col-form-label-sm">Select aims
                          Progress from
                          templates:
                        </label>
                        <select class="form-control form-control-sm bg-light" id="exampleFormControlTextarea1"
                        rows="2">
                        <option value="none">None</option>
                        <option value="none">Test1</option>
                        <option value="none">Test2</option>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
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
                <th scope="col">NAME</th>
                <th scope="col">GUIDANCE</th>
                <th scope="col">CATEGORY</th>
                <th scope="col">ASSIGNED BY</th>
                <th scope="col">ACTION</th>
              </tr>
            </th>
          </table>
        </div>
      </div>


      <div class="tab-pane fade" id="primary__aims" role="tabpanel"
      aria-labelledby="pills-aims-progress-tab">
      <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
        <p class="mb-0">Primary Aims</p>
        <div>
          <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
          data-target="#exampleModalScrollableRisk2">
          Add Aims
        </button>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="exampleModalScrollableRisk2" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Edit/Insert Primary Aims</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="exampleFormControlTextarea1" class="col-form-label-sm">Select aims from
                  templates:
                </label>
                <select class="form-control form-control-sm bg-light" id="exampleFormControlTextarea1"
                rows="2">
                <option value="none">None</option>
                <option value="none">Test1</option>
                <option value="none">Test2</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
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
        <th scope="col">NAME</th>
        <th scope="col">GUIDANCE</th>
        <th scope="col">CATEGORY</th>
        <th scope="col">ASSIGNED BY</th>
        <th scope="col">ACTION</th>
      </tr>
    </th>
  </table>
</div>
</div>


<div class="tab-pane fade" id="aims__completed" role="tabpanel"
aria-labelledby="pills-aims-completed-tab">
<div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
  <p class="mb-0">Primary Aims Completed</p>
</div>
<div class="px-4">
  <input type="date" class="form-control form-control-sm bg-light">
  <input type="date" class="form-control form-control-sm bg-light mt-2">
  <button type="button" class="btn btn-primary mt-2 py-1 px-2" data-toggle="modal"
  data-target="#put_id">
  Generate PDF
</button>
</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">EVIDENCED BY</th>
        <th scope="col">AIM</th>
        <th scope="col">TIME</th>
        <th scope="col">ASSIGNED BY</th>
        <th scope="col">ACTION</th>
      </tr>
    </th>
  </table>
</div>
</div>


<div class="tab-pane fade" id="child__performance" role="tabpanel"
aria-labelledby="pills-child-performance-tab">
<div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
  <p class="mb-0">Child Monthly Performance</p>
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

<!-- Risk & Development ends -->

<!-- Documents -->
<div class="modal fade documents" tabindex="-1" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Documents </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12">
            <ul class="nav nav-pills m-3" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-updated-document-tab" data-toggle="pill"
                href="#updated__document" role="tab" aria-controls="updated__document"
                aria-selected="true">External Documents </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-forms-chart-tab" data-toggle="pill" href="#forms__chart" role="tab"
                aria-controls="forms__chart" aria-selected="true">Notification of Placement</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="pills-forms-chart-tab" data-toggle="pill" href="#forms__chart" role="tab"
                aria-controls="forms__chart" aria-selected="true">Placement Plan </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-risk-assesment-tab" data-toggle="pill" href="#risk__assesment"
                role="tab" aria-controls="risk__assesment" aria-selected="false">Risk Assesments</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-risk-assesment-tab" data-toggle="pill" href="#risk__assesment"
                role="tab" aria-controls="risk__assesment" aria-selected="false">Forms</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-forms-chart-tab" data-toggle="pill" href="#forms__chart" role="tab"
                aria-controls="forms__chart" aria-selected="true">Forms Chart</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-forms-chart-tab" data-toggle="pill" href="#forms__chart" role="tab"
                aria-controls="forms__chart" aria-selected="true">Incident</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="pills-physical-intervention-tab" data-toggle="pill"
                href="#physical__intervention" role="tab" aria-controls="physical__intervention"
                aria-selected="false">Physical Intervention</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-physical-intervention2-tab" data-toggle="pill"
                href="#physical__intervention2" role="tab" aria-controls="physical__intervention2"
                aria-selected="false">Missing from Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-physical-intervention3-tab" data-toggle="pill"
                href="#physical__intervention3" role="tab" aria-controls="physical__intervention3"
                aria-selected="false">Consequences</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="
                pills-daily-records-tab" data-toggle="pill" href="#daily__records" role="tab"
                aria-controls="daily__records" aria-selected="false">Room search</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="
                pills-physical-form-tab" data-toggle="pill" href="#physical__form" role="tab"
                aria-controls="physical__form" aria-selected="false">Accident </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="
                pills-physical-form-tab" data-toggle="pill" href="#physical__form" role="tab"
                aria-controls="physical__form" aria-selected="false">Bullying</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="
                pills-physical-form-tab" data-toggle="pill" href="#physical__form" role="tab"
                aria-controls="physical__form" aria-selected="false">Record of Behaviour / Coversation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="
                pills-physical-form-tab" data-toggle="pill" href="#physical__form" role="tab"
                aria-controls="physical__form" aria-selected="false">Contact </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="
                pills-physical-form-tab" data-toggle="pill" href="#physical__form" role="tab"
                aria-controls="physical__form" aria-selected="false">Childrens Meetings</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="
                pills-physical-form-tab" data-toggle="pill" href="#physical__form" role="tab"
                aria-controls="physical__form" aria-selected="false">Activity planner</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="
                pills-physical-form-tab" data-toggle="pill" href="#physical__form" role="tab"
                aria-controls="physical__form" aria-selected="false">Menu planner</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="
                pills-physical-form-tab" data-toggle="pill" href="#physical__form" role="tab"
                aria-controls="physical__form" aria-selected="false">Meetings</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="
                pills-physical-form-tab" data-toggle="pill" href="#physical__form" role="tab"
                aria-controls="physical__form" aria-selected="false">Email</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="
                pills-physical-form-tab" data-toggle="pill" href="#physical__form" role="tab"
                aria-controls="physical__form" aria-selected="false">Confidential </a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane active show fade " id="updated__document" role="tabpanel"
              aria-labelledby="pills-updated-document-tab">
              <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
                <p class="mb-0">Updated Documents</p>
                <div>
                  <select>
                    <option value="active">All</option>
                  </select>
                  <select>
                    <option value="all">All</option>
                  </select>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
                  data-target="#exampleModalScrollableDoc">
                  Add Entry
                </button>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="exampleModalScrollableDoc" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable" role="document">
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
                      <option value="file">Admission Consent</option>
                      <option value="file">Admission Notification</option>
                      <option value="file">Adult</option>
                      <option value="file">Bedroom Check Agreement</option>
                      <option value="file">Bedroom Key Agreement</option>
                      <option value="file">Behaviour Contract</option>
                      <option value="file">Birth Certificate</option>
                      <option value="file">Child Fire Induction Form</option>
                      <option value="file">Child SaMM Consent Form</option>
                      <option value="file">Chronology</option>
                      <option value="file">Complaint</option>
                      <option value="file">Complaint From CYP</option>
                      <option value="file">Complaint Resolution Feedback From</option>
                      <option value="file">Complaints Procedure Awareness CYP</option>
                      <option value="file">Compliment</option>
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
      <div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
        <table class="table">
          <th>
            <tr>
              <th scope="col">FILE</th>
              <th scope="col">FILENAME</th>
              <th scope="col">TYPE</th>
              <th scope="col">ISSUED AT</th>
              <th scope="col">EXPIRE ON</th>
              <th scope="col">CREATED AT</th>
              <th scope="col">CREATED BY</th>
              <th scope="col">ACTION</th>
            </tr>
          </th>
        </table>
      </div>
    </div>



    <div class="tab-pane fade " id="forms__chart" role="tabpanel" aria-labelledby="pills-forms-chart-tab">
      <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
        <p class="mb-0">Forms Chart</p>
        <div>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
          data-target="#exampleModalScrollableDoc2">
          Change Forms
        </button>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModalScrollableDoc2" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Form Chart</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="exampleFormControlTextarea1" class="col-form-label-sm">*Form:
                </label>
                <textarea class="form-control form-control-sm bg-light"
                id="exampleFormControlTextarea1" rows="2"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Change</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="tab-pane fade " id="risk__assesment" role="tabpanel"
aria-labelledby="pills-risk-assesment-tab">
<div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
  <p class="mb-0">Risk Assesment</p>
  <div>
    <select>
      <option value="active">All</option>
    </select>
    <select>
      <option value="all">All</option>
    </select>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="#put__id">
    Add Entry
  </button>
  <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
  data-target="#put__id">
  PDF Report
</button>
</div>
</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">CRETED AT</th>
        <th scope="col">CRETED BY</th>
        <th scope="col">UPDATE AT</th>
        <th scope="col">UPDATE BY</th>
        <th scope="col">COMMENTS</th>
        <th scope="col">ACTION</th>
      </tr>
    </th>
  </table>
</div>
</div>


<div class="tab-pane fade" id="physical__intervention" role="tabpanel"
aria-labelledby="pills-physical-intervention-tab">
<div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
  <p class="mb-0">Physical Intervention</p>
  <div>
    <select>
      <option value="active">All</option>
    </select>
    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="put__id">
    Add Entry
  </button>
</div>

</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">INVOLVED STAFF MEMBER</th>
        <th scope="col">CREATED BY</th>
        <th scope="col">CREATED AT</th>
        <th scope="col">DATE/TOME OF INCIDENT</th>
        <th scope="col">STATUS ACTION</th>
        <th scope="col">FORM SUMMARY</th>
        <th scope="col">QA SUMMARY</th>
        <th scope="col">WA SIGNATURE</th>
      </tr>
    </th>
  </table>
</div>
</div>



<div class="tab-pane fade" id="physical__intervention2" role="tabpanel"
aria-labelledby="pills-physical-intervention2-tab">
<div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
  <p class="mb-0">Physical Intervention</p>
  <div>
    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="put__id">
    Add Entry
  </button>
</div>

</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">INVOLVED STAFF MEMBER(S)</th>
        <th scope="col">CREATED BY</th>
        <th scope="col">CREATED AT</th>
        <th scope="col">STATUS</th>
        <th scope="col">ACTIONS</th>
      </tr>
    </th>
  </table>
</div>
</div>



<div class="tab-pane fade" id="physical__intervention3" role="tabpanel"
aria-labelledby="pills-physical-intervention3-tab">
<div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
  <p class="mb-0">Physical Intervention</p>
  <div>
    <select>
      <option value="active">All</option>
    </select>
    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="put__id">
    Add Entry
  </button>
</div>
</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">CREATED BY</th>
        <th scope="col">SAFEGUARDING</th>
        <th scope="col">OTHER STAFF</th>
        <th scope="col">STATUS</th>
        <th scope="col">CREATED AT</th>
        <th scope="col">TIMER</th>
        <th scope="col">ACTIONS</th>
      </tr>
    </th>
  </table>
</div>
</div>



<div class="tab-pane fade" id="daily__records" role="tabpanel"
aria-labelledby="pills-daily-records-tab">
<div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
  <p class="mb-0">Daily Records</p>
</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">VIEW</th>
        <th scope="col">CREATED AT</th>
        <th scope="col">FOR DAY</th>
        <th scope="col">CREATED BY</th>
      </tr>
    </th>
  </table>
</div>
</div>


<div class="tab-pane fade" id="physical__form" role="tabpanel"
aria-labelledby="pills-physical-form-tab">
<div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
  <p class="mb-0">Physical Intervention Form</p>
  <div>
    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="#exampleModalScrollableDoc3">
    create Forms
  </button>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalScrollableDoc3" tabindex="-1" role="dialog"
aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalScrollableTitle">Choose a Form to Create</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form>
        <div class="form-group">
          <label for="exampleFormControlTextarea1" class="col-form-label-sm">
            *Form:
          </label>
          <select class="form-control form-control-sm bg-light" id="exampleFormControlTextarea1"
          rows="2">
          <option disabled selected>Select</option>
          <option value="none">Physical Intervention Form</option>
          <option value="none">Incident Form</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Select</button>
    </form>
  </div>
</div>
</div>
</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">FORM NAME</th>
        <th scope="col">CREATED AT</th>
        <th scope="col">CREATED BY</th>
        <th scope="col">FORM SUMMARY</th>
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

<!-- Documents end -->

<!-- Logs -->
<div class="modal fade logsModel" tabindex="-1" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Logs</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12">
            <ul class="nav nav-pills m-3" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-body-map-tab" data-toggle="pill" href="#body__map" role="tab"
                aria-controls="body__map" aria-selected="true">Body Map</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-money-log-tab" data-toggle="pill" href="#money__log" role="tab"
                aria-controls="money__log" aria-selected="true">Money Log</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-valuable-log-tab" data-toggle="pill" href="#valuable__log" role="tab"
                aria-controls="valuable__log" aria-selected="false">Valuable Log</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-medicine-log-tab" data-toggle="pill" href="#medicine__log" role="tab"
                aria-controls="medicine__log" aria-selected="false">Medicine Log</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-visitor-log-tab" data-toggle="pill" href="#visitor__log" role="tab"
                aria-controls="visitor__log" aria-selected="false">Visitor Log</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-location-history-tab" data-toggle="pill" href="#location__history"
                role="tab" aria-controls="location__history" aria-selected="false">Location History</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="
                pills-additional-support-tab" data-toggle="pill" href="#additional__check" role="tab"
                aria-controls="additional__check" aria-selected="false">Additional Support Check-in</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="
                pills-additional-package-tab" data-toggle="pill" href="#additional__package" role="tab"
                aria-controls="additional__package" aria-selected="false">Additional Support Package History</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="
                pills-logs-contact-tab" data-toggle="pill" href="#logs__contact" role="tab"
                aria-controls="logs__contact" aria-selected="false">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="
                pills-professional-visitor-tab" data-toggle="pill" href="#professional__visitor" role="tab"
                aria-controls="professional__visitor" aria-selected="false">Professional Visitor Log</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane active show fade " id="body__map" role="tabpanel"
              aria-labelledby="pills-body-map-tab">
              <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
                <p class="mb-0">Body Map</p>
                <div>

                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
                  data-target="#exampleModalScrollableLog">
                  Add Entry
                </button>
                <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
                data-target="#put__id">
                Delete Entry
              </button>
              <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
              data-target="#put__id">
              PDF
            </button>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="exampleModalScrollableLog" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Add to Body Map</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="col-form-label-sm">
                      *Severity:
                    </label>
                    <select class="form-control form-control-sm bg-light" id="exampleFormControlTextarea1"
                    rows="2">
                    <option disabled selected>Please Select</option>
                    <option value="file">Minor</option>
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
                  <option value="" temporory>Temporory</option>
                </select>
              </div>
              <div class="form-group">
                <label style="color: red" for="exampleFormControlTextarea1" class="col-form-label-sm">
                  **Selecting permanent would keep it on the bodymap at all times:
                </label>
                <label for="exampleFormControlTextarea1" class="col-form-label-sm">
                  *Was Any Action Taken:
                </label>
                <textarea type="date" class="form-control form-control-sm bg-light"
                id="exampleFormControlTextarea1"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1" class="col-form-label-sm">
                  *Safeguarding Concerns:
                </label>
                <textarea type="date" class="form-control form-control-sm bg-light"
                id="exampleFormControlTextarea1"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1" class="col-form-label-sm">
                  *Deatils:
                </label>
                <textarea type="date" class="form-control form-control-sm bg-light"
                id="exampleFormControlTextarea1"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleFormControlFile1" class="col-form-label-sm">Images:</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
              </div>
              <button type="submit" class="btn btn-primary">Add</button>
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
          <th scope="col">CREATED BY</th>
          <th scope="col">CREATED AT</th>
          <th scope="col">STATUS</th>
          <th scope="col">ACTION</th>
        </tr>
      </th>
    </table>
  </div>
</div>



<div class="tab-pane fade " id="money__log" role="tabpanel" aria-labelledby="pills-money-log-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Money Log</p>
    <div>
      <span class="py-1 px-2">Available Total Cash: <span>0</span> GBP</span>
      <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
      data-target="#exampleModalScrollableLog2">
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
<div class="modal fade" id="exampleModalScrollableLog2" tabindex="-1" role="dialog"
aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalScrollableTitle">Valuable Total Cash:
        <span>0.00</span> GBP
      </h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form>
        <div class="form-group">
          <label for="exampleFormControlTextarea1" class="col-form-label-sm">
            *Money Inventory:
          </label>
          <div class="border text-center  text-success m-0">
            <table class="table">
              <th>
                <tr>
                  <th scope="col">EXPENDITURE</th>
                  <th scope="col">AVAILABLE AMOUNT (GBP)</th>
                </tr>
              </th>
            </table>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>

</div>
<div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">

  <select class="form-control form-control-sm bg-light col-lg-6">
    <option value="active">All</option>
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
        <th scope="col">AMOUNT(GBP)</th>
        <th scope="col">REMAINING AMOUNT(GBP)</th>
        <th scope="col">EXPENDITURES</th>
        <th scope="col">CREATED/UPDATED AT</th>
        <th scope="col">ACTION</th>
      </tr>
    </th>
  </table>
</div>
</div>


<div class="tab-pane fade " id="valuable__log" role="tabpanel"
aria-labelledby="pills-valuable-log-tab">
<div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
  <p class="mb-0">Valuable Log</p>
  <div>

    <!-- Button trigger modal -->
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
<div class="modal-dialog modal-dialog-scrollable" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalScrollableTitle">Valuable Log List</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form>
        <div class="form-group">
          <label for="exampleFormControlTextarea1" class="col-form-label-sm">
            *Severity:
          </label>
          <div class="border text-center  text-success m-0">
            <table class="table">
              <th>
                <tr>
                  <th scope="col">STAFF MEMBER</th>
                  <th scope="col">ITEM</th>
                  <th scope="col">DATE</th>
                  <th scope="col">UPLOAD</th>
                </tr>
              </th>
            </table>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>
<div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
  <p class="mb-0"></p>
  <div>


    <input type="date" placeholder="Date" class="form-control form-control-sm
    col-sm-6 bg-light" />
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
        <th scope="col">STAFF MEMBER</th>
        <th scope="col">ITEM</th>
        <th scope="col">DATE</th>
        <th scope="col">VIEW</th>
      </tr>
    </th>
  </table>
</div>
</div>


<div class="tab-pane fade" id="medicine__log" role="tabpanel"
aria-labelledby="pills-medicine-log-tab">
<div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
  <p class="mb-0">Medicine Log</p>
  <div>
    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="put__id">
    PDF
  </button>
</div>
</div>
<div class=" d-flex justify-content-flex-start align-items-center border mx-2 px-3 py-2 mb-2">
  <div>
    <select class="form-control form-control-sm bg-light col-lg-2">
      <option value="active">All</option>
    </select>
    <select class="form-control form-control-sm bg-light col-lg-2">
      <option value="active">All Medicines</option>
    </select>
    <input type="date" placeholder="Date" class="form-control form-control-sm
    col-sm-4 bg-light" />
    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="#put__id">
    Search
  </button>
  <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
  data-target="#put__id">
  Reset
</button>
</div>
</div>

<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">STAFF MEMBER/CHECKED BY</th>
        <th scope="col">MEDICINE DETAIL</th>
        <th scope="col">CONTROLLED MEDICINE</th>
        <th scope="col">QUANTITY</th>
        <th scope="col">LEFT QUANTITY</th>
        <th scope="col">DATE/TIME OF ADMINISTRATION/MISSED</th>
        <th scope="col">COMMENTS ACTION</th>
      </tr>
    </th>
  </table>
</div>
</div>



<div class="tab-pane fade" id="visitor__log" role="tabpanel" aria-labelledby="pills-visitor-log-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Visitor Log</p>
    <div>
      <select class="form-control form-control-sm bg-light col-sm-4">
        <option value="active">All</option>
      </select>
      <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
      data-target="#put__id">
      Add Entry
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
        <th scope="col">FAMILY/FRIEND</th>
        <th scope="col">RELATION</th>
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



<div class="tab-pane fade" id="location__history" role="tabpanel"
aria-labelledby="pills-location-history-tab">
<div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
  <p class="mb-0">Location History</p>
  <div>
    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="#put__id">
    PDF
  </button>
</div>
</div>
<div class=" d-flex justify-content-end align-items-center border mx-2 px-3 py-2 mb-2">
  <input type="text" placeholder="Assigned Date" class="form-control form-control-sm
  col-lg-3 bg-light" onblur="if(this.value==''){this.type='text'}"
  onfocus="(this.type='date')" />
  <button type="button" class="btn btn-primary ml-1 py-1 px-2" data-toggle="modal"
  data-target="#put__id">
  Search
</button>
</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">LOCATION</th>
        <th scope="col">ASSIGNED DATE</th>
        <th scope="col">REMOVED ON</th>

      </tr>
    </th>
  </table>
</div>
</div>



<div class="tab-pane fade" id="additional__check" role="tabpanel"
aria-labelledby="pills-additional-support-tab">
<div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
  <p class="mb-0">Additional Support Check-in</p>
  <div>
    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="#put__id">
    PDF
  </button>
</div>
</div>
<div class=" d-flex justify-content-end align-items-center border mx-2 px-3 py-2 mb-2">
  <input type="text" placeholder="In" class="form-control form-control-sm
  col-lg-3 bg-light" onblur="if(this.value==''){this.type='text'}"
  onfocus="(this.type='date')" />
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
        <th scope="col">IN</th>
        <th scope="col">OUT</th>
        <th scope="col">CATEGORY</th>
        <th scope="col">ACTIONS</th>
      </tr>
    </th>
  </table>
</div>
</div>


<div class="tab-pane fade" id="additional__package" role="tabpanel"
aria-labelledby="pills-additional-package-tab">
<div class=" d-flex justify-content-start align-items-center border mx-2 px-3 py-2 mb-2">
  <p class="mb-0">Additional Support Package History</p>
</div>
<div class=" d-flex justify-content-end align-items-center border mx-2 px-3 py-2 mb-2">
  <input type="date" placeholder="Start Date" class="form-control form-control-sm
  col-lg-3 bg-light" />
  <button type="button" class="btn btn-primary ml-1 py-1 px-2" data-toggle="modal"
  data-target="#put__id">
  Search
</button>
</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">START DATE</th>
        <th scope="col">EXPIRY DATE</th>
        <th scope="col">TOTAL HOURS</th>
        <th scope="col">REMAINING HOURS</th>
        <th scope="col">ACTION</th>
      </tr>
    </th>
  </table>
</div>
</div>



<div class="tab-pane fade" id="logs__contact" role="tabpanel"
aria-labelledby="pills-logs-contact-tab">
<div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
  <p class="mb-0">Contact</p>
  <div>
    <select class="form-control form-control-sm bg-light col-sm-4">
      <option value="active">All</option>
    </select>
    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="#put__id">
    Add Entry
  </button>
</div>
</div>
<div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
  <select class="form-control form-control-sm bg-light col-sm-1">
    <option value="active">All</option>
  </select>
  <div>
    <input type="date" placeholder="Date" class="form-control form-control-sm
    col-lg-12 bg-light" />
    <input type="date" placeholder="Date" class="form-control form-control-sm
    col-lg-12 bg-light" />
    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="#put__id">
    Submit
  </button>
</div>
</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">CREATED BY</th>
        <th scope="col">CREATED AT</th>
        <th scope="col">TYPE OF CONTACT</th>
        <th scope="col">ACTION</th>
        <th scope="col">SUMMARY</th>
      </tr>
    </th>
  </table>
</div>
</div>


<div class="tab-pane fade" id="professional__visitor" role="tabpanel" aria-labelledby="
pills-professional-visitor-tab">
<div class=" d-flex justify-content-start align-items-center border mx-2 px-3 py-2 mb-2">
  <p class="mb-0">Professional Visitor Log</p>
  <div>
  </div>
</div>
<div class=" d-flex justify-content-start align-items-center border mx-2 px-3 py-2 mb-2">
  <select class="form-control form-control-sm bg-light col-sm-1">
    <option value="active">All</option>
  </select>
</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">PROFESSIONAL</th>
        <th scope="col">PURPOSE</th>
        <th scope="col">CHECKIN</th>
        <th scope="col">CHECKOUT</th>
        <th scope="col">STAYED FOR</th>
        <th scope="col">COST</th>
        <th scope="col">CREATED AT</th>
        <th scope="col">ACTIONS</th>
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

<!-- Logs End -->


</div>


</div>


</div>
</div>
</div>
@stop

@section('footer')
    @include('includes.footer')
@stop
