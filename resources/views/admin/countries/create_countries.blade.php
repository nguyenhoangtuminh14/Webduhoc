@extends('admin.main')
@section('title', 'Thêm Quốc Gia')
@section('content')
<div class="container my-5">
    <h1 class="mb-4">Thêm Quốc Gia Mới</h1>
    <form action="{{ route('countries.store') }}" method="POST" enctype="multipart/form-data" class="bg-light p-4 rounded shadow-sm">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Tên Quốc Gia</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên quốc gia" required>
        </div>
        <div class="form-group mb-3">
            <label for="description">Mô Tả Quốc Gia</label>
            <textarea class="form-control" name="description" id="description" rows="5" placeholder="Nhập mô tả quốc gia" required></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="flag">Quốc Kỳ</label>
            <input type="file" class="form-control" name="flag" id="flag" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
        <a href="{{ route('countries.index') }}" class="btn btn-secondary ms-2">Hủy</a>
    </form>
</div>
@endsection