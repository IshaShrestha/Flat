@extends('back.layout.app')
@section('content')
        <form action="{{route('setting.store')}}" method="POST" enctype="multipart/form-data" id="settingform" style="margin-left: 80px;">
            <div>
                <h1>Setting</h1>
                <br>
            </div>
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputName">Name</label>
                    <input type="text" value="{{old('name')}}" name="name" class="form-control" id="inputName" placeholder="Name">
                    @error('name')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="inputDescription">Description</label>
                    <input type="text" value="{{old('description')}}" name="description" class="form-control" id="inputDescription" placeholder="Describe">
                    @error('description')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputMetaTitle">Meta Title</label>
                    <input type="text" value="{{old('meta_title')}}" name="meta_title" class="form-control" id="inputMetaTitle" placeholder="Title">
                    @error('meta_title')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="inputMetaDescription">Meta Description</label>
                    <input type="text" value="{{old('meta_description')}}" name="meta_description" class="form-control" id="inputMetaDescription" placeholder="Describe">
                    @error('meta_description')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputPrimaryEmail">Primary Email</label>
                    <input type="email" value="{{old('primary_email')}}" name="primary_email" class="form-control" id="inputPrimaryEmail" placeholder="eg.email@gmail.com">
                    @error('primary_email')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="inputSecondaryEmail">Secondary Email</label>
                    <input type="email" value="{{old('secondary_email')}}" name="secondary_email" class="form-control" id="inputSecondaryEmail" placeholder="eg.email@gmail.com">
                    @error('secondary_email')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputHuntingLine">Hunting Line</label>
                    <input type="tel" value="{{old('hunting_line')}}" name="haunting_line" class="form-control" id="inputHuntingLine" placeholder="">
                    @error('hunting_line')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="inputContact">Contact</label>
                    <input type="tel" value="{{old('contact')}}" name="contact" class="form-control" id="inputContact" placeholder="">
                    @error('contact')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputAddress">Address</label>
                    <input type="text" value="{{old('address')}}" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    @error('address')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="inputLogo">Logo</label>
                    <input type="file" name="image" class="form-control" id="inputContact" placeholder="">
                </div>

            </div>

            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>



@endsection
