<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Job</title>
</head>

<body>
    <div>
        <h1>Welcome {{session('username')}}</h1>
        <a href="/employer">Dashboard</a>
        <a href="/logout">logout</a>
    </div>
    <br>
    <br>
    <h4>Are you sure to remove below Job?</h4>
    <h3>ID: {{$job->id}}</h3>
    <h3>Title: {{$job->title}}</h3>

    <form method="post">
        @csrf
        <input type="hidden" name="id" value="{{$job->id}}">
        <button type="submit">Confirm</button>
    </form>
</body>

</html>