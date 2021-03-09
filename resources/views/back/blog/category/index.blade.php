@extends('back.layout.app')
@section('content')
    <div class="col">
        <div align="right">
            <a href="{{route('category.create')}}" class="btn btn-primary">Add</a>

            <br>
            <br>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th colspan="2" scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$category->name}}</td>
                    <td>{{substr($category->description,0,30)}}</td>
                    <td>
                        <a href="{{route('category.edit',$category->slug)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('category.delete', $category->slug)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>

                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
@endsection
