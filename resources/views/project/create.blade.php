@extends('layout.main')
@section('container')
  <form method="post" action="/project" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label class="form-label" for="basic-form-name">Name</label>
      <input class="form-control" id="basic-form-name" id="name" name="name" type="text" placeholder="Name Project"/>
    </div>
    <div class="mb-3">
      <label class="form-label" for="basic-form-company">Company</label>
      <input class="form-control" id="basic-form-company" name="company" id="company" type="text" placeholder="Company" />
    </div>
    <div class="mb-3">
      <label class="form-label" for="basic-form-location">Location</label>
      <input class="form-control" id="basic-form-location" name="location" id="location" type="text" placeholder="Location" />
    </div>
    <div class="mb-3">
      <label class="form-label" for="basic-form-startdate">Start Date</label>
      <input class="form-control" id="basic-form-startdate" name="startdate" id="startdate" type="date"/>
    </div>
    <div class="mb-3">
      <label class="form-label" for="basic-form-enddate">End Date</label>
      <input class="form-control" id="basic-form-enddate" name="enddate" id="enddate" type="date"/>
    </div>
    <div class="mb-3">
      <label class="form-label" for="basic-form-status">Status</label>
      <input class="form-control" id="basic-form-status" name="status" id="status" type="text" placeholder="Status" />
    </div>
    <button class="btn btn-primary" type="submit">Submit</button>
  </form>
@endsection