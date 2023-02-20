@include('frontend/frontend-partials/header')

<div class="container py-3">

    <header>
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">

            <a href="{{ url('/') }}" class="d-flex align-items-center text-dark text-decoration-none">
                <img src="{{ asset('assets/img/book-store-50.png') }}" alt="Logo">
                <span class="fs-4">FLMS</span>
            </a>

            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <a class="me-3 py-2 text-dark text-decoration-none" href="#">Login</a>
                <a class="me-3 py-2 text-dark text-decoration-none" href="#">Advance Search</a>
                <a class="me-3 py-2 text-dark text-decoration-none" href="#">Category Clouds</a>
                <a class="py-2 text-dark text-decoration-none" href="#">Facts</a>
            </nav>

        </div>

    </header>

    <main>
    
    {{ $slot }}

    </main>

    <footer class="pt-4 border-top mt-4">
        <div class="row">      
            <div class="col-12 col-md text-center">
                Developed and Maintained by <a href="http://www.kadir.tech" target="_blank">Md. Abdul Kadir</a> 
                <br>
                Copyright &copy; {{ date('Y') }} <strong><span>Md. Abdul Kadir</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer>

</div>

@include('frontend/frontend-partials/footer')