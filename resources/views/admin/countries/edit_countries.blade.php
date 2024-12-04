@extends('admin.main')
@section('title', 'Chỉnh Sửa Quốc Gia')
@section('content')
<div class="container my-5">
    <h1 class="mb-4">Chỉnh Sửa Quốc Gia: {{ $country->name }}</h1>
    <form action="{{ route('countries.update', $country->id) }}" method="POST" enctype="multipart/form-data" class="bg-light p-4 rounded shadow-sm">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="name">Tên Quốc Gia</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $country->name }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="description">Mô Tả Quốc Gia</label>
            <textarea class="form-control" name="description" id="description" rows="5" required>{{ $country->description }}</textarea>
        </div>
        <div class="form-group mb-3">
            <label for="flag">Quốc Kỳ</label>
            <input type="file" class="form-control" name="flag" id="flag" accept="image/*">
            @if($country->flag)
                <div class="mt-2">
                    <img src="{{ asset($country->flag) }}" alt="{{ $country->name }}" class="img-fluid mb-3" style="max-height: 200px; object-fit: cover;">
                </div>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Cập Nhật</button>
        <a href="{{ route('countries.index') }}" class="btn btn-secondary ms-2">Hủy</a>
    </form>
</div>
@endsection