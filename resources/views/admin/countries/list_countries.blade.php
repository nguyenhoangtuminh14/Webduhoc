@extends('admin.main')
@section('title', 'Danh Sách Quốc Gia')
@section('content')
<div class="container my-5">
    <h1 class="mb-4">Danh Sách Quốc Gia</h1>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <a href="{{ route('countries.create') }}" class="btn btn-primary mb-3">Thêm Quốc Gia</a>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Tên Quốc Gia</th>
                    <th>Quốc Kỳ</th>
                    <th>Mô Tả</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($countries as $country)
                    <tr>
                        <td>{{ $country->id }}</td>
                        <td>{{ $country->name }}</td>
                        <td><img src="{{ asset($country->flag) }}" alt="{{ $country->name }}" class="img-fluid" style="max-height: 100px;"></td>
                        <td>{{ Str::limit($country->description, 50) }}</td>
                        <td>
                            <a href="{{ route('countries.edit', $country->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                            <form action="{{ route('countries.destroy', $country->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa quốc gia này?');">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection