@component('mail::message')
**{{$thread->author()->name}}** has created a new thread,  *{{$thread->title()}}*


@component('mail::panel')
    <p style="word-wrap: break-word;">{{$thread->excerpt(200)}}</p>
@endcomponent

@component('mail::button', ['url' => route('threads.show',
         ['category' => $thread->category->slug(), 'thread' =>$thread->slug()])])
         View Thread
@endcomponent
    
Thanks,

Forum Team
@endcomponent