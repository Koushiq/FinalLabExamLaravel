<table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Field Name</th>
                    <th>Value</th>
                </tr>
            </thead>

            <tbody>
                @foreach($jobList as $job)

                <tr>
                    <td rowspan="4">{{ $job->id }}</td>
                    <td>Company</td>
                    <td>{{ $job->company }}</td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td>{{ $job->title }}</td>
                </tr>
                <tr>
                    <td>Location</td>
                    <td>{{ $job->location }}</td>
                </tr>
                <tr>
                    <td>Salary</td>
                    <td>${{ $job->salary }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>