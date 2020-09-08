<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Job</title>
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
        <form method="post">
            @csrf
            <input type="hidden" name="id" value="{{$job->id}}">
            <fieldset>
                <legend>Edit Job</legend>
                <table>
                <tr>
                        <td>Company Name</td>
                        <td>{{$job->company}}</td>
                    </tr>
                    <tr>
                        <td>Job Title</td>
                        <td><input type="title" name="title" value="{{old('title',$job->title)}}"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            @error('title')
                            {{ $message }}
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Location</td>
                        <td><input type="location" name="location" value="{{old('location',$job->location)}}"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            @error('location')
                            {{ $message }}
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Salary</td>
                        <td><input type="salary" name="salary" value="{{old('salary',$job->salary)}}"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            @error('salary')
                            {{ $message }}
                            @enderror
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2"><input type="submit" name="AddJob" value="Update Job"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
</body>

</html>