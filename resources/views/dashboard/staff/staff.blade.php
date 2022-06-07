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
              <div class="profile-box profile-box-staff">
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
                        <a class="first nav-link" data-toggle="modal" data-target=".holidays">Holidays</a>
                        <a class="first nav-link" data-toggle="modal" data-target=".unavailability">Unavailability</a>
                        <a class="first nav-link" data-toggle="modal" data-target=".cost">Cost</a>
                        <a class="first nav-link" data-toggle="modal" data-target=".furtherprofile">Further Profile</a>
                        <a class="first nav-link" data-toggle="modal" data-target=".contractedhistories">Contracted Hour Histories</a>
                        <a class="first nav-link" data-toggle="modal" data-target=".frequencyset">Frequency Set</a>
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
              <div class="col-sm-12 col-lg-4">
                <a data-toggle="modal" data-target=".pld">
                  <div class="shadow-bottom shadow-showcase text-center">
                    <div class="card">
                      <div class="card-body text-center">

                        <div class="round-box">
                          <img src="assets/images/icon/time.png" width="128" />
                          <div class="nav flex-column nav-link" id="v-pills-tab" role="tablist"
                          aria-orientation="vertical"><p class="h6 text-primary">Performance, Learning & Development</p>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-sm-12 col-lg-4">
              <a data-toggle="modal" data-target=".staffaims">
                <div class="shadow-bottom shadow-showcase text-center">
                  <div class="card">
                    <div class="card-body text-center">

                      <div class="round-box">
                        <img src="assets/images/icon/teamwork.png" width="128" />
                        <!-- <p class="h5 mb-0">Staff Aims</p> -->
                        <div class="nav flex-column nav-link" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical"><p class="h6 text-primary">Staff Aims</p>
                      </div>

                    </div>

                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-lg-4">
            <a data-toggle="modal" data-target=".managementinfo">
              <div class="shadow-bottom shadow-showcase text-center">
                <div class="card">
                  <div class="card-body text-center">

                    <div class="round-box">
                      <img src="assets/images/icon/informative.png" width="128" />
                      <!-- <p class="h5 mb-0">Management Info</p> -->
                      <div class="nav flex-column nav-link" id="v-pills-tab" role="tablist"
                      aria-orientation="vertical"><p class="h6 text-primary">Management Info</p>
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


                    <div class="card-header d-flex justify-content-between pb-0">
                      <div class="header-title">
                        <h4 class="card-title mb-0">Profile</h4>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                            <h6>Gender :</h6>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                          <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                            <h6>Email :</h6>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                          <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                            <h6>Start Date :</h6>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                          <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                            <h6>Mobile :</h6>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                          <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                            <h6>Job Title :</h6>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                          <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                            <h6>Holiday Type :</h6>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                          <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                            <h6>Landline :</h6>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                          <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                            <h6>Driver :</h6>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                          <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                            <h6>System Role :</h6>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                          <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                            <h6>Fire Marshall :</h6>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                          <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                            <h6>First Aider :</h6>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                          <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                            <h6>Status :</h6>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                          <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                            <h6>Position :</h6>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                          <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                            <h6>Do you agree to work on bank holiday? :</h6>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 p-1">
                            <h6>Location :</h6>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 p-1"> - </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 p-1">
                            <h6>Main Location :</h6>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 p-1"> - </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 p-1">
                            <h6>Medical Alert :</h6>
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
        


        <!-- Holidays -->
        <div class="modal fade holidays" tabindex="-1" aria-hidden="true" style="display: none;">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Holidays</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-12">
                    <div class="card-header d-flex justify-content-between pb-0">
                      <div class="header-title">
                        <h4 class="card-title mb-0">Profile -</h4>
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




        <!-- Unavailability-->
        <div class="modal fade unavailability" tabindex="-1" aria-hidden="true" style="display: none;">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Unavailability</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-12">
                    
                    <div class="card-header d-flex justify-content-between pb-0">
                      <div class="header-title">
                        <h4 class="card-title mb-0">Unavailability -</h4>
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

        
        <!--Cost -->

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
        


        <!-- Further Profile -->
        <div class="modal fade furtherprofile" tabindex="-1" aria-hidden="true" style="display: none;">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Further Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-12">
                   <div class="card-header d-flex justify-content-between pb-0">
                    <div class="header-title">
                      <h4 class="card-title mb-0">Further Profile -</h4>
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
      

      <!-- Contracted Hour Histories -->
      <div class="modal fade contractedhistories" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Contracted Hour Histories</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-12">
                 <div class="card-header d-flex justify-content-between pb-0">
                  <div class="header-title">
                    <h4 class="card-title mb-0">Contracted Hour Histories -</h4>
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


    <!-- Frequency Set -->

    <div class="modal fade frequencyset" tabindex="-1" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Frequency Set</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-12">
                
                <div class="card-header d-flex justify-content-between pb-0">
                  <div class="header-title">
                    <h4 class="card-title mb-0">Frequency Set -</h4>
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

    

    <!-- Performance, Learning & Development -->
    <div class="modal fade pld" tabindex="-1" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Performance, Learning & Development</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-12">
                <ul class="nav nav-pills m-3" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="pills-loc-his-tab" data-toggle="pill" href="#loc__his" role="tab"
                    aria-controls="pills-home" aria-selected="true">Location History</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-ris-lea-tab" data-toggle="pill" href="#ris__lea" role="tab"
                    aria-controls="pills-profile" aria-selected="false">Risk Learning Development</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-ris-com-tab" data-toggle="pill" href="#ris__com" role="tab"
                    aria-controls="pills-contact" aria-selected="false">Risk Learning Development Completed</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-ris-cha-tab" data-toggle="pill" href="#ris__cha" role="tab"
                    aria-controls="pills-contact" aria-selected="false">Risk Learning Outcome Chart</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-quali-tab" data-toggle="pill" href="#quali" role="tab"
                    aria-controls="pills-contact" aria-selected="false">Qualification</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-qua-gra-tab" data-toggle="pill" href="#qua__gra" role="tab"
                    aria-controls="pills-contact" aria-selected="false">Qualification Graph</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-appr-tab" data-toggle="pill" href="#appr" role="tab"
                    aria-controls="pills-contact" aria-selected="false">Appraisals</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-his-appr-tab" data-toggle="pill" href="#his__appr" role="tab"
                    aria-controls="pills-contact" aria-selected="false">Historical Appraisal</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-sta-deb-tab" data-toggle="pill" href="#sta__deb" role="tab"
                    aria-controls="pills-contact" aria-selected="false">Staff Debrief</a>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">

                  <div class="tab-pane active show fade" id="loc__his" role="tabpanel"
                  aria-labelledby="pills-loc-his-tab">
                  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
                    <p class="mb-0">Location History</p>
                    <div>
                      <select>
                        <option value="active">Active</option>
                      </select>
                      <select>
                        <option value="all">All</option>
                      </select>
                    </div>
                  </div>
                  <div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
                    <table class="table">
                      <th>
                        <tr>
                          <th scope="col">LOCATION</th>
                          <th scope="col">ASSIGNED ON</th>
                          <th scope="col">REMOVED ON</th>
                        </tr>
                      </th>
                    </table>
                  </div>
                </div>



                <div class="tab-pane fade" id="ris__lea" role="tabpanel" aria-labelledby="pills-ris-lea-tab">
                  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
                    <p class="mb-0">Risk Learning Development</p>
                    <div>
                      <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
                      data-target="#put__id">
                      Add Entry
                    </button>
                  </div>
                </div>
                <div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
                  <table class="table">
                    <th>
                      <tr>
                        <th scope="col">TASK</th>
                        <th scope="col">CONNECTION</th>
                        <th scope="col">SET BY</th>
                        <th scope="col">STATUS</th>
                      </tr>
                    </th>
                  </table>
                </div>
              </div>



              <div class="tab-pane fade" id="ris__com" role="tabpanel" aria-labelledby="pills-ris-com-tab">
                <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
                  <p class="mb-0">Risk Learning Development Completed</p>
                  <div>
                    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
                    data-target="#exampleModalScrollableLog">
                    Generate PDF
                  </button>
                </div>
              </div>
              <div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
                <table class="table">
                  <th>
                    <tr>
                      <th scope="col">TASK</th>
                      <th scope="col">CONNECTION</th>
                      <th scope="col">CREATED BY</th>
                      <th scope="col">STATUS</th>
                      <th scope="col">COMPLETED ON</th>
                      <th scope="col">ACTION</th>
                    </tr>
                  </th>
                </table>
              </div>
            </div>

            <div class="tab-pane fade" id="ris__cha" role="tabpanel" aria-labelledby="pills-ris-cha-tab">
              <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
                <p class="mb-0">Risk Learning Outcome Chart</p>
                <div>

                </div>
              </div>
            </div>



            <div class="tab-pane fade" id="quali" role="tabpanel" aria-labelledby="pills-quali-tab">
              <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
                <p class="mb-0">Qualification</p>
                <div>
                  <select>
                    <option value="active">Active</option>
                  </select>
                  <select>
                    <option value="all">All</option>
                  </select>
                  <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
                  data-target="#exampleModalScrollablePer">
                  Add Entry
                </button>
                <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
                data-target="#PUT__ID">
                Generate CSV
              </button>
            </div>
            <!-- MODAL -->
            <div class="modal fade" id="exampleModalScrollablePer" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalScrollableTitle">Add Qualification</h5>
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
                      *Nature
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
                  *Issued On:
                </label>
                <input type="date" class="form-control form-control-sm bg-light"
                id="exampleFormControlTextarea1" />
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1" class="col-form-label-sm">
                  *Expires On:
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
          <th scope="col">NAME</th>
          <th scope="col">FILE</th>
          <th scope="col">TYPE</th>
          <th scope="col">NATURE</th>
          <th scope="col">ISSUED ON</th>
          <th scope="col">EXPIRES ON</th>
          <th scope="col">CREATED AT</th>
          <th scope="col">CREATED BY</th>
          <th scope="col">ACTION</th>
        </tr>
      </th>
    </table>
  </div>
