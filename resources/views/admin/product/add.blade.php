@extends('layout.admin')
@section("content")
    <form action="/admin/product/store" method="post">
            @csrf
            <label for="">Category_id</label>
            <select name="category_id" id="">
                <option value="">Null</option>
                @foreach  ($categories as $c)
                    <option value="{{$c->id}}">{{$c->name}}</option>
                @endforeach
            </select>
            <br><br>
            <label for="">Name</label>
            <input type="text" name="name" > <br><br>
            <label for="">Price</label>
            <input type="text" name="price" > <br><br>
            <label for="">Sale_Price</label>
            <input type="text" name="sale_price" > <br><br>
            <label for="">Stock</label>
            <input type="text" name="stock" > <br><br>
            <label for="">Description</label>
            <input type="text" name="description" ><br> <br>
            <label for="">Image</label>
            <input type="text" name="image" > <br><br>
            
            <label for="">Is_Active</label>
            <input type="text" name="is_active"> <br><br>
            <label for="">Is_Delete</label>
            <input type="text" name="is_deleted"> <br><br>
            <button type="submit">Create</button>
        </form>
@endsection