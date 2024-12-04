@extends('admin.main')

@section('title', 'Danh sách học bổng')

@section('content')
    <div class="container mt-5">
        <h1>Danh Sách Học Bổng</h1>

        <a href="{{ route('scholarships.create') }}" class="btn btn-primary mb-3">Thêm học bổng</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        
        <h2>Học Bổng Toàn Phần</h2>
        <table class="table table-bordered">
            <thead>
                <tr> 
                    <th>Tên Học Bổng</th>
                    <th>Giá Trị (USD)</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($fullScholarships as $scholarship)
                    <tr>
                        <td>{{ $scholarship->name }}</td>
                        <td>{{ number_format($scholarship->amount, 2) . ' $' }}</td>
                        <td>
                            <a href="{{ route('scholarships.edit', $scholarship->id) }}" class="btn btn-warning btn-sm">Chỉnh Sửa</a>
                            <form action="{{ route('scholarships.destroy', $scholarship->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa học bổng này?')">Xóa</button>
                            </form>
                            <a href="{{ route('scholarships.show', $scholarship->id) }}" class="btn btn-info btn-sm">Xem</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h2>Học Bổng Bán Phần</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tên Học Bổng</th>
                    <th>Giá Trị (USD)</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($partialScholarships as $scholarship)
                    <tr>
                        <td>{{ $scholarship->name }}</td>
                        <td>{{ number_format($scholarship->amount, 2) . ' $' }}</td>
                        <td>
                            <a href="{{ route('scholarships.edit', $scholarship->id) }}" class="btn btn-warning btn-sm">Chỉnh Sửa</a>
                            <form action="{{ route('scholarships.destroy', $scholarship->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa học bổng này?')">Xóa</button>
                            </form>
                            <a href="{{ route('scholarships.show', $scholarship->id) }}" class="btn btn-info btn-sm">Xem</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h2>Học Bổng Theo Ngành</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tên Học Bổng</th>
                    <th>Tên ngành Học</th>
                    <th>Giá Trị (USD)</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($fieldScholarships as $scholarship)
                    <tr> 
                        <td>{{ $scholarship->name }}</td>
                        <td>{{ $scholarship->field->name }}</td>
                        <td>{{ number_format($scholarship->amount, 2) . ' $' }}</td>
                        <td>
                            <a href="{{ route('scholarships.edit', $scholarship->id) }}" class="btn btn-warning btn-sm">Chỉnh Sửa</a>
                            <form action="{{ route('scholarships.destroy', $scholarship->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa học bổng này?')">Xóa</button>
                            </form>
                            <a href="{{ route('scholarships.show', $scholarship->id) }}" class="btn btn-info btn-sm">Xem</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="{{ asset('admin_assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
@endsection