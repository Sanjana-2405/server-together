<h2>Volunteer List</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Skills</th>
            <th>Location</th>
            <th>Profile Link</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($volunteers as $volunteer)
            <tr>
                <td>{{ $volunteer->id }}</td>
                <td>{{ $volunteer->name }}</td>
                <td>{{ $volunteer->skills }}</td>
                <td>{{ $volunteer->location }}</td>
                <td><a href="{{ $volunteer->profile_link }}" target="_blank">View Profile</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
