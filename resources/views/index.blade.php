<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <title>Job Portal</title>
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
    <h1>Job Portal</h1>
    @if(session()->has('username'))
    <div>
        <h2>welcome {{session('username')}}</h2>
        @if(session()->get('type') == 'admin')
        <a href="/admin">Dashboard</a>
        @else
        <a href="/employer">Dashboard</a>
        @endif
        <a href="/logout">logout</a>
    </div>
    @else
    <a href="/login">login</a>
    @endif
    <br>
    <br>
    <div>
        <input type="text" placeholder="search job here..." id="sbox">
    </div>
    <br>
    <br>
    <div  id="list">
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

    </div>
    <script>
        $('#sbox').keyup(function () {
            $.ajax({
                url: '/search',
                method: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    key: $(this).val(),
                },
                success: function (data) {
                    $('#list').html(data);
                },
            });
        });
    </script>

</body>
</html>