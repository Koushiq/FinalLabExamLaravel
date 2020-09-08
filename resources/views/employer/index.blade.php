<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer</title>
</head>
<body>
    <div>
        <h1>welcome {{session('username')}}</h1>
        <a href="/">Home</a>
        <a href="/employer">Dashboard</a>
        <a href="/logout">logout</a>
    </div>
    <br>
    <br>
    <table>
        <tr>
            <td><a href="/employer/add-job">Add Job</a></td>
            <td><a href="/employer/all-job">All job</a></td>
        </tr>
    </table>
</body>
</html>