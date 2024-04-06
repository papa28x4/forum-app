<x-guest-layout>
    <main class="grid grid-cols-4 gap-8 mt-8 wrapper">

        <x-partials.sidenav :thread="$thread" />

        <section class="flex flex-col col-span-3 gap-y-4">

            <x-alerts.main />

            <small class="text-sm text-gray-400">
                <a href="{{route('threads.index')}}">Threads</a> > 
                <a href="">{{$category->name()}}</a> > 
               {{ $thread->title() }}
            </small>

            <article class="p-5 bg-white shadow">
                <div class="grid grid-cols-8">

                    {{-- Avatar --}}
                    <div class="col-span-1">
                        <x-user.avatar :user="$thread->author()" />
                    </div>

                    {{-- Thread --}}
                    <div class="col-span-7 space-y-6">
                        <div class="space-y-3">
                            <h2 class="text-xl tracking-wide hover:text-blue-400">{{ $thread->title() }}</h2>
                            <div class="text-gray-500">
                                {!! $thread->body() !!}
                            </div>
                        </div>

                        <div class="flex justify-between">

                            {{-- Likes --}}
                            <div class="flex space-x-5 text-gray-500">
                              <livewire:like-thread :thread="$thread" />
                            </div>

                             {{-- Views Count --}}
                             <div class="flex items-center space-x-2">
                                <x-heroicon-o-eye class="w-4 h-4 text-blue-300" />
                                <span class="text-xs text-gray-500">{{views($thread)->count()}}</span>
                            </div>

                            {{-- Date Posted --}}
                            <div class="flex items-center text-xs text-gray-500">
                                <x-heroicon-o-clock class="w-4 h-4 mr-1" />
                                {{ $thread->created_at->diffForHumans() }}
                            </div>


                            {{-- Reply --}}
                            <a href="" class="flex items-center space-x-2 text-gray-500">
                                <x-heroicon-o-reply class="w-5 h-5" />
                                <span class="text-sm">Reply</span>
                            </a>
                        </div>
                    </div>
                </div>
            </article>

            {{-- Replies --}}
            <div class="mt-3 space-y-5">

                <h2 class="text-sm font-bold uppercase">Replies</h2>
                <hr>
                @foreach ($thread->replies() as $reply)
                
                <livewire:reply.update :reply="$reply" :key="$reply->id()">
             
                @endforeach
            </div>
         
           

            @auth
            <div class="p-5 space-y-4 bg-white shadow">
                <h2 class="text-gray-500">Post a reply</h2>
                <x-form action="{{ route('replies.store') }}" >
                    <div>
                        {{-- <x-trix name="body" styling="bg-gray-100 shadow-inner h-40" /> --}}
                        <input type="text" name="body" class="w-full bg-gray-100 shadow-inner focus:ring-blue-400">
                        <x-form.error for="body" />

                        {{-- <input type="text" name="body" class="w-full bg-gray-200 
                        border-none shadow-inner focus:ring-blue-400" /> --}}
                        {{-- <x-form.error for="body" /> --}}

                        <input type="hidden" name="replyAble_id" value="{{$thread->id()}}" />
                        <x-form.error for="replyAble_id" />
                        <input type="hidden" name="replyAble_type" value="threads">
                        <x-form.error for="replyAble_type" />

                    </div>
                    <div class="flex mt-4" >
                        {{-- Button --}}
                        <x-buttons.primary  style="width:20%; justify-content: center; margin-left:auto">
                            {{__('Post')}}
                        </x-buttons.primary>
                    </div>
                </x-form>
                <x-form.error for="body" />
            </div>
            @else
            <div class="flex justify-between px-4 py-2 bg-blue-200">
                <h2>Please login to leave a comment</h2>
                <a href="{{route('login')}}">Login</a>
            </div>
            @endauth
        </section>
    </main>
</x-guest-layout>
