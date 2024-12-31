@extends('layout.main')
@section('container')
<form method="post" action="/client/{{ $client->id }}" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
        <label class="form-label" for="basic-form-name">Name</label>
        <input class="form-control" id="basic-form-name" name="name" type="text" value="{{ old('name', $client->name) }}" placeholder="Name Client"/>
    </div>
    <div class="mb-3">
        <label class="form-label" for="basic-form-email">Email</label>
        <input class="form-control" id="basic-form-email" name="email" type="text" value="{{ old('email', $client->email) }}" placeholder="Email" />
    </div>
    <div class="mb-3">
        <label class="form-label" for="basic-form-password">Password</label>
        <input class="form-control" id="basic-form-password" name="password" type="text" value="{{ old('password', $client->password) }}" />
    </div>
    <button class="btn btn-primary" type="submit">Update</button>
</form>
@endsection
