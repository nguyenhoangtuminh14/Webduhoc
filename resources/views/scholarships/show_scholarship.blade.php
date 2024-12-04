@extends('scholarships.scholarship')

@section('title', 'Chi Tiết Học Bổng')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-primary text-white text-center">
            <h2 class="mb-0">{{ $scholarship->name }}</h2>
        </div>
        <div class="card-body">
            <h5 class="card-title text-center">Thông Tin Học Bổng</h5>
            <div class="row">
                <div class="col-md-6">
                    <p class="card-text"><b><strong>Giá Trị (USD):</strong></b> {{ number_format($scholarship->amount, 2) . ' $' }}</p>
                    <p class="card-text"><b><strong>Yêu Cầu:</strong></b> {{ $scholarship->requirements }}</p>
                    <p class="card-text"><b><strong>Loại:</strong></b> {{ $scholarship->type }}</p>
                    <p class="card-text"><b><strong>Ngành Học:</strong></b> {{ $scholarship->field->name }}</p>
                </div>
                <div class="col-md-6">
                    <p class="card-text"><b><strong>Hạn Nộp Đơn:</strong></b> {{ \Carbon\Carbon::parse($scholarship->deadline)->format('d/m/Y') }}</p>
                    <p class="card-text"><b><strong>Quốc Gia:</strong></b> {{ $scholarship->country->name }}</p>
                    <p class="card-text"><b><strong>Hướng Dẫn Đăng Ký:</strong></b><br>
                        {!! nl2br(e($scholarship->application_guidelines)) !!}
                    </p>
                </div>
            </div>
            <div class="text-center">
                <a href="{{ route('scholarships.all') }}" class="btn btn-secondary mt-3">Quay lại</a>
            </div>
        </div>
    </div>
</div>

<style>
    .card {
        border-radius: 15px;
        overflow: hidden;
    }
    .card-header {
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }
    .card-title {
        font-size: 1.8rem;
        font-weight: bold;
    }
    .card-text {
        font-size: 1.1rem;
        line-height: 1.5;
    }
    .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
    }
    .btn-secondary:hover {
        background-color: #5a6268;
        border-color: #545b62;
    }
</style>
@endsection