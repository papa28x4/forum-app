<div class="flex items-center flex-grow">

    <div class="p-2 text-white bg-blue-200 border rounded-l">
        <x-heroicon-o-search class="w-6 h-6" />
    </div>
   
    <input type="search" wire:keyup.debounce.500ms="$emit('filterThread', $event.target.value)" class="w-full border-none rounded-r shadow-inner bg-blue-50 focus:ring-blue-200" placeholder="Search {{$scope}}">
</div>