@extends('services_main.services') 

@section('title', 'Dịch Vụ')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Dịch Vụ Tư Vấn Du Học</h1>
    <div class="row">
        @foreach($services as $service)
            <div class="col-md-4 mb-4">
                <div class="card service-card shadow-sm">
                    <a href="{{ route('services.show', $service->id) }}">
                        <img src="{{ asset($service->image) }}" class="card-img-top" alt="{{ $service->name }}">
                        <div class="card-body">
                            <h5 class="service-title">{{ $service->name }}</h5> 
                            <p class="service-description">{{ $service->description }}</p>
                            <p><strong>Quy trình:</strong> {{ $service->process }}</p>
                            <p><strong>Thời gian hỗ trợ:</strong> {{ $service->support_time }}</p>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>

<style>
    .service-card {
        border: none;
        border-radius: 10px;
        transition: transform 0.2s;
    }
    .service-card:hover {
        transform: translateY(-5px);
    }
    .service-title {
        font-size: 1.25rem;
        font-weight: bold;
        color: #007bff; 
    }
    .service-description {
        color: #6c757d; 
    }
    .card-img-top {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        height: 200px; 
        object-fit: cover; 
    }
    .container {
        padding: 30px; 
    }
    h1 {
        font-size: 2.5rem; 
        color: #333; 
        font-weight: bold; 
    }
    .mb-4 {
        margin-bottom: 2rem; 
    }
    .shadow-sm {
        box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important; 
    }
</style>
@endsection