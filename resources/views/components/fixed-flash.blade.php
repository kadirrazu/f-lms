<div class="fixed-alert">

    @if(session()->has('success'))
        <p class="alert alert-success" x-data="{ show : true }"
        x-init="setTimeout(() => show = false, 6000)"
        x-show="show">
            <i class="bi bi-check2-circle"></i>
            <span class="ml-5">{{ session('success') }}</span>
        </p>
    @endif

    @if(session()->has('error'))
        <p class="alert alert-danger" x-data="{ show : true }"
        x-init="setTimeout(() => show = false, 6000)"
        x-show="show">
            <i class="bi bi-x-circle"></i>
            <span class="ml-5">{{ session('error') }}</span>
        </p>
    @endif

    @if(session()->has('info'))
        <p class="alert alert-info" x-data="{ show : true }"
        x-init="setTimeout(() => show = false, 6000)"
        x-show="show">
            <i class="bi bi-exclamation-circle"></i>
            <span class="ml-5">{{ session('info') }}</span>
        </p>
    @endif

    @if(session()->has('warning'))
        <p class="alert alert-warning" x-data="{ show : true }"
        x-init="setTimeout(() => show = false, 6000)"
        x-show="show">
            <i class="bi bi-exclamation-diamond"></i>
            <span class="ml-5">{{ session('warning') }}</span>
        </p>
    @endif

</div>