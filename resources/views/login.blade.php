<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="post">
        @csrf
        <table>
            <tr>
                <td>username</td>
                <td><input type="text" name="username" id=""></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="password" name="password" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="submit" id="">Login</button></td>
            </tr>
        </table>
    </form>
</body>
</html>