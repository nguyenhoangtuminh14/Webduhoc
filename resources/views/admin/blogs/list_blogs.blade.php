@extends('admin.main')
@section('title')
Danh Sách Bài Viết
@endsection
@section('content')
<div class="container my-5">
    <h1 class="mb-4">Danh Sách Bài Viết</h1>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <a href="{{ route('blogs.create') }}" class="btn btn-primary mb-3">Thêm Bài Viết Mới</a>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Tiêu Đề</th>
                    <th>Tác Giả</th>
                    <th>Ngày Tạo</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($blogs as $blog)
                    <tr>
                        <td>{{ $blog->id }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->author }}</td>
                        <td>{{ $blog->created_at->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-info btn-sm">Xem</a>
                            <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                            <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa bài viết này?');">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection