@if(session()->has('success'))

    <div 
        x-data="{ show : true }"
        x-init="setTimeout(() => show = false, 5000)"
        x-show="show"
        class="position-fixed text-center alert-success"
    >
        <p>{{ session('success') }}</p>
    </div>
    
@endif