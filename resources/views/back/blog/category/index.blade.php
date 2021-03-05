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

            </tbody>
        </table>
@endsection
