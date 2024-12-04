@extends('admin.admin') 
@section('title', 'Chi Tiết Liên Hệ')
@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Chi Tiết Liên Hệ</h2>
    <div class="card">
        <div class="card-header">
            <h5>Tình Trạng: <span class="badge {{ $contacts->status ? 'bg-success' : 'bg-warning' }}">{{ $contacts->status ? 'Đã phản hồi' : 'Chưa phản hồi' }}</span></h5>
        </div>
        <div class="card-body">
            <h5><strong>Tên:</strong> {{ $contacts->name }}</h5>
            <h5><strong>Email:</strong> {{ $contacts->email }}</h5>
            <h5><strong>Ngày Liên hệ:</strong> {{ $contacts->created_at->format('d/m/Y H:i') }}</h5>
            <hr>
            <h5><strong>Nội Dung:</strong></h5>
            <p class="border p-3 bg-light">{!! nl2br(e($contacts->message)) !!}</p>
            
            <h5 class="mt-4"><strong>Nội Dung Phản Hồi:</strong></h5>
            <p class="border p-3 bg-light">
                {!! nl2br(e($contacts->reply_content ?? 'Chưa có phản hồi')) !!}
            </p>
        </div>
        <div class="card-footer">
            <a href="{{ route('contact.index') }}" class="btn btn-primary">Về Lại Danh Sách Liên Hệ</a>
            @if ($contacts->reply_content)
                <span class="btn btn-success btn-sm">Đã phản hồi</span>
            @else
                <a href="{{ route('contact.showReplyForm', $contacts->id) }}" class="btn btn-warning btn-sm">Phản Hồi</a>
            @endif
        </div>
    </div>
</div>
@endsection