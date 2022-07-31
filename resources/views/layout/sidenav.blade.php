<div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="https://demos.creative-tim.com/soft-ui-dashboard/pages/dashboard.html"
        target="_blank">
        <img src="{{asset('assets/img/logo-ct.png')}}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Bidan Bu Sri Wahyuni</span>
    </a>
</div>
<hr class="horizontal dark mt-0">
<div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="{{route('dashboard')}}">
                <div
                    class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>shop </title>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                    <g transform="translate(0.000000, 148.000000)">
                                        <path class="color-background opacity-6"
                                            d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z">
                                        </path>
                                        <path class="color-background"
                                            d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                                        </path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <span class="nav-link-text ms-1">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('data-pasien') ? 'active' : '' }}" href="{{route('data-pasien.index')}}">
                <div
                    class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>office</title>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                    <g id="office" transform="translate(153.000000, 2.000000)">
                                        <path class="color-background opacity-6"
                                            d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z">
                                        </path>
                                        <path class="color-background"
                                            d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z">
                                        </path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <span class="nav-link-text ms-1">Data Pasien</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('pasien-sakit') ? 'active' : '' }}"
                href="{{route('pasien-sakit.index')}}">
                <div
                    class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <svg width="12px" height="12px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>document</title>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                    <g transform="translate(154.000000, 300.000000)">
                                        <path class="color-background opacity-6"
                                            d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z">
                                        </path>
                                        <path class="color-background"
                                            d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
                                        </path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <span class="nav-link-text ms-1">Pasien Sakit</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('pasien-kb') ? 'active' : '' }}" href="{{route('pasien-kb.index')}}">
                <div
                    class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>customer-support</title>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                    <g transform="translate(1.000000, 0.000000)">
                                        <path class="color-background opacity-6"
                                            d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z">
                                        </path>
                                        <path class="color-background"
                                            d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z">
                                        </path>
                                        <path class="color-background"
                                            d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z">
                                        </path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <span class="nav-link-text ms-1">Pasien KB</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('pasien-bayi') ? 'active' : '' }}" href="{{route('pasien-bayi.index')}}">
                <div
                    class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <svg class="text-dark" width="16px" height="16px" viewBox="0 0 42 44" version="1.1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>basket</title>
                        <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Rounded-Icons" transform="translate(-1869.000000, -741.000000)" fill="#FFFFFF"
                                fill-rule="nonzero">
                                <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                    <g id="basket" transform="translate(153.000000, 450.000000)">
                                        <path class="color-background"
                                            d="M34.080375,13.125 L27.3748125,1.9490625 C27.1377583,1.53795093 26.6972449,1.28682264 26.222716,1.29218729 C25.748187,1.29772591 25.3135593,1.55890827 25.0860125,1.97535742 C24.8584658,2.39180657 24.8734447,2.89865282 25.1251875,3.3009375 L31.019625,13.125 L10.980375,13.125 L16.8748125,3.3009375 C17.1265553,2.89865282 17.1415342,2.39180657 16.9139875,1.97535742 C16.6864407,1.55890827 16.251813,1.29772591 15.777284,1.29218729 C15.3027551,1.28682264 14.8622417,1.53795093 14.6251875,1.9490625 L7.919625,13.125 L0,13.125 L0,18.375 L42,18.375 L42,13.125 L34.080375,13.125 Z"
                                            opacity="0.595377604"></path>
                                        <path class="color-background"
                                            d="M3.9375,21 L3.9375,38.0625 C3.9375,40.9619949 6.28800506,43.3125 9.1875,43.3125 L32.8125,43.3125 C35.7119949,43.3125 38.0625,40.9619949 38.0625,38.0625 L38.0625,21 L3.9375,21 Z M14.4375,36.75 L11.8125,36.75 L11.8125,26.25 L14.4375,26.25 L14.4375,36.75 Z M22.3125,36.75 L19.6875,36.75 L19.6875,26.25 L22.3125,26.25 L22.3125,36.75 Z M30.1875,36.75 L27.5625,36.75 L27.5625,26.25 L30.1875,26.25 L30.1875,36.75 Z">
                                        </path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <span class="nav-link-text ms-1">Pasien Bayi</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('pasien-hamil') ? 'active' : '' }}" href="{{route('pasien-hamil.index')}}">
                <div
                    class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <svg width="612px" height="612px" viewBox="-96 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M240 64c0 35.35-28.65 64-64 64s-64-28.65-64-64 28.65-64 64-64 64 28.65 64 64zm-11.29 201.23c10.56-10.89 28.13-13.03 39.98-2.92 13.46 11.48 14.16 32.1 2.1 44.55l-41.46 42.82a6.728 6.728 0 0 1-9.71 0l-41.47-42.82c-12.05-12.44-11.33-33.07 2.13-44.55 11.74-10.01 29.2-8.18 39.98 2.92l4.22 4.35 4.23-4.35zm-160.82-99.2L3.92 265.85c-7.24 11.37-4.17 26.64 6.86 34.11 11.03 7.46 25.85 4.3 33.09-7.07 18-28.08 35.99-56.17 53.98-84.25 5.72-8.93 11.58-13.04 17.81-13.7 1.93 12.19 3.78 24.35 5.12 36.77v23.71c-9.06 39.36-17.48 79.89-27.39 118.93-2.07 8.05-3.75 14.56 3.26 21.4 3.72 3.62 7.76 4.33 12.83 4.33L128 400v80c0 18.04 14.06 32 32 32h32c18.4-.08 32-13.68 32-32v-80h48c10.51 0 17.48-5.37 17.48-16.25v-16c22.1-16.37 32-36.75 32-64C321.48 247.61 288 224 256 208c-8.7-4.35-26.68-18.98-32-32-7.55-18.48-5.86-32-27.43-32h-75.79c-18.3 0-42.57 5.82-52.89 22.03z" />
                    </svg>

                </div>
                <span class="nav-link-text ms-1">Pasien Hamil</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('pasien-bersalin') ? 'active' : '' }}"
                href="{{route('pasien-bersalin.index')}}">
                <div
                    class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                        style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M400.211,184.297l-48.776-19.884c-6.027,6.013-13.815,9.802-22.232,10.85c-12.146,1.511-42.795,5.327-53.936,6.714
			c3.93,6.6,10.691,11.216,18.76,12.19c1.132,0.252-4.78-0.913,29.841,5.849l3.989,38.247c0.897,8.609,8.601,14.885,17.242,13.986
			c8.625-0.899,14.886-8.619,13.986-17.242l-3.656-35.054l32.925,13.423c8.031,3.275,17.192-0.584,20.465-8.611
			C412.095,196.732,408.24,187.57,400.211,184.297z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <circle cx="343.472" cy="34.851" r="31.1" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M394.62,107.822l-16.189-5.476l11.741-2.939c8.411-2.106,13.524-10.631,11.419-19.041
			c-2.106-8.412-10.634-13.519-19.041-11.419l-49.305,12.34c-2.707-2.347-5.951-4.159-9.622-5.21
			c-13.461-3.856-27.486,3.938-31.337,17.394l-2.791,9.755c10.015-1.244,20.069-2.497,30.272-3.767
			c11.636-1.449,22.694,2.504,30.674,9.892c5.743,5.316,9.881,12.412,11.493,20.562l22.625,7.652
			c8.229,2.781,17.128-1.64,19.902-9.842C407.24,119.511,402.833,110.599,394.62,107.822z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M343.416,134.848c-1.388-10.455-10.991-17.805-21.443-16.418l-74.14,9.84l-56.065-20.052l44.672,2.805
			c-4.868-6.776-12.792-11.085-21.57-11.085c-16.335,0-27.825,0-45.955,0c-12.711,0-23.594,8.969-26.061,21.437l-40.621,205.232
			c-1.387,7.008,4.01,13.501,11.081,13.501c6.482,0,14.898,0,24.513,0V487.6c0,13.476,10.924,24.4,24.4,24.4
			c13.476,0,24.4-10.923,24.4-24.4V340.108c3.509,0,7.027,0,10.536,0V487.6c0,13.476,10.924,24.4,24.4,24.4
			c13.476,0,24.4-10.923,24.4-24.4V340.108c9.617,0,18.033,0,24.513,0c7.11,0,12.466-6.504,11.081-13.501l-28.09-141.917
			l-11.968,1.425c-6.53,0.777-13.099-1.091-18.242-5.191l-47.522-37.879l63.596,22.745c2.759,0.987,5.82,1.363,8.943,0.949
			l78.726-10.447C337.452,154.903,344.802,145.303,343.416,134.848z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <circle cx="191.893" cy="42.141" r="42.141" />
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

                </div>
                <span class="nav-link-text ms-1">Pasien Bersalin</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('pasien-bersalin') ? 'active' : '' }}" href="{{url('laporan')}}">
                <div
                    class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>credit-card</title>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                    <g transform="translate(453.000000, 454.000000)">
                                        <path class="color-background opacity-6"
                                            d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z">
                                        </path>
                                        <path class="color-background"
                                            d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                        </path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>

                <span class="nav-link-text ms-1">Laporan</span>
            </a>
        </li>
    </ul>
</div>
