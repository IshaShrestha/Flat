@extends('back.layout.app')
@section('content')

    <form action="{{route('page.update', $page->slug)}}" method="POST" enctype="multipart/form-data" id="settingform" style="margin-left: 80px;">
        <div>
            <h1>Edit Page</h1>
            <br>
        </div>
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputTitle">Title</label>
                <input type="text" value="{{old('title',$page->title)}}" name="title" class="form-control" id="inputTitle" placeholder="Title">
                @error('name')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="inputMetaTitle">Meta Title</label>
                <input type="text" value="{{old('meta_title',$page->meta_title)}}" name="meta_title" class="form-control" id="inputMetaTitle" placeholder="Meta Title">
                @error('meta_title')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputMetaDescription">Meta Description</label>
                <input type="text" value="{{old('meta_description',$page->meta_description)}}" name="meta_description" class="form-control" id="inputMetaDescription" placeholder="Meta Description">
                @error('meta_description')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="inputTags">Tags</label>
                <input type="text" value="{{old('tags',$page->tags)}}" name="tags" class="form-control" id="inputTags" placeholder="Tags">
                @error('tags')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <textarea class="description" name="description">{{old('description',$page->description)}}</textarea>
                <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
                <script>
                    tinymce.init({
                        selector:'textarea.description',
                        width: 753,
                        height: 300
                    });
                </script>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label class="switch">
                    <input type="checkbox" name="create_menu">
                    <span class="slider round"></span>
                </label>
            </div>

            <div class="form-group col-md-6">
                <label class="switch">
                    <input type="checkbox" name="publish">
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputMenuName">Menu Name</label>
                <input type="text" value="{{old('menu_name',$page->menu_name)}}" name="menu_name" class="form-control" id="inputMenuName" placeholder="Menu Name">
                @error('menu_name')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>


    </form>
@endsection
