<div>
    <table>
        <thead>
            <tr>
                <th>School</th>
                <th>Type</th>
                <th>Group</th>
                <th>Count</th>
                <th>Date</th>
            </tr>
            <tbody>
                @foreach($cases as $case)
                    <tr>
                        <td>{{$case->school->name}}</td>
                        <td>{{$case->type}}</td>
                        <td>{{$case->group}}</td>
                        <td>{{$case->affected}}</td>
                        <td>{{$case->week}}</td>
                    </tr>
                @endforeach
            </tbody>
        </thead>
    </table>
    <livewire:case-report />
</div>
