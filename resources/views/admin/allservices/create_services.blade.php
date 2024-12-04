@extends('admin.admin')
@section('title', 'Thêm Dịch Vụ Mới')
@section('content')
<div class="container">
    <h2>Thêm Dịch Vụ Mới</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="{{ route('services_admin.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Tên Dịch Vụ</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="description">Mô Tả</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>
        <div class="form-group">
            <label for="process">Quy Trình</label>
            <input type="text" class="form-control" id="process" name="process" required>
        </div>
        <div class="form-group">
            <label for="support_time">Thời Gian Hỗ Trợ</label>
            <input type="text" class="form-control" id="support_time" name="support_time" required>
        </div>
        <div class="form-group">
            <label for="image">Hình Ảnh</label>
            <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary">Thêm Dịch Vụ</button>
    </form>
</div>
@endsection