</div>



<div class="tab-pane fade" id="qua__gra" role="tabpanel" aria-labelledby="pills-qua-gra-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Qualification Graph</p>
    <div>
      <label for="">Nature</label>
      <select>
        <option value="all">All</option>
      </select>
    </div>
  </div>
</div>


<div class="tab-pane fade" id="appr" role="tabpanel" aria-labelledby="pills-appr-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Appraisal</p>
    <div>
      <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
      data-target="#put__id">
      Add Entry
    </button>
  </div>
</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">CREATED AT</th>
        <th scope="col">CREATED BY</th>
        <th scope="col">ACTION</th>
      </tr>
    </th>
  </table>
</div>
</div>







<div class="tab-pane fade" id="his__appr" role="tabpanel" aria-labelledby="pills-his-appr-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Historical Appraisal</p>
    <div>
    </div>
  </div>
  <div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
    <table class="table">
      <th>
        <tr>
          <th scope="col">CREATED AT</th>
          <th scope="col">CREATED BY</th>
          <th scope="col">ACTION</th>
        </tr>
      </th>
    </table>
  </div>
</div>

<div class="tab-pane fade" id="sta__deb" role="tabpanel" aria-labelledby="pills-sta-deb-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Staff Breif</p>
    <div>
    </div>
  </div>
  <div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
    <table class="table">
      <th>
        <tr>
          <th scope="col">CREATED AT</th>
          <th scope="col">CREATED BY</th>
          <th scope="col">ACTION</th>
        </tr>
      </th>
    </table>
  </div>
