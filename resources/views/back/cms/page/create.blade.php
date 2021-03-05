@extends('back.layout.app')
@section('content')

    <form action="{{route('page.store')}}" method="POST" enctype="multipart/form-data" id="settingform" style="margin-left: 80px;">
        <div>
            <h1>Create Page</h1>
            <br>
        </div>
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputTitle">Title</label>
                <input type="text" value="{{old('title')}}" name="title" class="form-control" id="inputTitle" placeholder="Title">
                @error('name')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="inputMetaTitle">Meta Title</label>
                <input type="text" value="{{old('meta_title')}}" name="meta_title" class="form-control" id="inputMetaTitle" placeholder="Meta Title">
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
                <input type="text" value="{{old('meta_description')}}" name="meta_description" class="form-control" id="inputMetaDescription" placeholder="Meta Description">
                @error('meta_description')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="inputTags">Tags</label>
                <input type="text" value="{{old('tags')}}" name="tags" class="form-control" id="inputTags" placeholder="Tags">
                @error('tags')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <textarea class="description" name="description"></textarea>
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
                    <input type="checkbox"  name="create_menu">
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
                <input type="text" value="{{old('menu_name')}}" name="menu_name" class="form-control" id="inputMenuName" placeholder="Menu Name">
                @error('menu_name')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary">submit</button>
        <button id="myButton" class="btn btn-success">Click Me</button>

</form>

@endsection
@section('script')
    <script>
        $('#myButton').on('click',function(e){
            e.preventDefault();
            $.ajax({
                method: 'get',
                url: '{{ route('page.all') }}',
                success: function(response){
                    console.log('success response',response);
                },
                error: function(response){
                    console.log('error response',response);
                }
            });

        });
    </script>

@endsection
