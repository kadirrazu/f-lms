@include('frontend/frontend-partials/header')

<div class="container frontend-container px-sm-3 px-md-5 py-3">

    <header class="align-items-center pb-3 mb-4 border-bottom">

        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary main-navigation">
            <div class="container-fluid p-0">
                <a href="{{ url('/') }}" class="navbar-brand" title="Family Library Management System">
                    <img src="{{ asset('assets/img/book-store-50.png') }}" alt="Logo">
                    <span class="fs-4">FLMS</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-end" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">মূলপাতা</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('advance-search') ? 'active' : '' }}" href="{{ url('/advance-search') }}">সার্চ এবং ফিল্টার</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('category-clouds') ? 'active' : '' }}" href="{{ url('/category-clouds') }}">ক্যাটাগরী ক্লাউডস্‌</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('latest-reads') ? 'active' : '' }}" href="{{ url('/latest-reads') }}">সর্বশেষ পঠিত বইসমূহ‌</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('facts') ? 'active' : '' }}" href="{{ url('/facts') }}">ফ্যাক্টস</a>
                        </li>

                        @if( !auth()->check() )

                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('login') ? 'active' : '' }}" href="{{ url('/login?refferer=/') }}">লগইন</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('registration') ? 'active' : '' }}" href="{{ url('/registration') }}">রেজিস্ট্রেশন</a>
                            </li>

                        @else
                            <div class="dropdown">
                                <button class="btn btn-light border-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    স্বাগতম, {{ auth()->user()->name_bn ?? auth()->user()->name }}
                                </button>
                                <ul class="dropdown-menu dr-align-right">
                                    @if( auth()->check() && auth()->user()->role == 'administrator' )
                                        <li>
                                            <a class="dropdown-item" href="{{ url('admin/dashboard') }}" target="_blank">
                                                <i class="bi bi-speedometer me-1"></i>
                                                এ্যাডমিন ড্যাশবোর্ড
                                            </a>
                                        </li>
                                    @endif
                                    <li>
                                        <a class="dropdown-item" href="{{ url('favourite-list') }}">
                                            <i class="bi bi-heart"></i>
                                            প্রিয় বইয়ের তালিকা
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ url('guest-logout?refferer=/') }}">
                                            <i class="bi bi-box-arrow-in-left me-1"></i>
                                            লগ আউট
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        @endif

                    </ul>
                </div>
            </div>
        </nav>
        <!-- End of Navigation Bar -->

    </header>

    <main>

    {{ $slot }}

    </main>

    <footer class="pt-4 border-top mt-4">
        <div class="row">
            <div class="col-12 col-md text-center py-3">

                Crafted in 2023 @ Chuadanga, Bangladesh by <a href="http://www.kadir.tech" target="_blank">Md. Abdul Kadir</a>

            </div>
        </div>
    </footer>

</div>

@include('frontend/frontend-partials/footer')
