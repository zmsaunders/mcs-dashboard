<div class="card">
    <div class="card-inner">
        <div class="{{$class}} card-front">
            <h2 class="text-center text-lg font-bold mb-2 text-gray-800 dark:text-gray-400">{{$text}}
                    <span class="block text-xs font-regular text-gray-500">Weekly Total</span>
            </h2>
            @if($perc > $pperc)
                <p class="text-center text-red-600 text-4xl font-bold py-6">
                    {{$perc}}% <br>
                    <span class="text-xs dark:text-red-400 font-normal">Up from {{$pperc}}% previous week</span>
                </p>
            @elseif ($perc < $pperc)
                <p class="text-center text-green-600 text-4xl font-bold py-6">
                        {{$perc}}% <br/>
                        <span class="text-xs font-normal">Down from {{$pperc}}% previous week</span>
                </p>
            @else
                <p class="text-center text-indigo-600 dark:text-purple-400 text-4xl font-bold py-6">
                        {{$perc}}%<br />
                        <span class="text-xs font-normal">The same as previous week</span>
                </p>
            @endif
        </div>
        <div class="{{$class}} bg-indigo-700 dark:bg-purple-900 card-back">
            <h2 class="text-center text-lg font-bold mb-2 text-gray-200">{{$text}}
                    <span class="block text-xs font-regular text-gray-400">Weekly Total</span>
            </h2>
            <p class="text-center text-purple-100 text-2xl font-bold py-3">
                <span class="block">{{$current_total}}</span>
                <span class="block text-sm text-purple-200">Out of</span>
                <span class="block">{{$source}}</span>
            </p>
        </div>
    </div>
</div>
