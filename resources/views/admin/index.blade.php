<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <div>
        <h1>welcome {{session('username')}}</h1>
        <a href="/">Home</a>
        <a href="/admin">Dashboard</a>
        <a href="/logout">logout</a>
    </div>
    <br>
    <br>
    <table>
        <tr>
            <td><a href="/admin/add-employer">Add Employer</a></td>
            <td><a href="/admin/all-employer">All Employer</a></td>
        </tr>
    </table>
</body>
</html>