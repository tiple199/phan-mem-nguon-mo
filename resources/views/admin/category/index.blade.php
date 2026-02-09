@extends('layout.admin')
@section("content")
    <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Parent_Id</th>
                <th>Is_Active</th>
                <th>Id_Delete</th>
                <th>Action</th>
            </tr>
            @foreach  ($categories as $c)
                <tr>
                    <td>{{$c['id']}}</td>
                    <td>{{$c['name']}}</td>
                    <td>{{$c['description']}}</td>
                    <td>{{$c['image']}}</td>
                    <td>{{$c['parent_id']}}</td>
                    <td>{{$c['is_active']}}</td>
                    <td>{{$c['is_delete']}}</td>
                    <td style="display: flex; gap:10px;">
                        <a href="/admin/category/edit/{{$c['id']}}">update</a>
                        <form action="/admin/category/delete/{{$c['id']}}" method="POST">
                            @method('DELETE')
                            @csrf 
                        <button>delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
@endsection