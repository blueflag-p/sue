@extends('layouts.app')

@section('title')
Forms
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
                  <h2 class="card-title">Forms
                  </h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 my-2">
            <div class="d-flex">
              <div class="ml-auto p-2"><button class="btn btn-primary btn-block" data-toggle="modal"
                  data-target="#version_1">
                  Add Form</button></div>
            </div>
          </div>
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
                <th>FORM NAME</th>
                <th>FORM TYPE</th>
                <th>VERSION</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tbody class="text-nowrap">
              <tr>
                <td>Test Form</td>
                <td>Staff</td>
                <td>2</td>
                <td>
                  <div class="p-2"><button class="btn btn-primary">
                      View</button>
                    <button class="btn btn-primary">
                      Edit</button>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Test Form</td>
                <td>Staff</td>
                <td>2</td>
                <td>
                  <div class="p-2"><button class="btn btn-primary">
                      View</button>
                    <button class="btn btn-primary">
                      Edit</button>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Test Form</td>
                <td>Staff</td>
                <td>2</td>
                <td>
                  <div class="p-2"><button class="btn btn-primary">
                      View</button>
                    <button class="btn btn-primary">
                      Edit</button>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Test Form</td>
                <td>Staff</td>
                <td>2</td>
                <td>
                  <div class="p-2"><button class="btn btn-primary">
                      View</button>
                    <button class="btn btn-primary">
                      Edit</button>
                  </div>
                </td>
              </tr>
              </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- modals -->
    <!-- version modal -->
    <div id="version_1" class="modal fade" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container">
              <div class="d-flex my-4" style="background-color: #e6edef; border-radius: 10px;">
                <div class="mr-auto p-2">
                  <h3 class="card-title my-2">Create Form
                  </h3>
                </div>
                <div class="p-2 my-2">

                </div>
                <div class="p-2 my-2">
                  <a href="#" class="btn btn-primary">Import CSV</a>

                  <a href="#" class="btn btn-primary">Sample CSV</a>
                </div>
              </div>
              <div class="row">
                <div class="col-4 my-3">
                  <span style="font-weight: bold; font-size: large;">* Type:</span>
                </div>
                <div class="col-4 my-3">
                  <span style="font-weight: bold; font-size: large;">* Display Name:</span>
                </div>
                <div class="col-4 my-3">
                  <span style="font-weight: bold; font-size: large;">* Version:</span>
                </div>
                <div class="col-4 my-2">
                  <select class="custom-select" id="inputGroupSelect01">
                    <option selected="">-- Select --</option>
                    <option value="1">Staff</option>
                    <option value="2">Location</option>
                    <option value="3">Young Person</option>
                  </select>
                </div>

                <div class="col-4  my-2">
                  <input type="text" class="form-control" placeholder="Display Name">
                </div>

                <div class="col-4  my-2">
                  <input type="text" class="form-control" placeholder="Version">
                </div>
                <div class="col-12 my-2">
                  <h4>Fields</h4>
                  <button class="btn btn-primary add_field_button my-2">
                    Add Field(s) <i class="fa fa-plus"></i></button>
                </div>
                <div class="container more_fields">
                  <!-- <div class="row ">
                    <div class="col-3">* Field Name: </div>
                    <div class="col-3">* Field Type: : </div>
                    <div class="col-3">Field Prompts: </div>
                    <div class="col-3">Field Value(s):</div>
                    <div class="col-2"><input type="text" class="form-control" placeholder="Field Name"></div>
                    <div class="col-3">
                      <select class="custom-select" id="inputGroupSelect01">
                        <option value="text">Text</option>
                        <option value="number">Number</option>
                        <option value="autofill">autofill:name</option>
                        <option value="calendar">Calendar</option>
                        <option value="calendarautofill">Calendar:autofill</option>
                        <option value="calendarntime">Calendar + Time</option>
                        <option value="calendarntimeautofill">Calendar + Time:autofill</option>
                        <option value="clock">Clock</option>
                        <option value="clockprefill">Clock:prefill</option>
                        <option value="ypdob">yp DOB</option>
                        <option value="esign">esign</option>
                        <option value="textarea">textarea</option>
                        <option value="dropdown">dropdown</option>
                        <option value="list">multiple select dropdown</option>
                        <option value="stafflist">staff list</option>
                        <option value="yplist">yp list</option>
                        <option value="radio">radio</option>
                        <option value="checkbox">checkbox</option>
                        <option value="checkboxlist">multiple checkbox</option>
                        <option value="file">file</option>
                        <option value="heading">heading</option>
                        <option value="subheading">sub heading</option>
                        <option value="ptag">plain text(p tag)</option>

                      </select>
                    </div>
                    <div class="col-3">
                      <textarea class="form-control" id="exampleFormControlTextarea2"
                        placeholder="Label in Textarea"></textarea>
                    </div>
                    <div class="col-3">
                      <textarea class="form-control" id="exampleFormControlTextarea3"
                        placeholder="Label in Textarea"></textarea>
                    </div>
                    <div class="col-1 my-4">
                      <button class="btn btn-primary remove_field">
                        x</button>
                    </div>


                  </div> -->
                </div>

                <div class="col-12 my-4">
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
