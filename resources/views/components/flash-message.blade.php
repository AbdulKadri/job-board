@if(session()->has('success'))

    <div 
        x-data="{show: true}"
        x-init="setTimeout(() => show = false, 3000)"
        x-show="show"
        class="fixed z-10 top-3 left-1/2 transform -translate-x-1/2 bg-secondary text-white w-1/2 text-center py-3">
        <p class="w-full">{{ session('success') }}</p>
    </div>

@endif