<div class="dark:bg-gray-800">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Students</th>
                <th>Staff</th>
            </tr>
        </thead>
        <tbody>
        @foreach($schools as $school)
            <tr>
                <td>{{$school->name}}</td>
                <td>{{$school->student_total}}</td>
                <td>{{$school->staff_total}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
