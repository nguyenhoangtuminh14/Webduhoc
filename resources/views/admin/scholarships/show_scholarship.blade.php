@extends('admin.main')

@section('title', 'Xem Chi Tiết Học Bổng')

@section('content')
    <div class="container mt-5">
        
        <div class="card">
            <div class="card-body">
                <h1 class="card-title"><b>{{ $scholarship->name }}</b></h1>
                <p class="card-text"><strong>Giá Trị (USD):</strong> {{ number_format($scholarship->amount, 2) . ' $' }}</p>
                <p class="card-text"><strong>Yêu Cầu:</strong> {{ $scholarship->requirements }}</p>
                <p class="card-text"><strong>Loại:</strong> {{ $scholarship->type }}</p>
                <p class="card-text"><strong>Ngành Học:</strong> {{ $scholarship->field->name }}</p>
                <p class="card-text"><strong>Hạn Nộp Đơn:</strong> {{ $scholarship->deadline }}</p>
                <p class="card-text"><strong>Hướng Dẫn Đăng Ký:</strong><br>
                    {!! nl2br(e($scholarship->application_guidelines)) !!}
                </p>
                <p class="card-text"><strong>Quốc Gia:</strong> {{ $scholarship->country->name }}</p>
                <a href="{{ route('scholarships.index') }}" class="btn btn-secondary">Quay lại</a>
            </div>
        </div>
    </div>
    <script src="{{ asset('admin_assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
@endsection