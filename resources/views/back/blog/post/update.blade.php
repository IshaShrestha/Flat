@extends('back.layout.app')
@section('content')
    <form action="{{route('post.update',$post->url_slug)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <h1>Add Post</h1>

        </div>
        <div class="container mt-2">
            <div class="row">
                <div class="col-md-7">
                    <div class="first_box">
                        <br>
                        <span class="mx-4 mt-5">Post Title</span><br>
                        <span><small class="text-muted mx-4">This title is for you post.</small></span>
                        <div class="form-group p-3">
                            <input type="text" name="title" value="{{old('title', $post->title)}}" class="form-control" id="formGroupExampleInput" placeholder="Title">
                            @error('title')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="second_box">
                        <br>
                        <span class="mx-4 mt-5">Post Content</span>
                        <div class="form-group p-3">
                            <textarea class="description" name="description">{{old('description',$post->description)}}</textarea>
                            <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
                            <script>
                                tinymce.init({
                                    selector:'textarea.description',
                                    width: 600,
                                    height: 600
                                });
                            </script>
                            @error('description')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                    </div>

                    <div class="third_box">

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            Post Details
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label for="inputSlug" class="mb-md-0">Url Slug</label>
                                <input type="text" name="url_slug" value="{{old('url_slug',$post->url_slug)}}" class="form-control" id="inputSlug"
                                       aria-describedby="">
                                @error('url_slug')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="post-status" class="mb-md-0">Post Status</label>
                                <select name="status" class="form-control form-control">
                                    <option selected value="">Select</option>
                                    <option value="publish" {{ (old('status') === 'publish')?'selected':'' }}>Publish</option>
                                    <option value="draft" {{ (old('status') === 'draft')?'selected':'' }}>Draft</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="post-category" class="mb-md-0">Post Category</label>
                                <select name="category" class="form-control form-control">
                                    <option selected value="">Select</option>
                                    @foreach($categories as $cat)
                                        <option {{ ($post->category_id === $cat->id)?'selected':'' }} value="{{ $cat->slug }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-check">
                                <input class="form-check-input position-static" value="{{old('feature',$post->feature)}}" name="feature" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                <label for="post-status" class="mb-md-0">Feature</label>

                            </div>


                        </div>


                    </div>
                    <br>
                    <div class="card">
                        <div class="card-header">
                            Post Image
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="mb-md-0">Image</label>
                                <input id="profile_image" type="file" class="form-control" name="image">

                            </div>
                            @error('image')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <div class="card-header">
                            Post Small Description
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label for="postDescription" class="mb-md-0">Description</label>
                                <input id="postDescription" value="{{old('post_description',$post->post_description)}}" type="text" class="form-control" name="post_description">
                                @error('post_description')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br>

                    <button type="submit" class="btn btn-primary">Update</button>



                </div>



            </div>
        </div>
    </form>
@endsection
