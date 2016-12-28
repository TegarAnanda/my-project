@extends('base')
@section('content')
    @each('partials.blog-post-item', $data, 'data')
@endsection