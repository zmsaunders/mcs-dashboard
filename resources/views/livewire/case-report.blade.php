<div class="flex p-6">
    <button wire:click="showModal">New Case</button>
    <x-jet-confirmation-modal wire:model="createCase">
        <x-slot name="title">
            New Report
        </x-slot>
        <x-slot name="content">
            <div>
                <label>School</label>
                <select wire:model="school_id">
                    @foreach($schools as $school)
                        <option value="{{$school->id}}">{{$school->name}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label>Affected</label>
                <input type="text" wire:modal="affected" />
            </div>

            <div>
                <label>Case Group</label>
                <select wire:model="group">
                    <option value="staff">Staff</option>
                    <option value="students">Students</option>
                </select>
            </div>
            <div>
                <label>Case Type</label>
                <select wire:model="group">
                    <option value="positive">Positive</option>
                    <option value="quarantine">Quarantine</option>
                </select>
            </div>

            <div>
                <label>Week</label>
                <input type="date" wire:model="week">
            </div>
        </x-slot>
        <x-slot name="footer">
             <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                Cancel
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
                Delete Account
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
