@extends('layout.main')
@section('container')
  <form method="post" action="/client" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label class="form-label" for="basic-form-name">Name</label>
      <input class="form-control" id="basic-form-name" id="name" name="name" type="text" placeholder="Name Client"/>
    </div>
    <div class="mb-3">
      <label class="form-label" for="basic-form-email">Email</label>
      <input class="form-control" id="basic-form-email" name="email" id="email" type="email" placeholder="Email" />
    </div>
    <div class="mb-3">
      <label class="form-label" for="basic-form-password">Password</label>
      <input class="form-control" id="basic-form-password" name="password" id="password" type="password" placeholder="Password" />
    </div>
    <button class="btn btn-primary" type="submit">Submit</button>
  </form>
@endsection