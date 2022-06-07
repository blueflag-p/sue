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
                  <h2 class="card-title">Library
                  </h2>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="d-flex">
          <div class="p-2"><button class="btn btn-primary">
              Active</button></div>
          <div class="p-2"><button class="btn btn-danger">
              Archived</button></div>

          <div class="ml-auto p-2"><button class="btn btn-primary btn-block" data-toggle="modal"
              data-target="#version_1">
              Add Folder</button></div>
        </div>
      </div>
      <div class="card-body">
        <div class="collapse" id="datatable-1">
          <div class="card"></div>
        </div>
        <div class="table-responsive">
          <table id="datatable-1" class="table data-table table-striped table-bordered">
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
                  <div class="p-2 text-center">
                    <p><a href="folder_1.php" class="btn btn-primary"> View Folder </a></p>
                    <p><button class="btn btn-danger">Archive</button></p>
                    
                  </div>
                </td>
              </tr>
              </tbody>
          </table>
        </div>
      </div>
    </div>

<div id="version_1" class="modal fade" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Add Folder to Library
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
@stop

@section('footer')
    @include('includes.footer')
@stop
