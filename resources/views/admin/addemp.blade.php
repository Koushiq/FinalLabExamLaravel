<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employer</title>
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
            <fieldset>
                <legend>Add New Employer</legend>
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" value="{{old('username')}}"></td>
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
                        <td><input type="password" name="password" value="{{old('password')}}"></td>
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
                        <td><input type="text" name="name" value="{{old('name')}}"></td>
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
                        <td>Contact No.</td>
                        <td><input type="text" name="contactno" value="{{old('contactno')}}"></td>
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
                        <td>Comapny</td>
                        <td><input type="text" name="company" value="{{old('company')}}"></td>
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
                        <td colspan="2"><input type="submit" name="AddEmployer" value="Add Employer"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
</body>

</html>