</div>




<div class="tab-pane fade" id="loc__his" role="tabpanel" aria-labelledby="pills-loc-his-tab">
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
<div class="tab-pane fade rounded overflow-hidden" id="learning__development">
  <h4 class="text-white py-4 px-3" style="background: #5B1647;">Performance, Learning & Development</h4>
  <ul class="nav nav-pills m-3" id="pills-tab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="pills-loc-his-tab" data-toggle="pill" href="#loc__his" role="tab"
      aria-controls="pills-home" aria-selected="true">Location History</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-ris-lea-tab" data-toggle="pill" href="#ris__lea" role="tab"
      aria-controls="pills-profile" aria-selected="false">Risk Learning Development</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-ris-com-tab" data-toggle="pill" href="#ris__com" role="tab"
      aria-controls="pills-contact" aria-selected="false">Risk Learning Development Completed</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-ris-cha-tab" data-toggle="pill" href="#ris__cha" role="tab"
      aria-controls="pills-contact" aria-selected="false">Risk Learning Outcome Chart</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-quali-tab" data-toggle="pill" href="#quali" role="tab"
      aria-controls="pills-contact" aria-selected="false">Qualification</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-qua-gra-tab" data-toggle="pill" href="#qua__gra" role="tab"
      aria-controls="pills-contact" aria-selected="false">Qualification Graph</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-appr-tab" data-toggle="pill" href="#appr" role="tab"
      aria-controls="pills-contact" aria-selected="false">Appraisals</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-his-appr-tab" data-toggle="pill" href="#his__appr" role="tab"
      aria-controls="pills-contact" aria-selected="false">Historical Appraisal</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-sta-deb-tab" data-toggle="pill" href="#sta__deb" role="tab"
      aria-controls="pills-contact" aria-selected="false">Staff Debrief</a>
    </li>
  </ul>
  <div class="tab-content" id="pills-tabContent">

    <div class="tab-pane active show fade" id="loc__his" role="tabpanel"
    aria-labelledby="pills-loc-his-tab">
    <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
      <p class="mb-0">Location History</p>
      <div>
        <select>
          <option value="active">Active</option>
        </select>
        <select>
          <option value="all">All</option>
        </select>
      </div>
    </div>
    <div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
      <table class="table">
        <th>
          <tr>
            <th scope="col">LOCATION</th>
            <th scope="col">ASSIGNED ON</th>
            <th scope="col">REMOVED ON</th>
          </tr>
        </th>
      </table>
    </div>
  </div>



  <div class="tab-pane fade" id="ris__lea" role="tabpanel" aria-labelledby="pills-ris-lea-tab">
    <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
      <p class="mb-0">Risk Learning Development</p>
      <div>
        <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
        data-target="#put__id">
        Add Entry
      </button>
    </div>
  </div>
  <div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
    <table class="table">
      <th>
        <tr>
          <th scope="col">TASK</th>
          <th scope="col">CONNECTION</th>
          <th scope="col">SET BY</th>
          <th scope="col">STATUS</th>
        </tr>
      </th>
    </table>
  </div>
