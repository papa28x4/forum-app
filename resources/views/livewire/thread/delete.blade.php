<div class="px-2 py-1 text-xs text-gray-500 transition duration-100 bg-red-300 rounded hover:bg-red-400">
    <a 
       class="cursor-pointer"  
       wire:click="confirmThreadDeletion"
       wire:loading.attr="disabled">
        Delete
    </a>

    <x-jet-dialog-modal wire:model='confirmingThreadDeletion'>
        <x-slot name="title">
            Delete Thread
        </x-slot>
        <x-slot name="content">
            Are you sure you want to delete thread?
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('confirmingThreadDeletion')" wire:loading.attr="disabled">
                Cancel
            </x-jet-secondary-button>

            <x-jet-danger-button wire:click="deleteThread" wire:loading.attr="disabled">
                Delete Thread
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
