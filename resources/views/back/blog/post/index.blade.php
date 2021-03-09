@extends('back.layout.app')
@section('content')
    <div class="col">
        <div align="right">
            <a href="{{route('post.create')}}" class="btn btn-primary">Add</a>

            <br>
            <br>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th colspan="2" scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{substr($post->description,0,30)}}</td>
                    <td>
                        <a href="{{route('post.edit',$post->url_slug)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('post.delete', $post->url_slug)}}" method="post">
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
