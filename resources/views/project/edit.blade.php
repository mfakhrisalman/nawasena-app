@extends('layout.main')
@section('container')
<form method="post" action="/project/{{ $project->id }}" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
        <label class="form-label" for="basic-form-name">Name </label>
        <input class="form-control" id="basic-form-name" name="name" type="text" value="{{ old('name', $project->name) }}" placeholder="Name Project"/>
    </div>
    <div class="mb-3">
        <label class="form-label" for="basic-form-company">Company</label>
        <input class="form-control" id="basic-form-company" name="company" type="text" value="{{ old('company', $project->company) }}" placeholder="Company" />
    </div>
    <div class="mb-3">
        <label class="form-label" for="basic-form-location">Location</label>
        <input class="form-control" id="basic-form-location" name="location" type="text" value="{{ old('location', $project->location) }}" placeholder="Location" />
    </div>
    <div class="mb-3">
        <label class="form-label" for="basic-form-startdate">Start Date</label>
        <input class="form-control" id="basic-form-startdate" name="startdate" type="date" value="{{ old('startdate', $project->startdate) }}" />
    </div>    
    <div class="mb-3">
        <label class="form-label" for="basic-form-enddate">End Date</label>
        <input class="form-control" id="basic-form-enddate" name="enddate" type="date" value="{{ old('enddate', $project->enddate) }}" />
    </div>
    <div class="mb-3">
        <label class="form-label" for="basic-form-status">Status</label>
        <input class="form-control" id="basic-form-status" name="status" type="text" value="{{ old('status', $project->status) }}" placeholder="Status" />
    </div>
    <button class="btn btn-primary" type="submit">Submit</button>
</form>
@endsection