</div>



<div class="tab-pane fade" id="ris__com" role="tabpanel" aria-labelledby="pills-ris-com-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Risk Learning Development Completed</p>
    <div>
      <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
      data-target="#exampleModalScrollableLog">
      Generate PDF
    </button>
  </div>
</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">TASK</th>
        <th scope="col">CONNECTION</th>
        <th scope="col">CREATED BY</th>
        <th scope="col">STATUS</th>
        <th scope="col">COMPLETED ON</th>
        <th scope="col">ACTION</th>
      </tr>
    </th>
  </table>
</div>
</div>

<div class="tab-pane fade" id="ris__cha" role="tabpanel" aria-labelledby="pills-ris-cha-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Risk Learning Outcome Chart</p>
    <div>

    </div>
  </div>
</div>



<div class="tab-pane fade" id="quali" role="tabpanel" aria-labelledby="pills-quali-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Qualification</p>
    <div>
      <select>
        <option value="active">Active</option>
      </select>
      <select>
        <option value="all">All</option>
      </select>
      <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
      data-target="#exampleModalScrollablePer">
      Add Entry
    </button>
    <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
    data-target="#PUT__ID">
    Generate CSV
  </button>
</div>
<!-- MODAL -->
<div class="modal fade" id="exampleModalScrollablePer" tabindex="-1" role="dialog"
aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalScrollableTitle">Add Qualification</h5>
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
          *Nature
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
      *Issued On:
    </label>
    <input type="date" class="form-control form-control-sm bg-light"
    id="exampleFormControlTextarea1" />
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1" class="col-form-label-sm">
      *Expires On:
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
        <th scope="col">NAME</th>
        <th scope="col">FILE</th>
        <th scope="col">TYPE</th>
        <th scope="col">NATURE</th>
        <th scope="col">ISSUED ON</th>
        <th scope="col">EXPIRES ON</th>
        <th scope="col">CREATED AT</th>
        <th scope="col">CREATED BY</th>
        <th scope="col">ACTION</th>
      </tr>
    </th>
  </table>
</div>
</div>



<div class="tab-pane fade" id="qua__gra" role="tabpanel" aria-labelledby="pills-qua-gra-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Qualification Graph</p>
    <div>
      <label for="">Nature</label>
      <select>
        <option value="all">All</option>
      </select>
    </div>
  </div>
</div>


<div class="tab-pane fade" id="appr" role="tabpanel" aria-labelledby="pills-appr-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Appraisal</p>
    <div>
      <button type="button" class="btn btn-primary py-1 px-2" data-toggle="modal"
      data-target="#put__id">
      Add Entry
    </button>
  </div>
</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">CREATED AT</th>
        <th scope="col">CREATED BY</th>
        <th scope="col">ACTION</th>
      </tr>
    </th>
  </table>
</div>
</div>







<div class="tab-pane fade" id="his__appr" role="tabpanel" aria-labelledby="pills-his-appr-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Historical Appraisal</p>
    <div>
    </div>
  </div>
  <div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
    <table class="table">
      <th>
        <tr>
          <th scope="col">CREATED AT</th>
          <th scope="col">CREATED BY</th>
          <th scope="col">ACTION</th>
        </tr>
      </th>
    </table>
  </div>
</div>

<div class="tab-pane fade" id="sta__deb" role="tabpanel" aria-labelledby="pills-sta-deb-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Staff Breif</p>
    <div>
    </div>
  </div>
  <div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
    <table class="table">
      <th>
        <tr>
          <th scope="col">CREATED AT</th>
          <th scope="col">CREATED BY</th>
          <th scope="col">ACTION</th>
        </tr>
      </th>
    </table>
  </div>
