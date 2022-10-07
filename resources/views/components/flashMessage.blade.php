@if (session('status'))
<div x-cloak class="bg-green-500 border p-4 relative rounded-md uk-alert"
x-data="{ show: false }" x-show="show" x-init="setTimeout(() => show = true, 700) ; setTimeout(() => show = false, 3000)"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90">
    <button class="uk-alert-close absolute bg-gray-100 bg-opacity-20 m-5 p-0.5 pb-0 right-0 rounded text-gray-200 text-xl top-0">
        <i class="icon-feather-x"></i>
    </button>
    <h3 class="text-lg font-semibold text-white">Notice</h3>
    <p class="text-white text-opacity-75">{{ session('status')}}</p>
</div>
@endif

@if (session('warning'))
<div x-cloak class="bg-orange-500 border p-4 relative rounded-md uk-alert"
x-data="{ show: false }" x-show="show" x-init="setTimeout(() => show = true, 700) ; setTimeout(() => show = false, 3000)"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90">
    <button class="uk-alert-close absolute bg-gray-100 bg-opacity-20 m-5 p-0.5 pb-0 right-0 rounded text-gray-200 text-xl top-0">
        <i class="icon-feather-x"></i>
    </button>
    <h3 class="text-lg font-semibold text-white">Notice</h3>
    <p class="text-white text-opacity-75">{{ session('warning')}}</p>
</div>
@endif

@if(session('error'))
<div x-cloak class="display:none;  bg-red-500 border p-4 relative rounded-md uk-alert" uk-alert=""
x-data="{ show: false }" x-show="show" x-init="setTimeout(() => show = true, 700) ; setTimeout(() => show = false, 3000)"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90">
    <button class="uk-alert-close absolute bg-gray-100 bg-opacity-20 m-5 p-0.5 pb-0 right-0 rounded text-gray-200 text-xl top-0">
        <i class="icon-feather-x"></i>
    </button>
    <h3 class="text-lg font-semibold text-white">Notice</h3>
    <p class="text-white text-opacity-75"> {{ session('error') }}</p>
</div>
@endif
