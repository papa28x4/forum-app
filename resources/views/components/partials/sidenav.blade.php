<aside class="col-span-1 space-y-6 text-gray-600">

    <div class="p-4 space-y-4 bg-white shadow">
        
        <div class="{{(auth()->user() && request()->routeIs('threads.show'))  ? 'pb-4 border-b border-gray-200' : '' }}">
        
            {{-- Start Discusson Button --}}
            <a href="{{ route('threads.create') }}" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition bg-blue-500 border border-transparent rounded hover:bg-blue-400 active:bg-blue-600 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25" }}>
                {{ __('Start a new discussion') }}
            </a>
        </div>

        @auth
            @if(request()->routeIs('threads.show'))
                <div class="pb-4 space-y-4">
                    {{-- Subscribe to thread button --}}
                    @can('unsubscribe', $thread)
                        <x-links.subscribe href="{{route('threads.unsubscribe', [$thread->category->slug(), $thread->slug()])}}" >
                            {{ __('Unsubscribe to Thread') }}
                        </x-links.subscribe>
                        <p class="text-sm text-gray-500">
                            Unsubscribe from this thread
                        </p>
                    @elsecan('subscribe', $thread)
                        <x-links.subscribe href="{{route('threads.subscribe', [$thread->category->slug(), $thread->slug()])}}" >
                            {{ __('Subscribe to Thread') }}
                        </x-links.subscribe>
                        <p class="text-sm text-gray-500">
                            Subscribe to be notified of changes to this thread.
                        </p>
                    @endcan
                    
                    {{-- <x-buttons.secondary>
                        {{ __('Subscribe to Thread') }}
                    </x-buttons.secondary>
                    <p class="text-sm text-gray-500">
                        Subscribe to be notified whenever changest to this thread.
                    </p> --}}
                </div>
            @endif
        @endauth
        
    </div>

    {{-- Categories --}}
    <div class="p-4 space-y-4 bg-white shadow">
        <div class="pb-4 mb-4 border-b border-gray-200">
            <h2 class="font-bold uppercase">Categories</h2>
        </div>

        <ul class="space-y-4">
            @foreach($categories as $category)
            <li>
                <a href="{{route('categories.category', $category->slug)}}"
                
                    class="cat-link flex items-center justify-between hover:text-blue-400 @if (route('categories.category', $category->slug) == url()->current()) active @endif">
                    {{$category->name}}
                    <span class="px-2 text-white bg-green-300 rounded">{{$category->threads_count}}</span>
                </a>
            </li>
            @endforeach
        </ul>
    </div>

    <div class="p-4 space-y-4 bg-white shadow">
        <ul class="space-y-4 text-gray-500">
            <li>
                <a href="{{route('threads.popular_all_time')}}" 
                class="cat-link flex items-center space-x-2 hover:text-blue-400 @if (route('threads.popular_all_time') == url()->current()) active @endif">
                    <x-heroicon-s-star class="w-5 h-5 text-yellow-500" />
                    <span>Popular this week</span>
                </a>
            </li>
            <li>
                <a href="{{route('threads.popular_this_week')}}" 
                class="cat-link flex items-center space-x-2 hover:text-blue-400 @if (route('threads.popular_this_week') == url()->current()) active @endif">
                    <x-heroicon-s-fire class="w-5 h-5 text-red-600" />
                    <span>Popular all time</span>
                </a>
            </li>
            <li>
                <a href="{{route('threads.no_reply')}}" 
                class="cat-link flex items-center space-x-2 hover:text-blue-400 @if (route('threads.no_reply') == url()->current()) active @endif">
                    <x-heroicon-s-chat class="w-5 h-5 text-blue-400" />
                    <span>No replies yet</span>
                </a>
            </li>
        </ul>
    </div>


</aside>
