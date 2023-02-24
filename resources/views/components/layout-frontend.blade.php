@include('frontend/frontend-partials/header')

<div class="container frontend-container px-5 py-3">

    <header class="align-items-center pb-3 mb-4 border-bottom">
        <div class="row">
            <div class="col-md-3 col-sm-12 text-center">
                <a href="{{ url('/') }}" class="d-flex align-items-center text-dark text-decoration-none" title="Family Library Management System">
                    <img src="{{ asset('assets/img/book-store-50.png') }}" alt="Logo">
                    <span class="fs-4">FLMS</span>
                </a>
            </div>
            <div class="col-md-9 col-sm-12 text-md-end text-sm-center">
                <nav class="d-inline-flex mt-2 mt-md-2 ms-md-auto main-navigation">
                    
                    <a class="me-3 py-2 text-dark text-decoration-none" href="{{ url('/') }}">মূলপাতা</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="{{ url('/advance-search') }}">এ্যাডভান্স সার্চ</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="{{ url('/category-clouds') }}">ক্যাটাগরী ক্লাউডস্‌</a>
                    <a class="py-2 text-dark text-decoration-none me-3" href="{{ url('/facts') }}">ফ্যাক্টস</a>

                    @if( !auth()->check() )  
                        <a class="me-3 py-2 text-dark text-decoration-none" href="{{ url('/login?refferer=/') }}">লগইন</a>
                        <a class="me-3 py-2 text-dark text-decoration-none" href="{{ url('/registration') }}">রেজিস্ট্রেশন</a>
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

                </nav>
            </div>
        </div>

    </header>

    <main>
    
    {{ $slot }}

    </main>

    <footer class="pt-4 border-top mt-4">
        <div class="row">
            <div class="col-12 mb-3 text-center">
                <div id="google_translate_element"></div>
            </div>      
            <div class="col-12 col-md text-center">
                Developed and Maintained by <a href="http://www.kadir.tech" target="_blank">Md. Abdul Kadir</a> 
                <br>
                Copyright &copy; {{ date('Y') }} <strong><span>Md. Abdul Kadir</span></strong>. All Rights Reserved.
            </div>
        </div>
    </footer>

</div>

@include('frontend/frontend-partials/footer')