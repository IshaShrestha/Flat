@extends('back.layout.app')
@section('content')
    <form action="" method="" enctype="multipart/form-data" id="settingform" style="margin-left: 80px;">
        <div>
            <h1>Send Newsletter</h1>
            <br>
        </div>
        @csrf
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="subject">Template</label>
                <select name="template" id="inputTemplate" class="form-control input-lg dynamic" data-dependent="subject, description">
                    <option value="">Select Template</option>
                    @foreach($templates as $template)
                        <option value="{{$template->slug}}">{{$template->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="subject">Subject</label>
                    <input type="text" value="" name="subject" class="form-control" id="inputSubject" placeholder="">
                    @error('subject')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="subject">Recipient</label>
                        <select name="recipient" id="inputRecipient" class="form-control input-lg dynamic">
                            <option value="">Select Recipient</option>
                            <option value="">Me</option>
                            <option value="">Everyone</option>
                            <option value="">Subscriber</option>
                            <option value="">Verified User</option>
                        </select>
                    </div>
                    </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <textarea class="description" name="description" id="inputDescription"></textarea>
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
    </form>
@endsection
@section('script')
    <script>
        $('#inputTemplate').on('change',function(e){
            e.preventDefault();

            let selectedTemplate = $(this).val();
            console.log(selectedTemplate);
            $.ajax({
                method: 'get',
                url: '{{ route('newsletter.fetch') }}',
                data:{ template:selectedTemplate},
                beforeSend:function(){
                    tinymce.get('inputDescription').setContent('');
                },
                success: function(response){
$('#inputSubject').val(response.subject);
// $('#inputDescription').html(response.description);
                 //   tinymce.activeEditor.selection.setContent(response.description);
                 //    tinymce.get('inputDescription').execCommand('mceInsertContent',false,'');
                 //    tinymce.get('inputDescription').setContent('');
                    tinymce.get('inputDescription').execCommand('mceInsertContent',false,response.description);
                    console.log('success response',response);

                },
                error: function(response){
                    console.log('error response',response);
                }
            });

        });
    </script>

@endsection
