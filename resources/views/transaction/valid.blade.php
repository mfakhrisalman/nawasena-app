@extends('layout.main')
@section('container')
<form method="post" action="/list-payment/{{ $transaction->id }}" enctype="multipart/form-data">
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
        <div class="row">
          <div class="col-md-6 mb-2">
            <label class="form-label" for="basic-form-bank">Bank </label>
            <input class="form-control" id="bank" name="bank" type="text" value="{{ old('bank', $transaction->bank) }}" disabled/>
          </div>
          <div class="col-md-6 mb-2">
            <label class="form-label" for="basic-form-BAN">Bank Account Number</label>
            <input class="form-control" id="BAN" name="BAN" type="text" value="{{ old('BAN', $transaction->BAN) }}" disabled/>
          </div>
        </div> 
      </div>

      <div class="mb-4">
        <div class="row">
          <div class="col-md-3 mb-2">
            <label class="form-label" for="basic-form-linkmeet">Receipt </label>

            @if ($transaction->receipt)
            <div class="col-6 col-md-4 px-1" style="max-width: 150px;">
              <a href="{{ asset('storage/' . $transaction->receipt) }}" data-gallery="gallery-2">
                <img src="{{ asset('storage/' . $transaction->receipt) }}" alt="" class="img-fluid rounded mb-2 mb-lg-0">
              </a>
            </div>
            @else
                <p>receipt not found</p>
            @endif
          </div>


          <div class="col-md-4 mb-2">
            <label class="form-label" for="basic-form-linkmeet">Status </label>
            <select class="form-select" aria-label="Default select example" name="status" id="status">
                <option value="verified" {{ old('status', $transaction->status) == 'verified' ? 'selected' : '' }}>verified</option>
                <option value="not verified" {{ old('status', $transaction->status) == 'not verified' ? 'selected' : '' }}>not verified</option>
            </select> 
          </div>
          <div class="col-md-5 mb-2">
            <label class="form-label" for="basic-form-linkmeet">Link Meet </label>
            <input class="form-control" id="linkmeet" name="linkmeet" type="text" value="{{ old('linkmeet', $transaction->linkmeet) }}" placeholder="Link Meet"/>
          </div>
        </div> 
      </div>



    <button class="btn btn-primary" type="submit">Submit</button>
</form>
@endsection
