<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Jobs</title>
    <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 80%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 5px;
        }
    </style>
</head>
<body>
    <div>
        <h1>Welcome {{session('username')}}</h1>
        <a href="/employer">Dashboard</a>
        <a href="/logout">logout</a>
    </div>
    <br>
    <br>
    <div>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Field Name</th>
                    <th>Value</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach($jobList as $job)

                <tr>
                    <td rowspan="4">{{ $job->id }}</td>
                    <td>Company</td>
                    <td>{{ $job->company }}</td>
                    <td rowspan="4"><a href="/employer/edit-job/{{$job->id}}">Edit</a> | <a href="/employer/delete-job/{{$job->id}}">Delete</a></td>
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

    </div>

</body>
</html>