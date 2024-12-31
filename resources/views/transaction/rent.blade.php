@extends('layout.main')
@section('container')
  <form method="post" action="/transaction/store" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label class="form-label" for="basic-form-company">Company</label>
      <input class="form-control" name="company" id="company" type="company" placeholder="Company" />
    </div>
    <div class="mb-3">
      <label class="form-label" for="basic-form-nohp">Phone Number</label>
      <input class="form-control" id="basic-form-nohp" name="nohp" id="nohp" type="number" placeholder="Phone Number" />
    </div>
    <div class="mb-3">
      <div class="row">
        <div class="col-md-6 mb-3">
          <label class="form-label" for="basic-form-date">Date</label>
          <input class="form-control" id="basic-form-date" name="date" id="date" type="date"/>
        </div>
        <div class="col-md-6">
          <label class="form-label" for="basic-form-time">Time</label>
          <input class="form-control" id="basic-form-time" name="time" id="time" type="time"/>
        </div>
      </div>
    </div>
    <div class="mb-3">
      <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label" for="basic-form-duration">Duration</label>
            <select class="form-select" aria-label="Default select example" name="duration" id="duration">
                <option selected="">Duration</option>
                <option value="1 hour">1 hour</option>
                <option value="2 hours">2 hours</option>
                <option value="3 hours">3 hours</option>
                <option value="4 hours">4 hours</option>
                <option value="5 hours">5 hours</option>
                <option value="6 hours">6 hours</option>
                <option value="7 hours">7 hours</option>
              </select>
          </div>
          <div class="col-md-6">
            <label class="form-label" for="basic-form-price">Price</label>
            <input class="form-control" name="price" id="price" type="text" placeholder="Price" />
        </div>
      </div>
    </div>
    {{-- Hidden --}}
    <input name="status" id="status" type="text" value="on progress" hidden/>
    <input name="bank" id="bank" type="text" value="Mandiri" hidden/>
    <input name="BAN" id="BAN" type="text" value="111-33-0927425-9" hidden/>
    
    <button class="btn btn-primary" type="submit">Submit</button>
  </form>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
  const durationSelect = document.getElementById('duration');
  const priceInput = document.getElementById('price');

  durationSelect.addEventListener('change', function () {
    // Mapping dari durasi ke harga
    const priceMap = {
      '1 hour': 'Rp50.000',
      '2 hours': 'RP100.000',
      '3 hours': 'RP150.000',
      '4 hours': 'RP200.000',
      '5 hours': 'RP250.000',
      '6 hours': 'RP300.000',
      '7 hours': 'RP350.000',
    };

    // Mengubah nilai input harga sesuai dengan durasi yang dipilih
    const selectedDuration = durationSelect.value;
    const selectedPrice = priceMap[selectedDuration] || ''; // Jika tidak ada durasi yang sesuai, biarkan kosong
    priceInput.value = selectedPrice;
  });
});

  </script>
@endsection
