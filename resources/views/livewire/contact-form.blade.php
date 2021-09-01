<div class="max-w-7xl my-6 mx-auto sm:px-6 lg:px-8">
    <div class="container mx-auto max-w-lg p-6 md:p-0">
        @if (!$complete && !$show)
        <button class="w-full bg-gray-600 text-gray-200 rounded py-4 px-1 hover:shadow-lg hover:bg-gray-900 transition duration-200" wire:click="show">Questions / Contact</button>
        @elseif (!$complete && $show)
        <h2 class="text-2xl font-bold py-2">Send me a message</h2>
        <p class="text-sm pt-3 pb-6">Look, I built this in my free time to try to help out the community. If you have questions or concerns, I'm happy to hear them and will respond to you. If you just want to complain, <a class="text-indigo-700" href="https://www.youtube.com/watch?v=tSN4EFQOfQg">be nice about it.</a></p>
        <div class="pb-4">
            <label class="mr-4 text-gray-700 font-bold block mb-2">Name</label>
            <input class="bg-gray-50 py-2 px-4 w-full border-gray-200 outline-none focus:ring-2 focus:ring-indigo-400 rounded" type="text" wire:model="name" />
            @error('name') <span class="error text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="pb-4">
            <label class="mr-4 text-gray-700 font-bold block mb-2">Email</label>
            <input class="bg-gray-50 py-2 px-4 w-full border-gray-200 outline-none focus:ring-2 focus:ring-indigo-400 rounded" type="email" wire:model="email" />
            @error('email') <span class="error text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="companyform">
            <label class="mr-4 text-gray-700 font-bold block mb-2">Company</label>
            <textarea class="bg-gray-50 py-2 px-4 w-full border-gray-200 outline-none focus:ring-2 focus:ring-indigo-400 rounded" type="text" wire:model="company"></textarea>
            @error('company') <span class="error text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="pb-4">
            <label class="mr-4 text-gray-700 font-bold block mb-2">Message</label>
            <textarea class="bg-gray-50 py-2 px-4 w-full border-gray-200 outline-none focus:ring-2 focus:ring-indigo-400 rounded" type="text" wire:model="message"></textarea>
            @error('message') <span class="error text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="">
            <button class="w-full bg-gray-600 text-gray-200 rounded py-4 px-1 hover:shadow-lg hover:bg-gray-900 transition duration-200" wire:loading.class="bg-gray-300" wire:loading.attr="disabled" wire:click="send">Send</button>
        </div>
    @else
        <h2 class="text-2xl font-bold py-2">Send me a message</h2>
        <p class="text-green-600">Thanks. I'll follow up with you shortly.</p>
    @endif
    </div>
</div>
