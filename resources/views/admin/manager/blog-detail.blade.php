@extends('admin.layout')
@section('title', 'Cộng đồng')
@section('menu-data')
    <input type="hidden" name="" class="menu-data" value="about-group | about">
@endsection()

@section('css')
@endsection()

@section('body')
    <form action="{{ isset($blog) ? route('admin.blogs.update', $blog) : route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($blog))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $blog->title ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" required>{{ old('description', $blog->description ?? '') }}</textarea>
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control" rows="10" required>{{ old('content', $blog->content ?? '') }}</textarea>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control-file">
            @if(isset($blog) && $blog->image)
                <img src="{{ Storage::url($blog->image) }}" alt="Current image" style="max-width: 200px; margin-top: 10px;">
            @endif
        </div>

        <div class="form-group">
            <label for="publish_date">Publish Date</label>
            <input type="date" name="publish_date" id="publish_date" class="form-control" value="{{ old('publish_date', $blog->publish_date ?? now()->format('Y-m-d')) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">{{ isset($blog) ? 'Update' : 'Create' }} Blog</button>
    </form>
@endsection()


@section('js')
@endsection()
