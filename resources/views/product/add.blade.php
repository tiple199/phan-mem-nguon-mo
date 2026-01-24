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
            <table>
                <tr>
                    <th>
                        Product
                    </th>
                    <th>
                        Price
                    </th>
                </tr>
                <tr>
                    <td><input type="text" name="name"></td>
                    <td><input type="text" name="price"></td>
                </tr>
            </table>
            <button type="submit">Add</button>
        </form>
    </div>
</body>
</html>