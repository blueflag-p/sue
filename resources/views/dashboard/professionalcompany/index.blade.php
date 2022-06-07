@extends('layouts.app')

@section('title')
Professional Company List
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
                  <h2 class="card-title">Professional Company List
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
              Export All Professionals</button></div>
          <div class="p-2"><a href="{{ route('professional.company.create') }}" class="btn btn-primary btn-block">
              Add</a></div>
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
                <th>COMPANY</th>
                <th>ADDRESS</th>
                <th>ACTION</th>
                <th>STATUS</th>
              </tr>
            </thead>
            <tbody class="text-nowrap">
              @foreach($data as $item)
              <tr>
                <td>
                  <div class="avatar-45 mr-2">
                    <img src="{{asset('/storage/company/logo/'.$item->image)}}" class="img-fluid rounded-circle" alt="image">
                  </div>
                </td>
                <td>{{ $item->company_name }}</td>
                <td>{{ $item->address }}</td>
                <td>
                  <div class="p-2">
                    <a href="{{ route('professional.company.edit',['id' => $item->id]) }}" class="btn btn-primary">View/Edit</a>
                    <button class="btn btn-primary">Export CSV</button>
                    <button class="btn btn-danger">Archive</button>
                  </div>
                </td>
                <td class="text-center"><i class="fa fa-check" style="font-size: larger;color: green;"></i></td>
              </tr>
              @endforeach
              <!-- <tr>
                <td>
                  <div class="avatar-45 mr-2">
                    <img src="assets/images/user/5.jpg" class="img-fluid rounded-circle" alt="image">
                  </div>
                </td>
                <td>Dummy Company Name</td>
                <td>16 stree</td>
                <td>
                  <div class="p-2"><button class="btn btn-primary">
                      View/Edit</button>
                    <button class="btn btn-primary">
                      Export CSV</button>
                    <button class="btn btn-danger">
                      Archive</button>
                  </div>
                </td>
                <td class="text-center"><i class="fa fa-check" style="font-size: larger;color: green;"></i></td>
              </tr>
              <tr>
                <td>
                  <div class="avatar-45 mr-2">
                    <img src="assets/images/user/1.jpg" class="img-fluid rounded-circle" alt="image">
                  </div>
                </td>
                <td>Dummy Company Name</td>
                <td>16 stree</td>
                <td>
                  <div class="p-2"><button class="btn btn-primary">
                      View/Edit</button>
                    <button class="btn btn-primary">
                      Export CSV</button>
                    <button class="btn btn-danger">
                      Archive</button>
                  </div>
                </td>
                <td class="text-center"><i class="fa fa-times" style="font-size: larger;color: red;"></i></td>
              </tr>
              <tr>
                <td>
                  <div class="avatar-45 mr-2">
                    <img src="assets/images/user/2.jpg" class="img-fluid rounded-circle" alt="image">
                  </div>
                </td>
                <td>Dummy Company Name</td>
                <td>16 stree</td>
                <td>
                  <div class="p-2"><button class="btn btn-primary">
                      View/Edit</button>
                    <button class="btn btn-primary">
                      Export CSV</button>
                    <button class="btn btn-danger">
                      Archive</button>
                  </div>
                </td>
                <td class="text-center"><i class="fa fa-check" style="font-size: larger;color: green;"></i></td>
              </tr>
              <tr>
                <td>
                  <div class="avatar-45 mr-2">
                    <img src="assets/images/user/5.jpg" class="img-fluid rounded-circle" alt="image">
                  </div>
                </td>
                <td>Dummy Company Name</td>
                <td>16 stree</td>
                <td>
                  <div class="p-2"><button class="btn btn-primary">
                      View/Edit</button>
                    <button class="btn btn-primary">
                      Export CSV</button>
                    <button class="btn btn-danger">
                      Archive</button>
                  </div>
                </td>
                <td class="text-center"><i class="fa fa-check" style="font-size: larger;color: green;"></i></td>
              </tr> -->
              </tbody>
          </table>
        </div>
      </div>
    </div>
@stop

@section('footer')
    @include('includes.footer')
@stop