</div>




<div class="tab-pane fade" id="loc__his" role="tabpanel" aria-labelledby="pills-loc-his-tab">
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


</div>
</div>

<!-- Performance, Learning & Development end -->


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
              <a class="nav-link active" id="pills-aim-rat-tab" data-toggle="pill" href="#aim__rat" role="tab"
              aria-controls="pills-aim-rat-tab" aria-selected="true">Aim Ratio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-aim-gra-tab" data-toggle="pill" href="#aim__gra" role="tab"
              aria-controls="pills-aim-gra-tab" aria-selected="false">Aim Ratio Speedo Graph</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-aim-cha-tab" data-toggle="pill" href="#aim__cha" role="tab"
              aria-controls="pills-aim-cha-tab" aria-selected="false">Aim Ratio Chart (Accumulative)</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">

            <div class="tab-pane active show fade" id="aim__rat" role="tabpanel"
            aria-labelledby="pills-aim-rat-tab">
            <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
              <p class="mb-0">Aim Ratio</p>
              <div>
              </div>
            </div>
            <div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
              <table class="table">
                <th>
                  <tr>
                    <th scope="col">LOCATION</th>
                    <th scope="col">EXPECTED AIMS</th>
                    <th scope="col">COMPLETED AIMS</th>
                    <th scope="col">PERCENTAGABLE</th>
                  </tr>
                </th>
              </table>
            </div>
          </div>



          <div class="tab-pane fade" id="aim__gra" role="tabpanel" aria-labelledby="pills-aim-gra-tab">
            <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
              <p class="mb-0">Aim Ratio Speedo Graph</p>
              <div>
              </div>
            </div>
          </div>



          <div class="tab-pane fade" id="aim__cha" role="tabpanel" aria-labelledby="pills-aim-cha-tab">
            <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
              <p class="mb-0">Aim Ratio Chart (Accumulative)</p>
              <div>
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
<div class="tab-pane fade rounded overflow-hidden" id="staff__aims">
  <h4 class="text-white py-4 px-3" style="background: #5B1647;">Staff Aims</h4>
  <ul class="nav nav-pills m-3" id="pills-tab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="pills-aim-rat-tab" data-toggle="pill" href="#aim__rat" role="tab"
      aria-controls="pills-aim-rat-tab" aria-selected="true">Aim Ratio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-aim-gra-tab" data-toggle="pill" href="#aim__gra" role="tab"
      aria-controls="pills-aim-gra-tab" aria-selected="false">Aim Ratio Speedo Graph</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-aim-cha-tab" data-toggle="pill" href="#aim__cha" role="tab"
      aria-controls="pills-aim-cha-tab" aria-selected="false">Aim Ratio Chart (Accumulative)</a>
    </li>
  </ul>
  <div class="tab-content" id="pills-tabContent">

    <div class="tab-pane active show fade" id="aim__rat" role="tabpanel"
    aria-labelledby="pills-aim-rat-tab">
    <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
      <p class="mb-0">Aim Ratio</p>
      <div>
      </div>
    </div>
    <div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
      <table class="table">
        <th>
          <tr>
            <th scope="col">LOCATION</th>
            <th scope="col">EXPECTED AIMS</th>
            <th scope="col">COMPLETED AIMS</th>
            <th scope="col">PERCENTAGABLE</th>
          </tr>
        </th>
      </table>
    </div>
  </div>



  <div class="tab-pane fade" id="aim__gra" role="tabpanel" aria-labelledby="pills-aim-gra-tab">
    <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
      <p class="mb-0">Aim Ratio Speedo Graph</p>
      <div>
      </div>
    </div>
  </div>



  <div class="tab-pane fade" id="aim__cha" role="tabpanel" aria-labelledby="pills-aim-cha-tab">
    <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
      <p class="mb-0">Aim Ratio Chart (Accumulative)</p>
      <div>
      </div>
    </div>
  </div>


</div>
</div>
<!-- Staff Aims end-->



<!-- Management Info -->

