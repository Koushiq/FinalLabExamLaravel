<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employer</title>
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
        <form method="post">
            @csrf
            <input type="hidden" name="id" value="{{$employer->id}}">
            <fieldset>
                <legend>Add New employer</legend>
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" value="{{old('username', $employer->username)}}"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            @error('username')
                            {{ $message }}
                            @enderror
                        </td>
                    </tr>

                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" value="{{old('password', $employer->password)}}"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            @error('password')
                            {{ $message }}
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name" value="{{old('name', $employer->name)}}"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            @error('name')
                            {{ $message }}
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Company</td>
                        <td><input type="text" name="company" value="{{old('company', $employer->company)}}"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            @error('company')
                            {{ $message }}
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Contact NO</td>
                        <td><input type="text" name="contactno" value="{{old('contactno', $employer->contactno)}}"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            @error('contactno')
                            {{ $message }}
                            @enderror
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2"><input type="submit" name="Addemployer" value="Update Employer"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
</body>

</html>