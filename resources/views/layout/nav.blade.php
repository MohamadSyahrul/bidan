<div class="container-fluid py-1 px-3">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
      <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
      <li class="breadcrumb-item text-sm text-dark active" aria-current="page">@yield('title')</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">@yield('title')</h6>
  </nav>
  <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
      <div class="input-group">

      </div>
    </div>
    <ul class="navbar-nav  justify-content-end">
      <form method="POST" action="{{ route('logout') }}">
          @csrf
          <li class="nav-item d-flex align-items-center">
          <a href="{{route('logout')}}" onclick="event.preventDefault();
          this.closest('form').submit();"
          class="nav-link text-body font-weight-bold px-0">
              <i class="fa fa-user me-sm-1"></i>
              <span class="d-sm-inline d-none">Logout</span>
          </a>
          </li>
      </form>
      <li class="nav-item dropdown px-3 d-flex align-items-center">
        <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" x="0px"
            y="0px" viewBox="0 0 459.334 459.334" style="enable-background:new 0 0 459.334 459.334;" xml:space="preserve">
            <g>
              <g>
                <g>
                  <path d="M175.216,404.514c-0.001,0.12-0.009,0.239-0.009,0.359c0,30.078,24.383,54.461,54.461,54.461
                  s54.461-24.383,54.461-54.461c0-0.12-0.008-0.239-0.009-0.359H175.216z" />
                  <path d="M403.549,336.438l-49.015-72.002c0-22.041,0-75.898,0-89.83c0-60.581-43.144-111.079-100.381-122.459V24.485
                  C254.152,10.963,243.19,0,229.667,0s-24.485,10.963-24.485,24.485v27.663c-57.237,11.381-100.381,61.879-100.381,122.459
                  c0,23.716,0,76.084,0,89.83l-49.015,72.002c-5.163,7.584-5.709,17.401-1.419,25.511c4.29,8.11,12.712,13.182,21.887,13.182
                  H383.08c9.175,0,17.597-5.073,21.887-13.182C409.258,353.839,408.711,344.022,403.549,336.438z" />
                </g>
              </g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
          </svg>
        </a>
        <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
          @foreach(App\Models\PasienKB::with('dt_pasien')->where('tgl_kembali', date('Y-m-d', strtotime(date('Y-m-d') . '+1')))->get(); as $user)
            <li class="mb-2">
              <a class="dropdown-item border-radius-md" href="javascript:;">
                <div class="d-flex py-1">
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="text-sm font-weight-normal mb-1">
                      <span class="font-weight-bold">{{$user->dt_pasien->nama}}</span>
                    </h6>
                    <p class="text-xs text-secondary mb-0">
                      <i class="fa fa-clock me-1"></i>
                      {{$user->tgl_kembali}}
                    </p>
                  </div>
                </div>
              </a>
            </li>
          @endforeach
        </ul>
      </li>
    </ul>
  </div>
</div>
