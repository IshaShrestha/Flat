@extends('back.layout.app')
@section('content')

    <iframe src="{{ route('unisharp.lfm.show') }}" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>

@endsection
