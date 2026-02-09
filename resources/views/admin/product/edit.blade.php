<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/product/update/{{$product->id}}" method="post">
            @method('PUT')
            @csrf
            <label for="">Name</label>
            <input type="text" name="name" value={{$product->name}}> <br><br>
            <label for="">Description</label>
            <input type="text" name="description" value={{$product->description}}><br> <br>
            <label for="">Price</label>
            <input type="text" name="price" value={{$product->price}}> <br><br>
            <label for="">Stock</label>
            <input type="text" name="stock" value={{$product->stock}}> <br><br>
            <button type="submit">Update</button>
        </form>
</body>
</html>