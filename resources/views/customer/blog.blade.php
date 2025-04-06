@extends('customer.layout')
@section('title', "Blogs")
@section('page', 'blog')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/component/I-page-blog.css') }}">
@endsection()

@section('body')
    <div class="I-page-blog">
        <div class="blog-header">
            <div class="wrapper">
                <h3>News about UAVS</h3>
            </div>
        </div>
        <div class="blog-list">
            <div class="wrapper">
                @forelse($blogs as $blog)
                    <div class="blog-item">
                        <div class="side-layout">
                            <div class="item-time">
                                {{ $blog->publish_date->format('d/m/Y') }}
                            </div>
                            <div class="item-image">
                                <img src="{{ asset($blog->image ?? 'assets/images/default-avatar.jpg') }}" alt="{{ $blog->title }}">
                            </div>
                        </div>
                        <div class="side-center">
                            <div class="line"></div>
                        </div>
                        <div class="side-layout">
                            <h2 class="item-title">{{ $blog->title }}</h2>
                            <p class="item-description">{{ $blog->description }}</p>
                            <a href="{{ route('blogs.show', $blog) }}" class="linked-link">Read more</a>
                        </div>
                    </div>
                @empty
                    <div class="no-blogs">
                        <p>No blogs available.</p>
                    </div>
                @endforelse
                <div class="pagination">
                    {{ $blogs->links('vendor.pagination.custom') }}
                </div>
            </div>
        </div>
    </div>
@endsection()

@section('js')
    <script type="text/javascript" src="{{ asset('assets/js/page/blog.js') }}"></script>
@endsection()
