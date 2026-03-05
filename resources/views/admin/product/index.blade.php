@extends('layout.admin')
@section("content")
    <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Category_id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Sale_price</th>
                <th>Stock</th>
                <th>Description</th>
                <th>Image</th>
                <th>Is_Active</th>
                <th>Id_Delete</th>
                <th>Action</th>
            </tr>
            @foreach  ($products as $p)
                <tr>
                    <td>{{$p['id']}}</td>
                    <th>{{$p['category_id']}}</th>
                    <td>{{$p['name']}}</td>
                    <td>{{$p['price']}}</td>
                    <td>{{$p['sale_price']}}</td>
                    <td>{{$p['stock']}}</td>
                    <td>{{$p['description']}}</td>
                    <td>{{$p['image']}}</td>
                    <td>{{$p['is_active']}}</td>
                    <td>{{$p['is_deleted']}}</td>
                    <td style="display: flex; gap:10px;">
                        <a href="/admin/product/edit/{{$p['id']}}">update</a>
                        <form action="/admin/product/delete/{{$p['id']}}" method="POST">
                            @method('PUT')
                            @csrf 
                        <button>delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
@endsection