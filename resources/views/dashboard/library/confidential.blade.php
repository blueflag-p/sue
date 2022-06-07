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
                  <h2 class="card-title">Confidential Library
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
              Add Confidential Folder</button></div>
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
                    <p><a href="confidential-folder.php" class="btn btn-primary"> View Folder </a></p>
                    <p><button class="btn btn-danger">Archive</button></p>
                    
                  </div>
                </td>
              </tr>
              </tbody>
          </table>
        </div>
      </div>
    </div>
@stop

@section('footer')
    @include('includes.footer')
@stop
