<div>
    <div class="max-w-7xl my-6 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden sm:rounded-lg p-6 flex justify-between">
            <div class="w-1/4 pb-4">
                <button class="rounded bg-indigo-700 hover:bg-indigo-900 text-indigo-100 font-bold px-6 py-2 w-1/3 md:w-60 my-6" wire:click="prevWeek">Previous</button>
            </div>
            <div class="w-1/4 pb-4">
                <label class="mr-4 text-gray-700 font-bold block mb-2 dark:text-gray-100">Date</label>
                <select class="bg-gray-50 py-2 px-4 w-full border-gray-200 outline-none dark:bg-gray-600 dark:border-gray-800 dark:text-gray-50 dark:focus:ring-2 dark:focus:ring-indigo-800 rounded" type="text" wire:model="date">
                    @foreach($dates as $date)
                        <option value="{{$date}}">{{$date}}</option>
                    @endforeach
                </select>
                @error('date') <span class="error text-sm text-red-600 dark:text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="w-1/4 pb-4">
                <label class="mr-4 text-gray-700 font-bold block mb-2 dark:text-gray-100">School</label>
                <select class="bg-gray-50 py-2 px-4 w-full border-gray-200 outline-none dark:bg-gray-600 dark:border-gray-800 dark:text-gray-50 dark:focus:ring-2 dark:focus:ring-indigo-800 rounded" type="text" wire:model="school">
                    <option value="all">All Schools</option>
                    @foreach($schools as $school)
                        <option value="{{$school->id}}">{{$school->name}}</option>
                    @endforeach
                </select>
                @error('school') <span class="error text-sm text-red-600 dark:text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="w-1/4 pb-4">
                <button class="rounded bg-indigo-700 hover:bg-indigo-900 text-indigo-100 font-bold px-6 py-2 w-1/3 md:w-60 my-6" wire:click="nextWeek">Next</button>
            </div>
        </div>
    </div>
</div>
