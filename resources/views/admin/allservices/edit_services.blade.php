@extends('admin.admin')

@section('title', 'Chỉnh Sửa Dịch Vụ')

@section('content')
<div class="container">
    <h2>Chỉnh Sửa Dịch Vụ: {{ $service->name }}</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('services_admin.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') 
        <div class="form-group">
            <label for="name">Tên Dịch Vụ</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $service->name) }}" required>
        </div>
        <div class="form-group">
            <label for="description">Mô Tả</label>
            <textarea class="form-control" id="description" name="description" required>{{ old('description', $service->description) }}</textarea>
        </div>
        <div class="form-group">
            <label for="process">Quy Trình</label>
            <input type="text" class="form-control" id="process" name="process" value="{{ old('process', $service->process) }}" required>
        </div>
        <div class="form-group">
            <label for="support_time">Thời Gian Hỗ Trợ</label>
            <input type="text" class="form-control" id="support_time" name="support_time" value="{{ old('support_time', $service->support_time) }}" required>
        </div>
        <div class="form-group">
            <label for="image">Hình Ảnh</label>
            <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
            @if($service->image)
                <div class="mt-2">
                    <img src="{{ asset($service->image) }}" alt="{{ $service->name }}" class="img-fluid mb-3" style="max-height: 200px; object-fit: cover;">
                </div>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Cập Nhật Dịch Vụ</button>
        <a href="{{ route('services_admin.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection