<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Employers</title>
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
        <a href="/admin">Dashboard</a>
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
                @foreach($employerList as $employer)

                <tr>
                    <td rowspan="4">{{ $employer->id }}</td>
                    <td>username</td>
                    <td>{{ $employer->username }}</td>
                    <td rowspan="4"><a href="/admin/edit-employer/{{$employer->id}}">Edit</a> | <a href="/admin/delete-employer/{{$employer->id}}">Delete</a></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>{{ $employer->name }}</td>
                </tr>
                <tr>
                    <td>Company Name</td>
                    <td>{{ $employer->company }}</td>
                </tr>
                <tr>
                    <td>Contact No</td>
                    <td>{{ $employer->contactno }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</body>
</html>