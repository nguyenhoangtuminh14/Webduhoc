@extends('admin.main')

@section('title', 'Thêm ngành học')

@section('content')

    <div class="container mt-5">
        <h1>Thêm Ngành Học</h1>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('fields.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Tên Ngành Học</label>
                <input type="text" name="name" class="form-control" placeholder="Nhập tên ngành học" required>
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-3">Thêm Ngành Học</button>
        </form>
    </div>
    <script src="{{ asset('admin_assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    @endsection