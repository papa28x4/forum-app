<div class="flex flex-col col-span-3 gap-y-4">
    
    @foreach ($threads as $thread)
        <x-thread :thread="$thread"/>
    @endforeach

    {{-- Pagination --}}
    <div class="mt-8" id="pagination">
    {{$threads->render()}}
    </div>
</div>

