@extends('back.layout.app')
@section('content')
    <form action="{{route('template.store')}}" method="POST" enctype="multipart/form-data" id="settingform" style="margin-left: 80px;">
        <div>
            <h1>Create Template</h1>
            <br>
        </div>
        @csrf
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputName">Name</label>
                <input type="text" value="{{old('name')}}" name="name" class="form-control" id="inputName" placeholder="">
                @error('name')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="subject">Subject</label>
                    <input type="text" value="{{old('subject')}}" name="subject" class="form-control" id="subject" placeholder="">
                    @error('subject')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <textarea class="description" name="description" id="description"></textarea>
                        <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
                        <script>
                            tinymce.init({
                                selector:'textarea.description',
                                width: 770,
                                height: 300
                            });
                        </script>
                    </div>
                    @error('description')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">submit</button>

            </div>
        </div>
        <br>
        <br>
        <div>
            <h1>Email Template</h1>
            <br>
        </div>
        <br>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Name</th>
                <th scope="col">Subject</th>
                <th scope="col">created by</th>
                <th scope="col">Last updated by</th>
                <th colspan="2" scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($templates as $template)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$template->name}}</td>
                    <td>{{$template->subject}}</td>
                    <td></td>
                    <td></td>
                    <td></td>

                </tr>
            @endforeach

            </tbody>
        </table>

    </form>





@endsection


