<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Register</h1>
    <form action="/checkRegister" method="POST">
        @csrf
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
            <tr>
                <td>
                    <label for="">repass</label>
                    <input type="password" name="repass">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">mssv</label>
                    <input type="password" name="mssv">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">lopmonhoc</label>
                    <input type="password" name="lopmonhoc">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">gioitinh</label>
                    <input type="password" name="gioitinh">
                </td>
            </tr>
            <tr><td><button>Register</button></td></tr>
        </table>
    </form>
</body>
</html>