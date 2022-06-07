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
          <div class="col-6">
            <div class="row">
              <div class="card-header d-flex justify-content-between bg-transparent">
                <div class="header-title">
                  <h2 class="card-title">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="library.html">Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Folder</li>
                      </ol>
                    </nav>
                  </h2>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="d-flex">
          <div class="p-2"><button class="btn btn-primary">
              Active</button>&nbsp;&nbsp;<button class="btn btn-danger">
              Archived</button></div>
          <div class="p-2"> </div>
          <div class="p-2"> </div>
          <div class="ml-auto p-2">
            <button class="btn btn-primary " data-toggle="modal" data-target="#version_1">
              Add Folder</button>
            <button class="btn btn-primary " data-toggle="modal" data-target="#version_2">
              Add File</button>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="collapse" id="datatable-1">
          <div class="card"></div>
        </div>
        <div class="col-12">
          <div class="table-responsive">
            <table class="table  table-striped table-bordered">
              <thead class="text-nowrap">
                <tr>
                  <th></th>
                  <th>FOLDER NAME</th>
                  <th>DESCRIPTION</th>
                  <th>UPDATED ON</th>
                  <th>FOLDERS/FILES</th>
                  <th>ACTION</th>
                </tr>
              </thead>
              <tbody class="text-nowrap">
                <tr>
                  <td class="text-center">
                    <i class="fa fa-folder" style="font-size: xx-large;"></i>
                  </td>
                  <td>Dummy Name</td>
                  <td>Dummy Description</td>
                  <td>16/4/22</td>
                  <td>File : 1</td>
                  <td>
                    <div class="p-2"><a href="subfolder.php" class="btn btn-primary">
                        View Folder </a>
                      <button class="btn btn-danger">
                        Archive</button>
                    </div>
                  </td>
                </tr>

                </tbody>
            </table>
          </div>
          <div class="table-responsive " style="margin-left: 20px;">
            <table class="table  table-striped table-bordered">
              <thead class="text-nowrap">
                <tr>
                  <th></th>
                  <th>FILE/URL</th>
                  <th>CREATED AT</th>
                  <th>ACTION</th>
                </tr>
              </thead>
              <tbody class="text-nowrap">
                <tr>
                  <td class="text-center">
                    <i class="fa fa-file" style="font-size: xx-large;"></i>
                  </td>
                  <td>abc</td>
                  <td>16/4/22</td>
                  <td>

                    <button class="btn btn-danger">
                      Archive</button>
          
          </td>
          </tr>

          </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
  

  <!-- modals -->
  <!-- version modal -->
  <div id="version_1" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Add Sub Folder
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">

            <div class="col-12 my-2">
              <label>Folder Name :</label>
              <input type="text" class="form-control" placeholder="Folder Name">
            </div>

            <div class="col-12  my-2">
              <label>Description :</label>
              <textarea class="form-control my-3" placeholder="Description" rows="2"></textarea>
            </div>

            <div class="col-12 my-2">
              <a href="#" class="btn btn-primary btn-block">SUBMIT</a>
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
          <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Add File
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">

            <div class="col-12 my-2">
              <label>Name* :</label>
              <input type="text" class="form-control" placeholder="Folder Name">
            </div>

            <div class="col-12  my-2">
              <label>Choose File* :</label>
              <input type="file" class="form-control " placeholder="Choose file">
            </div>

            <div class="col-12 my-2">
              <a href="#" class="btn btn-primary btn-block">SUBMIT</a>
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
