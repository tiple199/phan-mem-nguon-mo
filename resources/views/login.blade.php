<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/login" method="POST">
        @csrf
        <h1>Login</h1>
        <table>
            <tr>
                <td>
                    <label for="">username</label>
                    <input type="text" name="username">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">password</label>
                    <input type="password" name="password">
                </td>
            </tr>
            <tr><td><button>submit</button></td></tr>
        </table>
    </form>
</body>
</html>