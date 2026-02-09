<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm máy tính</title>
    
</head>
<body>
    <div>
        <form action="/product/store" method="post">
            @csrf
            <label for="">Name</label>
            <input type="text" name="name"> <br><br>
            <label for="">Description</label>
            <input type="text" name="description"><br> <br>
            <label for="">Price</label>
            <input type="text" name="price"> <br><br>
            <label for="">Stock</label>
            <input type="text" name="stock"> <br><br>
            <button type="submit">Add</button>
        </form>
    </div>
</body>
</html>