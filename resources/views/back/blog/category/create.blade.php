@extends('back.layout.app')
@section('content')
    <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

            <div>
                <h1>Create Category</h1>

            </div>
        <div class="form-row">
             <div class="form-group col-md-12">
                <label for="inputName">Category Name</label>
                <input type="text" name="name" value="{{old('name')}}" class="form-control" id="inputName">
                @error('name')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
             </div>

        </div>

        <div class="form-row">

            <div class="form-group col-md-12">
                <label for="inputDescription">Category Description</label>
                <textarea class="form-control" name="description" value="{{old('description')}}" id="inputDescription" rows="3"></textarea>
                @error('description')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-row">

            <div class="form-group col-md-12">
                <label for="parent">Parent Category</label>
                <select name="parent" id="parent" class="form-control">
                    <option selected value="">Select</option>
                    @foreach($categories as $category)
                        <option {{old('category') === $category->slug?'selected':''}} value="{{ $category->slug }}">{{ $category->name }}</option>
                    @endforeach

                </select>
            </div>
        </div>

        <div class="form-row">


            <div class="form-group col-md-6">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>
    </form>


@endsection
