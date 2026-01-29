<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Xác nhận độ tuổi</h2>
    
    @if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif
    
    <form action="/handle-input-age" method="post">
        @csrf
        <label for="age">Nhập tuổi của bạn:</label>
        <input type="number" name="age" id="age" required min="1">
        <button type="submit">Xác nhận</button>
    </form>
</body>
</html>