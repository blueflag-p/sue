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
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-4">
                  <div class="card card-block p-card">
                    <div class="profile-box">
                      <div class="profile-card rounded">
                        <img src="assets/images/user/1.jpg" alt="profile-bg"
                        class="avatar-100 rounded d-block mx-auto img-fluid mb-3">
                        <h3 class="font-600 text-white text-center mb-0">Professional Company</h3>
                        <p class="text-white text-center mb-5">edit profile</p>
                      </div>
                      <div class="pro-content rounded">


                        <div class="row">
                          <div class="col">
                            <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                              <a class="first nav-link" data-toggle="modal" data-target=".profile">Profile</a>
                              <a class="first nav-link" data-toggle="modal" data-target=".professionals">Professionals</a>
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
      </div>

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
                          <h6>Contact Name:</h6>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                          <h6>Email :</h6>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                          <h6>Address :</h6>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                          <h6>Telephone :</h6>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 p-1"> - </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 p-1">
                          <h6>Website :</h6>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 p-1"> <a href="">google.com</a> </div>



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
                  <div class="p-2 d-flex">
                    <a class="btn btn-secondary ml-auto" href="createprofessional.php">Add New</a>
                  </div>
                 <div class="table-responsive">
                  <table id="datatable-1" class="table data-table table-striped table-bordered">
                    <thead class="text-nowrap">
                      <tr>
                        <th></th>
                        <th>PROFESSIONAL NAME</th>
                        <th>TYPE</th>
                        <th>TELEPHONE</th>
                        <th>EMAIL</th>
                        <th>ADDRESS</th>
                        <th>ACTION</th>
                      </tr>
                    </thead>
                    <tbody class="text-nowrap">
                      <tr>
                        <td class="text-center">
                          <i class="fa fa-folder" style="font-size: xx-large;"></i>
                        </td>
                        <td>Admin professional</td>
                        <td>Social Worker</td>
                        <td>+98 (458) - 4589</td>
                        <td>admin@sue.com</td>
                        <td>ABC Road</td>
                        <td>
                          <div class="p-2 text-center">
                            <p><a href="folder_1.php" class="btn btn-primary"> Edit </a></p>
                            <p><a href="folder_1.php" class="btn btn-secondary "> View </a></p>
                            <p><button class="btn btn-danger">Archive</button></p>

                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
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
@stop

@section('footer')
    @include('includes.footer')
@stop
