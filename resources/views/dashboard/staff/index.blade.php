@extends('layouts.app')

@section('title')
    Staff List
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
                  <h2 class="card-title">Staff List
                  </h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 my-2">
            <select class="custom-select" id="inputGroupSelect01">
              <option selected="">Select Location</option>
              <option value="1">Assign to All locations</option>
              <option value="2">One</option>
              <option value="3">Two</option>
            </select>
          </div>
        </div>
        <div class="d-flex">
          <div class="p-2"><button class="btn btn-primary">
              Active</button></div>
          <div class="p-2"><button class="btn btn-danger">
              Archived</button></div>
          <div class="p-2"><button class="btn btn-info">
              Unassigned</button></div>
          <div class="ml-auto p-2"><a href="{{ route('staff.create') }}" class="btn btn-primary btn-block">
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
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>SYSTEM ROLE</th>
                <th>TELEPHONE</th>
                <th>EMAIL</th>
                <th>LOCATION</th>
                <th>ACTION</th>
                <th>STATUS</th>
              </tr>
            </thead>
            <tbody class="text-nowrap">
              @foreach($data as $item)
              <tr>
                <td>
                  <div class="avatar-45 mr-2">
                    <img src="{{asset('/storage/staff/'.$item->image)}}" class="img-fluid rounded-circle" alt="image">
                  </div>
                </td>
                <td>{{ $item->first_name }}</td>
                <td>{{ $item->last_name }}</td>
                <td>{{ $item->system_role }}</td>
                <td>{{ $item->mobile }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->location }}</td>
                <td>
                  <div class="p-2">
                    <a href="{{ route('staff.edit',['id' => $item->id]) }}" class="btn btn-primary">View/Edit</a>
                    <a href="" class="btn btn-danger">Archive</a>
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
                <td>john</td>
                <td>Doe</td>
                <td>Senior Admin</td>
                <td>000000000</td>
                <td>john.doe@gmail.com</td>
                <td>16 street</td>
                <td>
                  <div class="p-2"><button class="btn btn-primary">
                      View/Edit</button>
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
                <td>john</td>
                <td>Doe</td>
                <td>Senior Admin</td>
                <td>000000000</td>
                <td>john.doe@gmail.com</td>
                <td>16 street</td>
                <td>
                  <div class="p-2"><button class="btn btn-primary">
                      View/Edit</button>
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
                <td>john</td>
                <td>Doe</td>
                <td>Senior Admin</td>
                <td>000000000</td>
                <td>john.doe@gmail.com</td>
                <td>16 street</td>
                <td>
                  <div class="p-2"><button class="btn btn-primary">
                      View/Edit</button>
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
                <td>john</td>
                <td>Doe</td>
                <td>Senior Admin</td>
                <td>000000000</td>
                <td>john.doe@gmail.com</td>
                <td>16 street</td>
                <td>
                  <div class="p-2"><button class="btn btn-primary">
                      View/Edit</button>
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
