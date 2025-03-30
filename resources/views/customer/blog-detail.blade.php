@extends('customer.layout')
@section('title', $blog->title)
@section('page', 'blog')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/component/I-page-blog.css') }}">
@endsection()

@section('body')
    <div class="blog-detail">
        <div class="wrapper">
            <h1 class="blog-title">{{ $blog->title }}</h1>
            <div class="blog-meta">
                <span>{{ $blog->publish_date->format('d/m/Y') }}</span>
            </div>
            @if($blog->image)
                <div class="blog-image">
                    <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}">
                </div>
            @endif
            <div class="blog-content">
                {!! $blog->content !!}
            </div>
            <a href="{{ route('customer.blog') }}" class="linked-link">Back to Blogs</a>
        </div>
    </div>
@endsection()

@section('js')
    <script type="text/javascript" src="{{ asset('assets/js/page/blog-detail.js') }}"></script>
@endsection()
