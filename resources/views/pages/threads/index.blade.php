<x-guest-layout>
    <main class="wrapper">
        <section class="grid grid-cols-4 gap-8 mt-8">
            {{-- Sidenavbar --}}
            <x-partials.sidenav />

            <div class="flex flex-col col-span-3 gap-y-4">
                {{-- Alerts --}}
                <x-alerts.main />

                @if(request()->routeIs('categories.category'))
                    <small class="text-sm text-gray-400 ">
                        <a href="{{route('threads.index')}}" class="hover:text-blue-400">Threads</a> > 
                        <span>Categories</span> >
                       
                        <span>{{$category->name}}</span>
                    </small>
                    
                    <livewire:thread.index :category_id="$category->id"/>
                @elseif(request()->routeIs('threads.index'))
                    <livewire:thread.index />
                @else
                    <livewire:thread.index :page_key="$pageKey"/>
                @endif
                
               
            </div>

        </section>
    </main>
</x-guest-layout>