<div class="modal fade managementinfo" tabindex="-1" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Management Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12">
            <ul class="nav nav-pills m-3" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-rota-check-tab" data-toggle="pill" href="#rota__check"
                role="tab" aria-controls="pills-rota-check-tab" aria-selected="true">Rota Check-ins</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-sub-doc-tab" data-toggle="pill" href="#sub__doc" role="tab"
                aria-controls="pills-sub-doc-tab" aria-selected="false">Submitted Documents (web / scanned)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-create-form-tab" data-toggle="pill" href="#create__form" role="tab"
                aria-controls="pills-create-form-tab" aria-selected="false">Create & View Forms</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-dbs-tab" data-toggle="pill" href="#dbs" role="tab"
                aria-controls="pills-dbs-tab" aria-selected="false">DBS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-sta-emer-tab" data-toggle="pill" href="#sta__emer" role="tab"
                aria-controls="pills-sta-emer-tab" aria-selected="false">Staff Emergency Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-rot-ass-tab" data-toggle="pill" href="#rot__ass" role="tab"
                aria-controls="pills-rot-ass-tab" aria-selected="false">Rota Assignment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-ent-log-tab" data-toggle="pill" href="#ent__log" role="tab"
                aria-controls="pills-ent-log-tab" aria-selected="false">Entitlement Log(Days)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-pol-vie-tab" data-toggle="pill" href="#pol__vie" role="tab"
                aria-controls="pills-pol-vie-tab" aria-selected="false">Policies Viewed</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="pills-pol-not-tab" data-toggle="pill" href="#pol__not" role="tab"
                aria-controls="pills-pol-not-tab" aria-selected="false">Policies Not Viewed</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane active show fade" id="rota__check" role="tabpanel"
              aria-labelledby="pills-rota-check-tab">
              <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
                <p class="mb-0">Rota Check-Ins</p>
                <div>

                </div>
              </div>
              <div class="px-4">
                <input type=" date" placeholder="From Date" class="form-control form-control-sm bg-light mt-2"
                onblur="if(this.value==''
                ){this.type='text' }" onfocus="(this.type='date')">
                <input type=" date" placeholder="To (present date, if left empty)"
                class="form-control form-control-sm bg-light mt-2" onblur="if(this.value==''
                ){this.type='text' }" onfocus="(this.type='date')">
              </div>
              <div class="d-flex align-items-center border mx-2 px-3 py-2 mb-2">
                <button type=" button" class="btn btn-primary mt-2 py-1 px-2 mx-1" data-toggle="modal"
                data-target="#put_id">
                Reset
              </button>
              <button type=" button" class="btn btn-primary mt-2 py-1 px-2 mx-1" data-toggle="modal"
              data-target="#put_id">
              Search
            </button>
          </div>
          <div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
            <table class="table">
              <th>
                <tr>
                  <th scope="col">LOCATION</th>
                  <th scope="col">IN</th>
                  <th scope="col">OUT</th>
                  <th scope="col">SLEEP FORM</th>
                  <th scope="col">SLEEP TO</th>
                  <th scope="col">PLANNED HOURS</th>
                  <th scope="col">DISTURBED SLEEP</th>
                  <th scope="col">TOTAL AWAKE HOURS</th>
                  <th scope="col">TOTAL SLEEP HOURS</th>
                  <th scope="col">MILEAGE</th>
                  <th scope="col">TYPE</th>
                  <th scope="col">ACTION</th>
                </tr>
              </th>
            </table>
          </div>
        </div>



        <div class="tab-pane fade" id="sub__doc" role="tabpanel" aria-labelledby="pills-sub-doc-tab">
          <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
            <p class="mb-0">Submitted Documents (Web / Scanned)</p>
            <div>
              <button type=" button" class="btn btn-primary mt-2 py-1 px-2 mx-1" data-toggle="modal"
              data-target="#exampleModalScrollableMan">
              Add Entry
            </button>
          </div>
          <!-- MODAL -->
          <div class="modal fade" id="exampleModalScrollableMan" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Add Submitted Documents (Web / Scanned)</h5>
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
                  *Issued On:
                </label>
                <input type="date" class="form-control form-control-sm bg-light"
                id="exampleFormControlTextarea1" />
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1" class="col-form-label-sm">
                  *Expires On:
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
  <div class="d-flex justify-content-end align-items-center border mx-2 px-3 py-2 mb-2">
    <div>
      <select>
        <option value="active">All</option>
      </select>
      <select>
        <option value="all">All</option>
      </select>
      <select>
        <option value="all">Created At (DESC)</option>
      </select>
    </div>
  </div>
  <div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
    <table class="table">
      <th>
        <tr>
          <th scope="col">NAME</th>
          <th scope="col">FILENAME</th>
          <th scope="col">TYPE</th>
          <th scope="col">PUBLISHED AT</th>
          <th scope="col">EXPIRES ON</th>
          <th scope="col">CREATED AT</th>
          <th scope="col">CREATED BY</th>
          <th scope="col">ACTION</th>
        </tr>
      </th>
    </table>
  </div>
</div>




