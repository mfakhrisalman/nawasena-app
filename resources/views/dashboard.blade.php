@extends('layout.main')
@section('container')
<div class="row g-3 mb-3">
    <div class="col-xxl-12">
      <div class="row g-3 mb-3">
@can('admin')
        <div class="col-sm-6 col-md-4">
          <div class="card overflow-hidden" style="min-width: 12rem">
            <div class="bg-holder bg-card" style="background-image:url(../assets/img/icons/spot-illustrations/corner-1.png);">
                </div>
                <!--/.bg-holder-->
                <div class="card-body position-relative">
              <h6>Data Client</h6>
              <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-warning" data-countup='{"endValue":58.386,"decimalPlaces":2,"suffix":"k"}'>{{ $totalUsers }}</div>
              <a class="fw-semi-bold fs--1 text-nowrap" href="/client">See all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4">
          <div class="card overflow-hidden" style="min-width: 12rem">
            <div class="bg-holder bg-card" style="background-image:url(../assets/img/icons/spot-illustrations/corner-2.png);">
                </div>
                <!--/.bg-holder-->
                <div class="card-body position-relative">
              <h6>Data Project</h6>
              <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info" data-countup='{"endValue":23.434,"decimalPlaces":2,"suffix":"k"}'>{{ $totalProjects }}</div><a class="fw-semi-bold fs--1 text-nowrap" href="/project">All Project<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
            </div>
          </div>
        </div>
@endcan
        <div class="col-sm-6 col-md-4">
          <div class="card overflow-hidden" style="min-width: 12rem">
                <div class="bg-holder bg-card" style="background-image:url(../assets/img/icons/spot-illustrations/corner-3.png);">
                    </div>
                    <!--/.bg-holder-->
                    <div class="card-body position-relative">
                <h6>On Progress</h6>
                @can('admin')
                <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif" data-countup='{"endValue":43594,"prefix":"$"}'>{{ $totalOnProgressA }}</div><a class="fw-semi-bold fs--1 text-nowrap" href="/transaction">See all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                @else
                <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif" data-countup='{"endValue":43594,"prefix":"$"}'>{{ $totalOnProgress }}</div><a class="fw-semi-bold fs--1 text-nowrap" href="/transaction">See all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                @endcan
            </div>
          </div>
        </div>
      

        <div class="col-sm-6 col-md-4">
          <div class="card overflow-hidden" style="min-width: 12rem">
            <div class="bg-holder bg-card" style="background-image:url(../assets/img/icons/spot-illustrations/corner-4.png);">
                </div>
                <!--/.bg-holder-->
                <div class="card-body position-relative">
              <h6>Waiting For Payment</h6>
              @can('admin')
              <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-warning" data-countup='{"endValue":58.386,"decimalPlaces":2,"suffix":"k"}'>{{ $waitingForPaymentA }}</div>
              @else
              <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-warning" data-countup='{"endValue":58.386,"decimalPlaces":2,"suffix":"k"}'>{{ $waitingForPayment }}</div>
              @endcan
              <a class="fw-semi-bold fs--1 text-nowrap" href="/payment">See all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4">
          <div class="card overflow-hidden" style="min-width: 12rem">
            <div class="bg-holder bg-card" style="background-image:url(../assets/img/icons/spot-illustrations/corner-1.png);">
                </div>
                <!--/.bg-holder-->
                <div class="card-body position-relative">
              <h6>Waiting For Confirmation</h6>
              @can('admin')
              <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info" data-countup='{"endValue":23.434,"decimalPlaces":2,"suffix":"k"}'>{{ $waitingForConfirmationA }}</div><a class="fw-semi-bold fs--1 text-nowrap" href="/list-payment">See All<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
              @else
              <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info" data-countup='{"endValue":23.434,"decimalPlaces":2,"suffix":"k"}'>{{ $waitingForConfirmation }}</div><a class="fw-semi-bold fs--1 text-nowrap" href="/list-payment">See All<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
              @endcan
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4">
          <div class="card overflow-hidden" style="min-width: 12rem">
                <div class="bg-holder bg-card" style="background-image:url(../assets/img/icons/spot-illustrations/corner-5.png);">
                    </div>
                    <!--/.bg-holder-->
                    <div class="card-body position-relative">
                <h6>Verified</h6>
                @can('admin')
                <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif" data-countup='{"endValue":43594,"prefix":"$"}'>{{ $verifiedA }}</div><a class="fw-semi-bold fs--1 text-nowrap" href="/history">See all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                @else
                <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif" data-countup='{"endValue":43594,"prefix":"$"}'>{{ $verified }}</div><a class="fw-semi-bold fs--1 text-nowrap" href="/history">See all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                @endcan
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4">
          <div class="card overflow-hidden" style="min-width: 12rem">
            <div class="bg-holder bg-card" style="background-image:url(../assets/img/icons/spot-illustrations/corner-4.png);">
                </div>
                <!--/.bg-holder-->
                <div class="card-body position-relative">
              <h6>Not Verified</h6>
              @can('admin')
              <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-warning" data-countup='{"endValue":58.386,"decimalPlaces":2,"suffix":"k"}'>{{ $notVerifiedA }}</div>
              @else
              <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-warning" data-countup='{"endValue":58.386,"decimalPlaces":2,"suffix":"k"}'>{{ $notVerified }}</div>
              @endcan
              <a class="fw-semi-bold fs--1 text-nowrap" href="history">See all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4">
          <div class="card overflow-hidden" style="min-width: 12rem">
            <div class="bg-holder bg-card" style="background-image:url(../assets/img/icons/spot-illustrations/corner-5.png);">
                </div>
                <!--/.bg-holder-->
                <div class="card-body position-relative">
              <h6>Data Fail</h6>
              @can('admin')
              <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info" data-countup='{"endValue":23.434,"decimalPlaces":2,"suffix":"k"}'>{{ $failA }}</div><a class="fw-semi-bold fs--1 text-nowrap" href="/history">See All<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
              @else
              <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info" data-countup='{"endValue":23.434,"decimalPlaces":2,"suffix":"k"}'>{{ $fail }}</div><a class="fw-semi-bold fs--1 text-nowrap" href="/history">See All<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
              @endcan
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4">
          <div class="card overflow-hidden" style="min-width: 12rem">
                <div class="bg-holder bg-card" style="background-image:url(../assets/img/icons/spot-illustrations/corner-1.png);">
                    </div>
                    <!--/.bg-holder-->
                    <div class="card-body position-relative">
                <h6>History</h6>
                @can('admin')
                <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif" data-countup='{"endValue":43594,"prefix":"$"}'>{{ $historyA }}</div><a class="fw-semi-bold fs--1 text-nowrap" href="/history">See all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                @else
                <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif" data-countup='{"endValue":43594,"prefix":"$"}'>{{ $history }}</div><a class="fw-semi-bold fs--1 text-nowrap" href="/history">See all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                @endcan
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection