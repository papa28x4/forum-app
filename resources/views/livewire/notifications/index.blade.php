<div class="overflow-hidden border-b border-gray-200">
    @if(count($notifications) > 0)
    <table class="min-w-full">
        <thead class="bg-blue-500">
            <tr>
                <x-table.head>Message</x-table.head>
                <x-table.head>Date</x-table.head>
                <x-table.head class="text-center">Action</x-table.head>
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-200 divide-solid">
            @foreach ($notifications as $notification)
            <tr>
                <x-table.data>
                    <div>
                        A new reply was add to
                        <a href="{{route('replies.replyable', [$notification->data['replyable_id'], $notification->data['replyable_type']])}}">
                            <b>
                                {{ $notification->data['replyable_subject']}}
                            </b>
                        </a>
                    </div>
                </x-table.data>
                <x-table.data>
                    <div>{{$notification->created_at->diffForHumans()}}</div>
                </x-table.data>
               
                <x-table.data class="text-center">
                    <x-jet-button wire:click="markAsRead('{{$notification->id}}')">
                        {{__('Mark As Read')}}
                    </x-jet-button>
                </x-table.data>
            </tr>
            @endforeach
           
        </tbody>

    </table>
    @else
    <div>
        You have no unread Notifications
    </div>
    @endif
</div>
