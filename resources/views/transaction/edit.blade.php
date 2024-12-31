@extends('layout.main')
@section('container')
<form method="post" action="/transaction/{{ $transaction->id }}" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-2">
        <div class="row">
          <div class="col-md-4 mb-2">
            <label class="form-label" for="basic-form-name">Name </label>
            <input class="form-control" id="name" name="name" type="text" value="{{ old('name', $transaction->name) }}" disabled/>
          </div>
          <div class="col-md-4 mb-2">
            <label class="form-label" for="basic-form-company">Company</label>
            <input class="form-control" id="company" name="company" type="text" value="{{ old('company', $transaction->company) }}" disabled/>
          </div>
          <div class="col-md-4">
            <label class="form-label" for="basic-form-nohp">Phone Number</label>
            <input class="form-control" id="nohp" name="nohp" type="text" value="{{ old('nohp', $transaction->nohp) }}" disabled />
          </div>
        </div>
    </div>
    <div class="mb-2">
        <div class="row">
          <div class="col-md-3 mb-2">
            <label class="form-label" for="basic-form-date">Date</label>
            <input class="form-control" name="date" id="date" type="date" value="{{ old('date', $transaction->date) }}" disabled/>
          </div>
          <div class="col-md-3 mb-2">
            <label class="form-label" for="basic-form-time">Time</label>
            <input class="form-control" name="time" id="time" type="time" value="{{ old('time', $transaction->time) }}" disabled/>
          </div>
          <div class="col-md-3 mb-2">
            <label class="form-label" for="basic-form-duration">Duration</label>
            <select class="form-select" aria-label="Default select example" name="duration" id="duration" disabled>
                <option value="1 hour" {{ old('duration', $transaction->duration) == '1 hour' ? 'selected' : '' }}>1 hour</option>
                <option value="2 hours" {{ old('duration', $transaction->duration) == '2 hours' ? 'selected' : '' }}>2 hours</option>
                <option value="3 hours" {{ old('duration', $transaction->duration) == '3 hours' ? 'selected' : '' }}>3 hours</option>
                <option value="4 hours" {{ old('duration', $transaction->duration) == '4 hours' ? 'selected' : '' }}>4 hours</option>
                <option value="5 hours" {{ old('duration', $transaction->duration) == '5 hours' ? 'selected' : '' }}>5 hours</option>
                <option value="6 hours" {{ old('duration', $transaction->duration) == '6 hours' ? 'selected' : '' }}>6 hours</option>
                <option value="7 hours" {{ old('duration', $transaction->duration) == '7 hours' ? 'selected' : '' }}>7 hours</option>
            </select>
          </div>
        <div class="col-md-3">
            <label class="form-label" for="basic-form-price">Price</label>
            <input class="form-control" name="price" id="price" type="text" placeholder="Price" value="{{ old('price', $transaction->price) }}" disabled />
        </div>
        </div>
      </div>   
    <div class="mb-2">
        <label class="form-label" for="basic-form-status">Status</label>
        <select class="form-select" aria-label="Default select example" name="status" id="status">
            <option value="on progress" {{ old('status', $transaction->status) == 'on progress' ? 'selected' : '' }}>on progress</option>
            <option value="waiting for payment" {{ old('status', $transaction->status) == 'waiting for payment' ? 'selected' : '' }}>waiting for payment</option>
            <option value="fail" {{ old('status', $transaction->status) == 'fail' ? 'selected' : '' }}>fail</option>
        </select>
    </div>
    <button class="btn btn-primary" type="submit">Update</button>
</form>
@endsection