<div class="tab-pane fade" id="create__form" role="tabpanel" aria-labelledby="pills-create-form-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Create & View Forms</p>
    <div>
    </div>
  </div>
  <div class="px-4">
    <select class="form-control form-control-sm bg-light mt-2">
      <option value="">All Location</option>
    </select>
    <select placeholder="To (present date, if left empty)"
    class="form-control form-control-sm bg-light mt-2">
    <option value="">All Forms</option>
  </select>
</div>
<div class="d-flex align-items-center border mx-2 px-3 py-2 mb-2">
  <button type=" button" class="btn btn-primary mt-2 py-1 px-2 mx-1" data-toggle="modal"
  data-target="#put_id">
  Reset
</button>
<button type=" button" class="btn btn-primary mt-2 py-1 px-2 mx-1" data-toggle="modal"
data-target="#put_id">
Search
</button>
</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">FORM NAME</th>
        <th scope="col">CREATED BY</th>
        <th scope="col">CREATED AT</th>
        <th scope="col">ACTION</th>
        <th scope="col">FORM SUMMARY</th>
        <th scope="col">QA SUMMARY</th>
        <th scope="col">QA SIGNATURE</th>
      </tr>
    </th>
  </table>
</div>
</div>



<div class="tab-pane fade" id="dbs" role="tabpanel" aria-labelledby="pills-dbs-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">DBS</p>
    <div>
      <button type=" button" class="btn btn-primary mt-2 py-1 px-2 mx-1" data-toggle="modal"
      data-target="#exampleModalScrollableMan2">
      Add Entry
    </button>
  </div>
  <!-- MODAL -->
  <div class="modal fade" id="exampleModalScrollableMan2" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Add DBS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="exampleFormControlTextarea1" class="col-form-label-sm">
              *Date of initial DBS check:
            </label>
            <input type="text" placeholder="Date of initial DBS check" class="form-control form-control-sm bg-light"
            id="exampleFormControlTextarea1" />
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1" class="col-form-label-sm">
              *DBS Certificate No:
            </label>
            <input type="text" placeholder="DBS Certificate No" class="form-control form-control-sm bg-light"
            id="exampleFormControlTextarea1" />
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1" class="col-form-label-sm">
              *Expires on/Update Check required:
            </label>
            <input placeholder="Expires on/Update Check required" type="text" class="form-control form-control-sm bg-light"
            id="exampleFormControlTextarea1" />
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1" class="col-form-label-sm">
              *Name of Person who checked original certificate:
            </label>
            <input placeholder="Name of Person who checked original certificate" type="text" class="form-control form-control-sm bg-light"
            id="exampleFormControlTextarea1" />
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1" class="col-form-label-sm">
              *Type:
            </label>
            <select class="form-control form-control-sm bg-light" id="exampleFormControlTextarea1"
            rows="2">
            <option disabled selected>Select Type</option>
            <option value="file">Accomadation Request</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1" class="col-form-label-sm">
            *Does this DBS contains a disclosure?:
          </label>
          <select class="form-control form-control-sm bg-light" id="exampleFormControlTextarea1"
          rows="2">
          <option disabled selected>No</option>
          <option value="file">Yes</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1" class="col-form-label-sm">
          *Name of Person who carried out the update check:
        </label>
        <input placeholder="Name of Person who carried out the update check" type="text" class="form-control form-control-sm bg-light"
        id="exampleFormControlTextarea1" />
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1" class="col-form-label-sm">
          *Is this check realted to the person suitability to work with child:
        </label>
        <select class="form-control form-control-sm bg-light" id="exampleFormControlTextarea1"
        rows="2">
        <option disabled selected>No</option>
        <option value="file">Yes</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1" class="col-form-label-sm">*Is this check realted to the person changing their role::</label>
      <textarea placeholder="Is this check realted to the person changing their role:" class="form-control form-control-sm bg-light"
      id="exampleFormControlTextarea1" rows="2"></textarea>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1" class="col-form-label-sm">*Please detail actions taken in order to protect child from contact with unsuitable persons, this may include referral to the DBS or other relevant authoroties:</label>
      <textarea placeholder="Please detail actions taken in order to protect child from contact with unsuitable persons, this may include referral to the DBS or other relevant authoroties" class="form-control form-control-sm bg-light"
      id="exampleFormControlTextarea1" rows="2"></textarea>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1" class="col-form-label-sm">
        *Is this an enhanced or standard DBS?:
      </label>
      <select class="form-control form-control-sm bg-light" id="exampleFormControlTextarea1"
      rows="2">
      <option disabled selected>Select</option>
      <option value="file">Accomadation Request</option>
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
        <th scope="col">DBS NUMBER</th>
        <th scope="col">ISSUE DATE</th>
        <th scope="col">EXPIRY DATE</th>
        <th scope="col">ACTIVE</th>
        <th scope="col">CREATED AT</th>
        <th scope="col">ACTION</th>
      </tr>
    </th>
  </table>
