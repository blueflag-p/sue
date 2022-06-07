@extends('layouts.app')

@section('title')
    Assign Policy To Functionality Forms
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
        <div class="d-flex my-4" style="background-color: #e6edef; border-radius: 10px;">
          <div class="mr-auto p-2">
            <h2 class="card-title my-2">Assign Policy To Functionality Forms
            </h2>
          </div>
          <div class="p-2 my-2">

          </div>
          <div class="p-2 my-2">
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <table class="table">
                <thead>
                  <tr class="text-center" style="font-size: larger;">
                    <th scope="col"></th>
                    <th scope="col">FORM NAME</th>
                    <th scope="col">ASSIGN</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-center" style="font-size: large;">
                    <th scope="row"><i class="fa fa-address-book" style="font-size: xx-large;"></i></th>
                    <td>Physical Intervention (Default)</td>
                    <td><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#version">Assign Policy</a>
                    </td>
                  </tr>
                  <tr class="text-center" style="font-size: large;">
                    <th scope="row"><i class="fa fa-address-book" style="font-size: xx-large;"></i></th>
                    <td>Physical Intervention (Windows)</td>
                    <td><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#version">Assign Policy</a>
                    </td>
                  </tr>
                  <tr class="text-center" style="font-size: large;">
                    <th scope="row"><i class="fa fa-address-book" style="font-size: xx-large;"></i></th>
                    <td>Appraisal (Windows)</td>
                    <td><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#version">Assign Policy</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- modals -->
    <!-- version modal -->
    <div class="modal fade" id="version" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Choose Policy To Assign</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <select id="multiple" class="js-states form-control" multiple>
                <option>Policy 1</option>
                <option>Policy 2</option>
                <option>Policy 3</option>
                <option>Policy 4</option>
                <option>Policy 5</option>
                <option>Policy 6</option>
                <option>Policy 7</option>
              </select>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
    </div>
@stop

@section('footer')
    @include('includes.footer')
@stop
