@if(session()->has('success'))
<div x-data="{
        open: true,
        animation: {
            ['x-transition:enter']: 'transition duration-500 transform ease-out',
            ['x-transition:enter-start']: 'opacity-1',
            ['x-transition:enter-end']: 'opacity-100',
            ['x-transition:leave']: 'transition duration-0',
            ['x-transition:leave-start']: 'opacity-100',
            ['x-transition:leave-end']: 'opacity-0',
        }
    }" 
        x-init="setTimeout(() => { open = false }, 5000)" x-show="open" 
        class="flex items-center p-2 mb-4 space-x-3 text-white bg-green-400"
>
    <x-zondicon-checkmark class="w-5 h-6" />
    <span>{{ session('success') }}</span>
</div>
@endif

@if(session()->has('error'))
<div x-data="{
        open: true,
        animation: {
            ['x-transition:enter']: 'transition duration-200 ease-in',
            ['x-transition:enter-start']: 'opacity-0',
            ['x-transition:enter-end']: 'opacity-100',
            ['x-transition:leave']: 'transition duration-0',
            ['x-transition:leave-start']: 'opacity-100',
            ['x-transition:leave-end']: 'opacity-0',
        }
    }"  
    x-init="setTimeout(() => { open = false }, 5000)" x-show="open" 
    class="flex items-center p-2 mb-4 space-x-3 text-white bg-red-400"
>

    <x-zondicon-exclamation-outline class="w-5 h-6" />
    <span>{{ session('error') }}</span>
</div>
@endif
