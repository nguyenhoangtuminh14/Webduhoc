@extends('admin.admin') 
@section('title', 'Phản Hồi Liên Hệ')
@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">Phản Hồi Liên Hệ</h2>
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">Thông Tin Liên Hệ</h5>
        </div>
        <div class="card-body">
            <h3><strong>Tên: </strong> {{ $contacts->name }}</h3>
            <h3><strong>Email: </strong> {{ $contacts->email }}</h3>
            <h3><strong>Ngày Liên hệ:</strong> {{ $contacts->created_at->format('d/m/Y H:i') }}</h3>
            <h3><strong>Nội Dung:</strong></h3>
            <div class="content">
                <p class="border p-3 rounded bg-light">{!! nl2br(e($contacts->message)) !!}</p>
            </div>
        </div>
    </div>
    <h3 class="mt-4">Gửi Phản Hồi:</h3>
    <form action="{{ route('contact.reply', $contacts->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="message">Nội Dung Phản Hồi:</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success mt-3">Gửi Phản Hồi</button>
        </div>
    </form>
    <div class="text-center mt-4">
        <a href="{{ route('contact.index') }}" class="btn btn-primary">Về Lại Danh Sách Liên Hệ</a>
    </div>
</div>
@endsection