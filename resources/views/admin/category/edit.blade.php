@extends('layout.admin')
@section("content")
    <form action="/admin/category/update/{{$category->id}}" method="post">
            @method('PUT')
            @csrf
            <label for="">Name</label>
            <input type="text" name="name" value={{$category->name}}> <br><br>
            <label for="">Description</label>
            <input type="text" name="description" value={{$category->description}}><br> <br>
            <label for="">Image</label>
            <input type="text" name="image" value={{$category->image}}> <br><br>
            <label for="">Parent</label>
            
            <select name="parent_id" id="">
                <option value="">Null</option>
                @foreach  ($categories as $c)
                    <option value="{{$c->id}}" 
                    @if($c->id == $category->parent_id)
                        selected

                    @endif
                    >{{$c->name}}</option>
                @endforeach
            </select>
            <br> <br><br>
            <label for="">Is_Active</label>
            <input type="text" name="is_active" value={{$category->is_active}}> <br><br>
            <label for="">Is_Delete</label>
            <input type="text" name="is_delete" value={{$category->is_delete}}> <br><br>
            <button type="submit">Update</button>
        </form>
@endsection