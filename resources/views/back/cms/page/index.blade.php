@extends('back.layout.app')
@section('content')
    <div class="col">
        <div align="right">
            <a href="{{route('page.create')}}" class="btn btn-primary">Add</a>

<br>
            <br>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Title</th>
                <th scope="col">Meta Title</th>
                <th scope="col">Meta Description</th>
                <th colspan="2" scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pages as $page)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$page->title}}</td>
                    <td>{{$page->meta_title}}</td>
                    <td>{{substr($page->meta_description,0,30)}}</td>
                    <td>
                        <a href="{{route('page.edit',$page->slug)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>

                        <form action="{{route('page.delete', $page->slug)}}" method="POST">
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
