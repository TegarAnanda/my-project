@extends('base')
@section('content')
    <div class="col-lg-6 col-md-6 col-sm-8">
        <div class="middle_content">
            <h2></h2>
            <ul class="featured_nav">
                @each('partials.blog-threadsBycategory', $data, 'data')
            </ul>
        </div>
    </div>
@endsection