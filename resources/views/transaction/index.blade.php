@extends('layout.main')
@section('container')
<div id="tableExample2" data-list='{"valueNames":["name","company","nohp","date","time","duration","price","status"],"page":5,"pagination":true}'>
    <div class="table-responsive scrollbar">
      <table class="table table-bordered table-striped fs--1 mb-0">
        <thead class="bg-200 text-900">
          <tr>
            <th class="sort" data-sort="no">No</th>
            <th class="sort" data-sort="name">Name</th>
            <th class="sort" data-sort="company">Company</th>
            <th class="sort" data-sort="nohp">Phone Number</th>
            <th class="sort" data-sort="date">Date</th>
            <th class="sort" data-sort="time">Time</th>
            <th class="sort" data-sort="duration">Duration</th>
            <th class="sort" data-sort="price">Price</th>
            <th class="sort" data-sort="status">Status</th>
@can('admin')
            <th>Action</th>
@endcan
          </tr>
        </thead>
        <tbody class="list">
        @foreach ($transaction as $transaction)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $transaction->name }}</td>
            <td>{{ $transaction->company }}</td>
            <td>{{ $transaction->nohp }}</td>
            <td>{{ $transaction->date }}</td>
            <td>{{ $transaction->time }}</td>
            <td>{{ $transaction->duration }}</td>
            <td>{{ $transaction->price }}</td>
            <td>{{ $transaction->status }}</td>
@can('admin')
            <td class="position-relative">
            <div class="d-flex justify-content-center">
              <a href="/transaction/{{ $transaction->id }}/edit" class="btn">
                <i class="fas fa-edit"></i>
              </a>
            </div>
            </td>
@endcan
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