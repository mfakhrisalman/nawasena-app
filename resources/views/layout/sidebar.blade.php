<nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
        }
    </script>
    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">
            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
                data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span
                        class="toggle-line"></span></span></button>
        </div><a class="navbar-brand" href="/dashboard">
            <div class="d-flex align-items-center py-3"><img class="me-2" src="{{ asset('assets/img/logo.png') }}"
                    alt="" width="40" />
            </div>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
          
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
              
                <li class="nav-item">
                    <!-- parent pages--><a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}"
                        href="/dashboard" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-chart-pie"></span></span><span
                                class="nav-link-text ps-1">Dashboard</span>
                        </div>
                    </a>
                </li>
@can('admin')
                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">Data</div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                    <!-- parent pages-->
                    <a class="nav-link {{ Request::is('client*') ? 'active' : '' }}" href="/client" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center">
                          <span class="nav-link-icon">
                            <span class="fas fa-users"></span>
                          </span>
                          <span class="nav-link-text ps-1">Data Client</span>
                        </div>
                    </a>
                    <a class="nav-link {{ Request::is('project*') ? 'active' : '' }}" href="/project" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center">
                          <span class="nav-link-icon">
                            <span class="fab fa-stack-overflow"></span>
                          </span>
                          <span class="nav-link-text ps-1">Data Project</span>
                        </div>
                    </a>
                </li>
@endcan
                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">Transaction</div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                    <!-- parent pages-->
                    <a class="nav-link {{ Request::is('transaction/rent') ? 'active' : '' }}" href="/transaction/rent" type="button" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center">
                          <span class="nav-link-icon">
                            <span class="fas fa-video"></span>
                          </span>
                          <span class="nav-link-text ps-1">Rent Meet</span>
                        </div>
                    </a>
                    <a class="nav-link {{ Request::is('transaction') ? 'active' : '' }}" href="/transaction" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center">
                          <span class="nav-link-icon">
                            <span class="far fa-list-alt"></span>
                          </span>
                          <span class="nav-link-text ps-1">List Rents</span>
                        </div>
                    </a>

                    <a class="nav-link {{ Request::is('payment*') ? 'active' : '' }}" href="/payment" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center">
                          <span class="nav-link-icon">
                            <span class="fas fa-wallet"></span>
                          </span>
                          <span class="nav-link-text ps-1">Payment</span>
                        </div>
                    </a>
                    <a class="nav-link {{ Request::is('list-payment*') ? 'active' : '' }}" href="/list-payment" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center">
                          <span class="nav-link-icon">
                            <span class="fas fa-file-invoice-dollar"></span>
                          </span>
                          <span class="nav-link-text ps-1">List Payments</span>
                        </div>
                    </a>
                    <a class="nav-link {{ Request::is('history*') ? 'active' : '' }}" href="/history" role="button" aria-expanded="false">
                      <div class="d-flex align-items-center">
                        <span class="nav-link-icon">
                          <span class="fas fa-history"></span>
                        </span>
                        <span class="nav-link-text ps-1">History Rents</span>
                      </div>
                  </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
