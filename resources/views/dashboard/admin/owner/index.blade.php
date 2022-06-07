@extends('layouts.app')

@section('title')
All Owners/Directors
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
                  <h2 class="card-title">All Owners/Directors
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

          <div class="ml-auto p-2"><a href="{{ route('owner.create') }}" class="btn btn-primary btn-block">
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
                <th>NAME</th>
                <th>COMPANY</th>
                <th>ROLE</th>
                <th>ACTION</th>
                <th>STATUS</th>
              </tr>
            </thead>
            <tbody class="text-nowrap">
            @foreach($data as $item)
              <tr>
                <td>
                  <div class="avatar-45 mr-2">
                    <img src="{{asset('/storage/owner/'.$item->image)}}" class="img-fluid rounded-circle" alt="image">
                  </div>
                </td>
                <td>{{ $item->first_name }}</td>
                <td>{{ $item->company }}</td>
                <td>{{ $item->system_role }}</td>
                <td>
                  <div class="p-2">
                    <a href="" class="btn btn-primary">View</a>
                    <a href="{{ route('owner.edit',['id' => $item->id]) }}" class="btn btn-danger">Edit</a>
                  </div>
                </td>
                <td class="text-center"><i class="fa fa-check" style="font-size: larger;color: green;"></i></td>
              </tr>
              @endforeach
              <!-- <tr>
                <td>
                  <div class="avatar-45 mr-2">
                    <img src="assets/images/user/1.jpg" class="img-fluid rounded-circle" alt="image">
                  </div>
                </td>
                <td>Dummy Name</td>
                <td>Dummy Company</td>
                <td>Owner</td>
                <td>
                  <div class="p-2"><button class="btn btn-primary">
                      View</button>
                    <button class="btn btn-danger">
                      Edit</button>
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
                <td>Dummy Name</td>
                <td>Dummy Company</td>
                <td>Owner</td>
                <td>
                  <div class="p-2"><button class="btn btn-primary">
                      View</button>
                    <button class="btn btn-danger">
                      Edit</button>
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
                <td>Dummy Name</td>
                <td>Dummy Company</td>
                <td>Owner</td>
                <td>
                  <div class="p-2"><button class="btn btn-primary">
                      View</button>
                    <button class="btn btn-danger">
                      Edit</button>
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
