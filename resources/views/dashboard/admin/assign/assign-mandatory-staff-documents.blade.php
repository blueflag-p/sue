@extends('layouts.app')

@section('title')
    Mendatory Staff Documents
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
            <h2 class="card-title my-2">Mendatory Staff Documents
            </h2>
          </div>
          <div class="p-2 my-2">

          </div>
          <div class="p-2 my-2">
          </div>
        </div>
        <div class="container">
          <div class="row main_checkboxes" style="min-height: 50vh;">
            <div class="col-4 ">
              <div class="custom-control custom-checkbox custom-control-inline my-2">
                <input type="checkbox" class="custom-control-input " id="Application">
                <label class="custom-control-label font-weight-bold" for="Application">Application Form
                </label>
              </div>
            </div>
            <div class="col-4 ">
              <div class="custom-control custom-checkbox custom-control-inline my-2">
                <input type="checkbox" class="custom-control-input" id="CV">
                <label class="custom-control-label font-weight-bold " for="CV">CV
                </label>
              </div>
            </div>
            <div class="col-4 ">
              <div class="custom-control custom-checkbox custom-control-inline my-2">
                <input type="checkbox" class="custom-control-input " id="Medical">
                <label class="custom-control-label font-weight-bold " for="Medical">Medical Questionnaire
                </label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="offset-3 col-6">
              <button type="button" class="btn btn-primary btn-block">Update</button>
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
            <h5 class="modal-title">Add Qualification Type</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="Qualification_name">Qualification Type:</label>
              <input type="text" placeholder="Qualification Type" class="form-control">
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
