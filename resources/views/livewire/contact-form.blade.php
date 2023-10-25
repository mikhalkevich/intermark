<div class="p-6">
    <form class="flex flex-col" wire:submit.prevent="submit">
        <label for="name" class="block">
            <span class="text-gray-700">Name</span>
            <input type="text" id="name" wire:model="name" class="block w-full">
        </label>
        @error('name')
        <span class="text-sm text-red-700">{{$message}}</span>
        @enderror
        <label for="email" class="block">
            <span class="text-gray-700">Email</span>
            <input type="email" id="email" wire:model="email" class="block w-full">
        </label>
        @error('email')
        <span class="text-sm text-red-700">{{$message}}</span>
        @enderror
        <label for="phone" class="block">
            <span class="text-gray-700">Phone</span>
            <input type="text" id="phone" wire:model="phone" class="block w-full">
        </label>
        <label for="message">
            <span class="text-gray-700">Message</span>
            <textarea wire:model="message" class="block w-full" rows="3"></textarea>
        </label>
        @error('message')
        <span class="text-sm text-red-700">{{$message}}</span>
        @enderror
        <button class="m-4 p-2 border border-gray-100 rounded shadow hover:bg-gray-50">
            Send message
        </button>
    </form>
</div>
