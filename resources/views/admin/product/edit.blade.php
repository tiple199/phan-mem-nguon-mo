@extends('layout.admin')
@section("content")
    <form action="/admin/product/update/{{$product->id}} " method="post">
            @method('PUT')
            @csrf
            <label for="">Category_id</label>
            <select name="category_id" id="">
                <option value="">Null</option>
                @foreach  ($categories as $c)
                    <option value="{{$c->id}}" 
                    @if($c->id == $product->category_id)
                        selected

                    @endif
                    >{{$c->name}}</option>
                @endforeach
            </select>
            <br><br>
            <label for="">Name</label>
            <input type="text" name="name" value={{$product->name}}> <br><br>
            <label for="">Price</label>
            <input type="text" name="price" value={{$product->price}}> <br><br>
            <label for="">Sale_Price</label>
            <input type="text" name="sale_price" value={{$product->sale_price}}> <br><br>
            <label for="">Stock</label>
            <input type="text" name="stock" value={{$product->stock}}> <br><br>
            <label for="">Description</label>
            <input type="text" name="description" value={{$product->description}}><br> <br>
            <label for="">Image</label>
            <input type="text" name="image" value={{$product->image}}> <br><br>
            
            <label for="">Is_Active</label>
            <input type="text" name="is_active" value={{$product->is_active}}> <br><br>
            <label for="">Is_Delete</label>
            <input type="text" name="is_deleted" value={{$product->is_delete}}> <br><br>
            <button type="submit">Save</button>
        </form>
@endsection