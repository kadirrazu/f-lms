<h2>Welcome to frontend! Still cooking...</h2>

<hr>

@if( auth()->check() && auth()->user()->role == 'user' )
<a class="dropdown-item d-flex align-items-center" href="{{ url('guest-logout') }}">
    <i class="bi bi-box-arrow-right"></i>
    <span>Sign Out</span>
</a>
@endif