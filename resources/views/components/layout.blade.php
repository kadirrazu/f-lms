@include('partials/header')

@include('partials/topbar')

@include('partials/sidebar')

<main id="main" class="main">
    
    {{ $slot }}

</main><!-- End #main -->

@include('partials/footer-credit')

@include('partials/footer')