@extends('admin.admin') 
@section('title', 'Liên Hệ')
@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Tất Cả Liên Hệ</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Nội Dung</th>
                    <th>Ngày Liên Hệ</th>
                    <th>Tình Trạng</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ Str::limit($contact->message, 50) }}</td>
                        <td>{{ $contact->created_at->format('d/m/Y') }}</td>
                        <td>
                            <span class="badge {{ $contact->status ? 'bg-success' : 'bg-warning' }}">
                                {{ $contact->status ? 'Đã phản hồi' : 'Chưa phản hồi' }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('contact.show', $contact->id) }}" class="btn btn-info btn-sm">Xem</a>
                            @if ($contact->reply_content) 
                                <span class="btn btn-success btn-sm">Đã phản hồi</span>
                            @else
                                <a href="{{ route('contact.showReplyForm', $contact->id) }}" class="btn btn-warning btn-sm">Phản Hồi</a>
                            @endif
                            <form action="{{ route('contact.destroy', $contact->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa Liên hệ này?');">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection