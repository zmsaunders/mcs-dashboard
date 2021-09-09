<div>
    <p class="text-sm text-center sm:text-right font-bold py-2 text-gray-600 dark:text-gray-100">Modify Timeframe</p>
    <div class="text-center grid grid-cols-2 gap-4 md:grid-cols-4 sm:block sm:text-right">
        <a class="text-sm cursor-pointer inline-block p-1 px-3 rounded border-2 border-indigo-700
            {{$weeks == 4 ? 'bg-white dark:text-indigo-100 dark:bg-gray-800 text-indigo-700' : 'bg-indigo-700 text-indigo-100'}}"
            wire:click="setWeek(4)">One Month</a>
        <a class="text-sm cursor-pointer inline-block p-1 px-3 rounded border-2 border-indigo-700
            {{$weeks == 12 ? 'bg-white dark:text-indigo-100 dark:bg-gray-800  text-indigo-700' : 'bg-indigo-700 text-indigo-100'}}"
            wire:click="setWeek(12)">Three Months</a>
        <a class="text-sm cursor-pointer inline-block p-1 px-3 rounded border-2 border-indigo-700
            {{$weeks == 26 ? 'bg-white dark:text-indigo-100 dark:bg-gray-800  text-indigo-700' : 'bg-indigo-700 text-indigo-100'}}"
            wire:click="setWeek(26)">Six Months</a>
        <a class="text-sm cursor-pointer inline-block p-1 px-3 rounded border-2 border-indigo-700
            {{$weeks == 52 ? 'bg-white dark:text-indigo-100 dark:bg-gray-800  text-indigo-700' : 'bg-indigo-700 text-indigo-100'}}"
            wire:click="setWeek(52)">One Year</a>
        <a class="text-sm cursor-pointer inline-block p-1 px-3 rounded border-2 border-indigo-700
            {{$weeks == 104 ? 'bg-white dark:text-indigo-100 dark:bg-gray-800  text-indigo-700' : 'bg-indigo-700 text-indigo-100'}}"
            wire:click="setWeek(104)">Two Years</a>
    </div>
</div>
