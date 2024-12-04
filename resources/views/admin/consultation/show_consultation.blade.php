@extends('admin.admin')

@section('title', 'Chi Tiết Đăng Ký Tư Vấn')

@section('content')
<div class="container mt-5">    
    <h1 class="mb-4">Chi Tiết Đăng Ký Tư Vấn</h1>
    <div class="card">
        <div class="card-header">
            <h5>Tên: {{ $registration->first_name }} {{ $registration->last_name }}</h5>
            <h5>Email: {{ $registration->email }}</h5>
            <h5>Số điện thoại: {{ $registration->phone }}</h5>
            <h5>Trình độ học vấn: {{ $registration->education_level }}</h5>
            <h5>Quốc gia du học: {{ $registration->country->name }}</h5>
            <h5>Dịch vụ: {{ $registration->service->name }}</h5>
            <h5>Thời gian tư vấn: {{ $registration->datetime }}</h5>
            <h5>Trạng thái: 
                @if($registration->approved)
                    <span class="badge badge-success">Đã duyệt</span>
                @else
                    <span class="badge badge-warning">Chưa duyệt</span>
                @endif
            </h5>
        </div>
        <td>
            <div class="card-footer text-end">
                <a href="{{ route('consultation.list') }}" class="btn btn-primary">Quay lại danh sách</a>
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
            </div>
        </td>
    </div>
</div>
@endsection