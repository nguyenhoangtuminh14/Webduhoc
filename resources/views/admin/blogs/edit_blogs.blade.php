@extends('admin.main')
@section('title', 'Chỉnh Sửa Bài Viết')
@section('content')
<div class="container my-5">
    <h1 class="mb-4">Chỉnh Sửa Bài Viết</h1>
    <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data" class="bg-light p-4 rounded shadow-sm">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="title">Tiêu Đề</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $blog->title }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="content">Nội Dung</label>
            <textarea class="form-control" name="content" id="content" rows="5" required>{{ $blog->content }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="author">Tác Giả</label>
            <input type="text" class="form-control" name="author" id="author" value="{{ $blog->author }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="image">Hình Ảnh</label>
            <input type="file" class="form-control" name="image" id="image">
            @if($blog->image)
                <div class="mt-2">
                    <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" class="img-fluid mb-3" style="max-height: 200px; object-fit: cover;">
                </div>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Cập Nhật</button>
        <a href="{{ route('blogs.index') }}" class="btn btn-secondary ms-2">Hủy</a>
    </form>
</div>
@endsection