@extends('services_main.services') 

@section('title', 'Chi Tiết Dịch Vụ')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Chi Tiết Dịch Vụ: {{ $service->name }}</h1>
    
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Thông Tin Dịch Vụ</h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Tên Dịch Vụ</th>
                        <td>{{ $service->name }}</td>
                    </tr>
                    <tr>
                        <th>Mô Tả</th>
                        <td>{{ $service->description }}</td>
                    </tr>
                    <tr>
                        <th>Quy Trình</th>
                        <td>{{ $service->process }}</td>
                    </tr>
                    <tr>
                        <th>Thời Gian Hỗ Trợ</th>
                        <td>{{ $service->support_time }}</td>
                    </tr>
                    <tr>
                        <th>Hình Ảnh</th>
                        <td>
                            @if($service->image)
                                <img src="{{ asset($service->image) }}" alt="{{ $service->name }}" class="img-fluid" style="max-width: 200px;">
                            @else
                                <p>Không có hình ảnh</p>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a href="{{ route('services.services') }}" class="btn btn-secondary">Quay lại danh sách dịch vụ</a>
        </div>
    </div>
</div>
@endsection