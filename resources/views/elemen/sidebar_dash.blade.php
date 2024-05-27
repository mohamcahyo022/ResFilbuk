  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="/" target="_blank">
      <i class="bi bi-pen"></i>
        <img src="{{ asset('img/logo/logo-1.png') }}" class="navbar-brand-img h-200" alt="main_logo">
        <span class="ms-1 font-weight-bold">ResFilbuk</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " href="/admin">
              {{-- <a class="nav-link " href="/admin">  --}}
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Dashboard</span>
              </a>
            </li>
        <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/buat-film-store">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1"> Post Film</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/buat-buku-store">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Post Buku</span>
            </a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="/kelola-film-admin">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Kelola Resensi Film</span>
          </a>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="/kelola-buku-admin">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Kelola Resensi Buku</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/kelola-perpus">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Kelola Buku</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/kelola-movie">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Kelola Film</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/kelola-user">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Kelola User</span>
            </a>
          </li>

      </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
      <a class="btn btn-primary btn-sm mb-0 w-100" href="/logout" type="button">Logout</a>
    </div>
  </aside>

