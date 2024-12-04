@extends('admin.main')

@section('title', 'Ngành học')

@section('content')
    <div class="container mt-5">
        <h1>Danh Sách Ngành Học</h1>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <a href="{{ route('fields.create') }}" class="btn btn-primary mb-3">Thêm Ngành Học</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên Ngành Học</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($fields as $field)
                    <tr>
                        <td>{{ $field->id }}</td>
                        <td>{{ $field->name }}</td>
                        <td>
                            <form action="{{ route('fields.destroy', $field->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa ngành học này?')">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="{{ asset('admin_assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    @endsection