@extends('layout.main')
@section('container')
<div id="tableExample2" data-list='{"valueNames":["name","company","location","startdate","enddate","status"],"page":5,"pagination":true}'>
   <a class="btn btn-falcon-success btn-sm mb-3" type="button" href="/project/create">
    <span class="fas fa-plus" data-fa-transform="shrink-3 down-2">
      </span><span class="ms-1">Data</span>
    </a>
    <div class="table-responsive scrollbar">
      <table class="table table-bordered table-striped fs--1 mb-0">
        <thead class="bg-200 text-900">
          <tr>
            <th class="sort" data-sort="no">No</th>
            <th class="sort" data-sort="name">Name</th>
            <th class="sort" data-sort="email">Company</th>
            <th class="sort" data-sort="email">Location</th>
            <th class="sort" data-sort="email">Start Date</th>
            <th class="sort" data-sort="email">End Date</th>
            <th class="sort" data-sort="email">Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class="list">
        @foreach ($projects as $project)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $project->name }}</td>
            <td>{{ $project->company }}</td>
            <td>{{ $project->location }}</td>
            <td>{{ $project->startdate }}</td>
            <td>{{ $project->enddate }}</td>
            <td>{{ $project->status }}</td>
            <td class="position-relative">
            <div class="d-flex justify-content-center">
              <a href="/project/{{ $project->id }}/edit" class="btn">
                <i class="fas fa-edit"></i>
              </a>
              <form action="/project/{{ $project->id }}" method="post" >
                @method('delete')
                @csrf
                <button type="submit" class="btn ">
                  <i class="fas fa-trash"></i>
                </button>
              </form>
            </div>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <div class="d-flex justify-content-center mt-3">
      <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
      <ul class="pagination mb-0"></ul>
      <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
    </div>
  </div>
@endsection