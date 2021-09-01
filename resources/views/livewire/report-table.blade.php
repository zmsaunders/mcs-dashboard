<div>
    <h2 class="text-center text-2xl font-bold mb-6 md:px-6 text-gray-800">Data for week of {{date('m / d / y', strtotime($this->week))}}</h2>
    @if ($cases->count() == 0)
        <p class="text-center">No report was provided for the week of {{date('m / d / y', strtotime($this->week))}}.</p>
    @else
    <div class="md:px-6">
        <table class="w-full bg-gray-100 text-center md:text-left">
            <thead class="text-center md:text-left">
                <tr>
                    <th class="text-xs sm:text-base text-left bg-gray-800 text-gray-100 md:rounded-tl p-2">School</th>
                    <th class="text-xs sm:text-base bg-gray-800 text-gray-100 p-2">Students Positive</th>
                    <th class="text-xs sm:text-base bg-gray-800 text-gray-100 p-2">Students Quarantined</th>
                    <th class="text-xs sm:text-base bg-gray-800 text-gray-100 p-2">Staff Positive</th>
                    <th class="text-xs sm:text-base bg-gray-800 text-gray-100 md:rounded-tr p-2">Staff Quarantined</th>
                </tr>
                <tbody>
                    @foreach($cases as $c => $case)
                        <tr class="{{($c%2 == 1) ? 'bg-gray-200' : ''}}">
                            <td class="text-left py-1 px-2">{{$case->school->name}}</td>
                            <td class="py-1 px-2">
                                {{(string) $case->student_positive}}
                                <span class="text-xs text-purple-500 block md:inline">
                                    {{round((float) ($case->student_positive / $case->school->student_total) * 100, 2)}}%
                                </span>
                            </td>
                            <td class="py-1 px-2">
                                {{(string) $case->student_quarantine}}
                                <span class="text-xs text-purple-500 block md:inline">
                                    {{round((float) ($case->student_quarantine / $case->school->student_total) * 100, 2)}}%
                                </span>
                            </td>
                            <td class="py-1 px-2">
                                {{(string) $case->staff_positive}}
                                <span class="text-xs text-purple-500 block md:inline">
                                    {{round((float) ($case->staff_positive / $case->school->student_total) * 100, 2)}}%
                                </span>
                            </td>
                            <td class="py-1 px-2">
                                {{(string) $case->staff_quarantine}}
                                <span class="text-xs text-purple-500 block md:inline">
                                    {{round((float) ($case->staff_quarantine / $case->school->student_total) * 100, 2)}}%
                                </span>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td class="text-left bg-gray-700 text-gray-50 md:rounded-bl p-2">Totals</td>
                        <td class="bg-gray-700 text-gray-50 p-2">
                            {{(string) $totals['stup']}}
                            <span class="text-xs text-purple-100 block md:inline">
                                {{round((float) ($totals['stup'] / $totals['enrolled']) * 100, 2)}}%
                            </span>
                        </td>
                        <td class="bg-gray-700 text-gray-50 p-2">
                            {{(string) $totals['stuq']}}
                            <span class="text-xs text-purple-100 block md:inline">
                                {{round((float) ($totals['stuq'] / $totals['enrolled']) * 100, 2)}}%
                            </span>
                        </td>
                        <td class="bg-gray-700 text-gray-50 p-2">
                            {{(string) $totals['stap']}}
                            <span class="text-xs text-purple-100 block md:inline">
                                {{round((float) ($totals['stap'] / $totals['employed']) * 100, 2)}}%
                            </span>
                        </td>
                        <td class="bg-gray-700 text-gray-50 md:rounded-br p-2">
                            {{(string) $totals['staq']}}
                            <span class="text-xs text-purple-100 block md:inline">
                                {{round((float) ($totals['staq'] / $totals['employed']) * 100, 2)}}%
                            </span>
                        </td>
                    </tr>
                </tbody>
            </thead>
        </table>
    </div>
    <p class="text-gray-700 text-xs py-2 px-6">Note: Percentages are # of cases / # of students enrolled at school, or # of cases / # of staff as reported on <a href="https://miamisburgcityschools.org">miamisburgcityschools.org</a>.
    @endif
    <div class="flex justify-between px-6">
        <button class="rounded bg-indigo-700 hover:bg-indigo-900 text-indigo-100 font-bold px-6 py-2 w-1/3 md:w-60 my-6" wire:click="prevWeek">Previous</button>
        <button class="rounded bg-indigo-700 hover:bg-indigo-900 text-indigo-100 font-bold px-6 py-2 w-1/3 md:w-60 my-6" wire:click="nextWeek">Next</button>
    </div>
</div>
