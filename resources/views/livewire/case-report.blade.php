<div class="p-6">
    <h2 class="text-2xl font-bold">New Case</h2>
    <div class="flex flex-wrap">
        <div class="w-full flex-auto flex-column p-2">
            <label class="block text-gray-700 text-sm font-bold mb-2">School</label>
            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="school_id">
                <option>-- Please Select --</option>
                @foreach($schools as $school)
                    <option value="{{$school->id}}">{{$school->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="w-full md:w-1/4 flex-auto flex-column p-2">
            <label class="block text-gray-700 text-sm font-bold mb-2">Student Positive</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" wire:model="student_positive" />
        </div>

        <div class="w-full md:w-1/4 flex-auto flex-column p-2">
            <label class="block text-gray-700 text-sm font-bold mb-2">Student Quarantine</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" wire:model="student_quarantine" />
        </div>

        <div class="w-full md:w-1/4 flex-auto flex-column p-2">
            <label class="block text-gray-700 text-sm font-bold mb-2">Staff Positive</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" wire:model="staff_positive" />
        </div>

        <div class="w-full md:w-1/4 flex-auto flex-column p-2">
            <label class="block text-gray-700 text-sm font-bold mb-2">Staff Quarantine</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" wire:model="staff_quarantine" />
        </div>

        <div class="w-full flex-column p-2">
            <label class="block text-gray-700 text-sm font-bold mb-2">Week</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" wire:model="week">
        </div>
    </div>
    <div class="flex p-2">
        <button class="px-6 py-2 flex items-center justify-center rounded-md bg-indigo-600 text-white font-bold" wire:click="save" wire:loading.attr="disabled">Save</button>
    </div>
</div>
