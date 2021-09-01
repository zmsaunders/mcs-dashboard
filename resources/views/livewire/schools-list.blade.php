<div>
    <h2 class="text-center text-2xl font-bold mb-6 md:px-6 text-gray-800">District Data</h2>
    <div class="md:px-6">
        <table class="w-full bg-gray-100 text-center md:text-left">
            <thead class="text-center md:text-left">
                <tr>
                    <th class="text-left text-xs sm:text-base bg-gray-800 text-gray-100 md:rounded-tl p-2">School</th>
                    <th class="text-xs sm:text-base bg-gray-800 text-gray-100 p-2">Enrolled Students</th>
                    <th class="text-xs sm:text-base bg-gray-800 text-gray-100 md:rounded-tr p-2">Staff Total<sup>*</sup></th>
                </tr>
                <tbody>
                    @foreach($schools as $c => $school)
                        <tr class="{{($c%2 == 1) ? 'bg-gray-200' : ''}}">
                            <td class="text-left py-1 px-2">{{$school->name}}</td>
                            <td class="py-1 px-2">{{$school->student_total}}</td>
                            <td class="py-1 px-2">{{$school->staff_total}}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td class="text-left bg-gray-700 text-gray-50 rounded-bl p-2">Totals</td>
                        <td class="bg-gray-700 text-gray-50 p-2">{{$enrolled}}</td>
                        <td class="bg-gray-700 text-gray-50 rounded-br p-2">{{$employed}}</td>
                    </tr>
                </tbody>
            </thead>
        </table>
    </div>
    <p class="text-gray-700 text-xs px-6 py-2"><sup>*</sup>Staff total is based on names listed at <a href="https://miamisburgcityschools.org">miamisburgcityschools.org</a>.
</div>
