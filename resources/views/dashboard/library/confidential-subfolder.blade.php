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
                        <li class="breadcrumb-item"><a href="confidential.php">Confidential</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="confidential-folder.html">Folder</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sub folder</li>
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
              <thead class="text-nowrap text-center">
                <tr>
                  <th></th>
                  <th>FILE/URL</th>
                  <th>CREATED AT</th>
                  <th>ACTION</th>
                </tr>
              </thead>
              <tbody class="text-nowrap text-center">
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
@stop

@section('footer')
    @include('includes.footer')
@stop
