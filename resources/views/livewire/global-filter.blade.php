<div class="sm:flex mt-4">
            <div class="w-full sm:w-1/2 flex-auto sm:pr-2">
                <label class="mr-4 text-gray-700 font-bold block mb-2 dark:text-gray-100">Show School</label>
                <select class="w-full bg-gray-50 py-2 px-4 w-full border-gray-200 outline-none dark:bg-gray-600 dark:border-gray-800 dark:text-gray-50 dark:focus:ring-2 dark:focus:ring-indigo-800 rounded" type="text" wire:model="school">
                    <option value="all">All Schools</option>
                    @foreach($schools as $school)
                        <option value="{{$school->id}}">{{$school->name}}</option>
                    @endforeach
                </select>
                @error('school') <span class="error text-sm text-red-600 dark:text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="w-full sm:w-1/2 flex-auto sm:pl-2">
                <label class="mr-4 text-gray-700 font-bold block mb-2 dark:text-gray-100">Show Week</label>
                <select class="w-full bg-gray-50 py-2 px-4 w-full border-gray-200 outline-none dark:bg-gray-600 dark:border-gray-800 dark:text-gray-50 dark:focus:ring-2 dark:focus:ring-indigo-800 rounded" type="text" wire:model="date">
                    @foreach($dates as $w => $date)
                        <option value="{{$w}}">{{$date}}</option>
                    @endforeach
                </select>
                @error('date') <span class="error text-sm text-red-600 dark:text-red-500">{{ $message }}</span> @enderror
            </div>
</div>
