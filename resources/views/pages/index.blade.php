@extends('base')
@section('content')
    @foreach($threads as $thread)
        <div>
            <h5>{{ $thread->judul }}</h5>
        </div>
    @endforeach
@endsection