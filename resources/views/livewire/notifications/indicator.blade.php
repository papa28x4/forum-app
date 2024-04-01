<a href="{{ route('dashboard.notifications.index') }}" class="relative w-8">
    @if($hasNotifications)
        <div class="relative flex items-center justify-center w-6 h-6">
            <span class="absolute inline-flex w-full h-full bg-blue-400 rounded-full opacity-75 animate-ping">
               
            </span>
            <span class="relative inline-flex w-4 h-4 text-blue-400 rounded-full">
                <x-zondicon-notifications-outline />
            </span>
            <span class="absolute top-0 right-0 px-1 text-xs text-white bg-blue-500 rounded-full"
            style="height: 13px;  width: 13px; line-height: 0.75rem; font-size: 8px;">
                <livewire:notifications.count>
            </span>
        </div>
    @else
    <span class="relative inline-flex w-4 h-4 text-grey-100 rounded-full">
        <x-zondicon-notifications-outline />
    </span>
    @endif
</a>