</div>
</div>




<div class="tab-pane fade" id="sta__emer" role="tabpanel" aria-labelledby="pills-sta-emer-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Staff Emergency Contact</p>
    <div>
      <button type=" button" class="btn btn-primary mt-2 py-1 px-2 mx-1" data-toggle="modal"
      data-target="#exampleModalScrollableMan3">
      Add Entry
    </button>
  </div>
  <!-- MODAL -->
  <div class="modal fade" id="exampleModalScrollableMan3" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Add Staff Emergency Contact</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="exampleFormControlTextarea1" class="col-form-label-sm">
              *Contact Name:
            </label>
            <input type="text" class="form-control form-control-sm bg-light"
            id="exampleFormControlTextarea1" />
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1" class="col-form-label-sm">*Address:</label>
            <textarea class="form-control form-control-sm bg-light"
            id="exampleFormControlTextarea1" rows="2"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1" class="col-form-label-sm">
              *Relation:
            </label>
            <input type="phone" class="form-control form-control-sm bg-light"
            id="exampleFormControlTextarea1" />
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1" class="col-form-label-sm">
              *Contact Number:
            </label>
            <input type="number" class="form-control form-control-sm bg-light"
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
        <th scope="col">CONTACT NAME</th>
        <th scope="col">RELATION</th>
        <th scope="col">ADDRESS</th>
        <th scope="col">CONTACT NO.</th>
      </tr>
    </th>
  </table>
</div>
</div>



<div class="tab-pane fade" id="rot__ass" role="tabpanel" aria-labelledby="pills-rot-ass-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Rota Assignment</p>
    <div>
    </div>
  </div>
  <div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
    <table class="table">
      <th>
        <tr>
          <th scope="col">LOCATION</th>
          <th scope="col">START DATE</th>
          <th scope="col">END DATE</th>
          <th scope="col">SLEEPING SHIFT</th>
          <th scope="col">CREATED AT</th>
          <th scope="col">ACTION</th>
        </tr>
      </th>
    </table>
  </div>
</div>




<div class="tab-pane fade" id="ent__log" role="tabpanel" aria-labelledby="pills-ent-log-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Entitlement Log(Days)</p>
    <div>
    </div>
  </div>
  <div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
    <table class="table">
      <th>
        <tr>
          <th scope="col">CREATED BY</th>
          <th scope="col">START DATE</th>
          <th scope="col">END DATE</th>
          <th scope="col">TIME USED</th>
          <th scope="col">TIME ABSENT</th>
          <th scope="col">TYPE OF NON DEDUCTIBLE ABSENCE</th>
          <th scope="col">TYPE OF DEDUCTIBLE ABSENCE</th>
          <th scope="col">REASON</th>
          <th scope="col">REQUESTED HOLIDAY</th>
          <th scope="col">STATUS</th>
          <th scope="col">CREATED AT</th>
          <th scope="col">REJECTED REASON</th>
          <th scope="col">ACTION</th>
        </tr>
      </th>
    </table>
  </div>
</div>


<div class="tab-pane fade" id="pol__vie" role="tabpanel" aria-labelledby="pills-pol-vie-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Policies Viewed</p>
    <div>
      <button type=" button" class="btn btn-primary mt-2 py-1 px-2 mx-1" data-toggle="modal"
      data-target="#put__id">
      Generate PDF
    </button>
  </div>
</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">NAME</th>
        <th scope="col">CREATED AT</th>
        <th scope="col">VIEWED AT</th>
        <th scope="col">SIGNATURE</th>
      </tr>
    </th>
  </table>
</div>
</div>



<div class="tab-pane fade" id="pol__not" role="tabpanel" aria-labelledby="pills-pol-not-tab">
  <div class=" d-flex justify-content-between align-items-center border mx-2 px-3 py-2 mb-2">
    <p class="mb-0">Policies Not Viewed</p>
    <div>
      <button type=" button" class="btn btn-primary mt-2 py-1 px-2 mx-1" data-toggle="modal"
      data-target="#put__id">
      Generate PDF
    </button>
  </div>
</div>
<div class="border text-center py-1 text-success mx-2  mb-3 pb-5">
  <table class="table">
    <th>
      <tr>
        <th scope="col">NAME</th>
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

<!-- Management Info end-->





</div>
</div>
</div>
</div>
</div>
@stop

@section('footer')
    @include('includes.footer')
@stop
