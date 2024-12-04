@extends('admin.admin')

@section('title', 'Danh Sách Đăng Ký Tư Vấn')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Danh Sách Đăng Ký Tư Vấn</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Trình độ học vấn</th>
                <th>Quốc gia du học</th>
                <th>Dịch vụ</th>
                <th>Thời gian</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registrations as $registration)
                <tr>
                    <td>{{ $registration->first_name }} {{ $registration->last_name }}</td>
                    <td>{{ $registration->email }}</td>
                    <td>{{ $registration->phone }}</td>
                    <td>{{ $registration->education_level }}</td>
                    <td>{{ $registration->country->name }}</td>
                    <td>{{ $registration->service->name }}</td>
                    <td>{{ $registration->datetime }}</td>
                    <td>
                        @if($registration->approved)
                        <span class="badge badge-success">Đã duyệt</span>
                        @else
                            <span class="badge badge-warning">Chưa duyệt</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('consultation.show', $registration->id) }}" class="btn btn-info btn-sm">Xem</a>
                        @if(!$registration->approved)
                            <form action="{{ route('consultation.approve', $registration->id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-sm">Duyệt</button>
                            </form>
                        @endif
                        <form action="{{ route('consultation.destroy', $registration->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa đăng ký này không?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection