@extends('layout.admin')
@section("content")
    <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Action</th>
            </tr>
            @foreach  ($products as $p)
                <tr>
                    <td>{{$p['id']}}</td>
                    <td>{{$p['name']}}</td>
                    <td>{{$p['description']}}</td>
                    <td>{{$p['price']}}</td>
                    <td>{{$p['stock']}}</td>
                    <td style="display: flex; gap:10px;">
                        <a href="/product/edit/{{$p['id']}}">update</a>
                        <form action="/product/delete/{{$p['id']}}" method="POST">
                            @method('DELETE')
                            @csrf 
                        <button>delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
@endsection