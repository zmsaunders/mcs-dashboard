<div class="max-w-7xl my-6 mx-auto sm:px-6 lg:px-8">
    <div class="container mx-auto max-w-lg p-6 md:p-0">
        @if (!$complete && !$show)
        <button class="w-full dark:bg-gray-800 dark:hover:bg-gray-600 bg-gray-600 text-gray-200 rounded py-4 mt-6 px-1 hover:shadow-lg hover:bg-gray-900 transition duration-200" wire:click="show">Questions / Contact</button>
        @elseif (!$complete && $show)
        <h2 class="text-2xl font-bold py-2 dark:text-gray-100">Send me a message</h2>
        <p class="text-sm pt-3 pb-6 dark:text-gray-100">Look, I built this in my free time to try to help out the community. If you have questions or concerns, I'm happy to hear them and will respond to you. If you just want to complain, <a class="text-indigo-700 dark:text-indigo-500" href="https://www.youtube.com/watch?v=tSN4EFQOfQg">be nice about it.</a></p>
        <div class="pb-4">
            <label class="mr-4 text-gray-700 font-bold block mb-2 dark:text-gray-100">Name</label>
            <input class="bg-gray-50 py-2 px-4 w-full border-gray-200 outline-none dark:bg-gray-600 dark:border-gray-800 dark:text-gray-50 dark:focus:ring-2 dark:focus:ring-indigo-800 rounded" type="text" wire:model="name" />
            @error('name') <span class="error text-sm text-red-600 dark:text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="pb-4">
            <label class="mr-4 text-gray-700 font-bold block mb-2 dark:text-gray-100">Email</label>
            <input class="bg-gray-50 py-2 px-4 w-full border-gray-200 outline-none dark:bg-gray-600 dark:border-gray-800 dark:text-gray-50 dark:focus:ring-2 dark:focus:ring-indigo-800 rounded" type="text" wire:model="email" />
            @error('email') <span class="error text-sm text-red-600 dark:text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="companyform">
            <label class="mr-4 text-gray-700 font-bold block mb-2 dark:text-gray-100">Company</label>
            <input class="bg-gray-50 py-2 px-4 w-full border-gray-200 outline-none dark:bg-gray-600 dark:border-gray-800 dark:text-gray-50 dark:focus:ring-2 dark:focus:ring-indigo-800 rounded" type="text" wire:model="company"></input>
            @error('company') <span class="error text-sm text-red-600 dark:text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="pb-4">
            <label class="mr-4 text-gray-700 font-bold block mb-2 dark:text-gray-100">Message</label>
            <textarea class="bg-gray-50 py-2 px-4 w-full border-gray-200 outline-none dark:bg-gray-600 dark:border-gray-800 dark:text-gray-50 dark:focus:ring-2 dark:focus:ring-indigo-800 rounded" type="text" wire:model="message"></textarea>
            @error('message') <span class="error text-sm text-red-600 dark:text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="">
            <button class="w-full bg-gray-600 text-gray-200 rounded py-4 px-1 hover:shadow-lg hover:bg-gray-900 transition duration-200 dark:bg-green-600 dark:hover:bg-green-800" wire:loading.class="bg-gray-300 hover:bg-gray-300" wire:loading.attr="disabled" wire:click="send">Send</button>
        </div>
    @else
        <h2 class="text-2xl font-bold py-2 dark:text-gray-100">Send me a message</h2>
        <p class="text-green-600 dark:text-green-300">Thanks. I'll follow up with you shortly.</p>
    @endif
    </div>
</div>
