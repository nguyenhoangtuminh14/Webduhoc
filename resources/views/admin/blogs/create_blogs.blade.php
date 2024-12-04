@extends('admin.main')
@section('title', 'Tạo Bài Viết Mới')
@section('content')
<div class="container my-5">
    <h1 class="mb-4">Tạo Bài Viết Mới</h1>
    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data" class="bg-light p-4 rounded shadow-sm">
        @csrf
        
        <div class="form-group mb-3">
            <label for="title">Tiêu Đề</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Nhập tiêu đề bài viết" required>
        </div>

        <div class="form-group mb-3">
            <label for="content">Nội Dung</label>
            <textarea class="form-control" name="content" id="content" rows="5" placeholder="Nhập nội dung bài viết" required></textarea>
        </div>

        <div class="form-group mb-3">
            <label for="author">Tác Giả</label>
            <input type="text" class="form-control" name="author" id="author" placeholder="Nhập tên tác giả" required>
        </div>

        <div class="form-group mb-3">
            <label for="image">Hình Ảnh</label>
            <input type="file" class="form-control" name="image" id="image" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Thêm</button>
        <a href="{{ route('blogs.index') }}" class="btn btn-secondary ms-2">Hủy</a>
    </form>
</div>
@endsection