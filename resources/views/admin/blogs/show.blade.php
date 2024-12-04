@extends('admin.admin')
@section('title')
Xem Bài Viết
@endsection
@section('content')
<div class="container my-5">
    <div class="row">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">{{ $blog->title }}</h1>
                    <p class="card-subtitle text-muted">
                        <strong>Tác Giả:</strong> {{ $blog->author }} | 
                        <strong>Ngày Tạo:</strong> {{ $blog->created_at->format('d/m/Y H:i') }}
                    </p>
                </div>

                @if($blog->image)
                <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" class="card-img-top" style="max-height: 300px; object-fit: cover;">
                @endif

                <div class="card-body">
                    <div class="content">
                        {!! nl2br(e($blog->content)) !!} 
                    </div>
                </div>

                <div class="card-footer text-end">
                    <a href="{{ route('blogs.index') }}" class="btn btn-primary">Về Lại Danh Sách</a>
                </div>
            </div>
        </div>

        
<div class="col-md-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4 class="font-weight-bold">Danh sách bình luận:</h4>
        </div>
        <div class="card-body" style="border: 1px solid #e0e0e0; border-radius: 10px; padding: 15px;">
            @forelse($blog->comments as $comment)
                <div class="card mb-3" style="border: 1px solid #e0e0e0; border-radius: 10px;">
                    <div class="card-body">
                        <h5 class="card-title"><b>{{ $comment->name }}</b> <small class="text-muted">({{ $comment->email }})</small></h5>
                        <p class="card-text">{{ $comment->comment }}</p>
                        <footer class="blockquote-footer text-muted">
                            {{ $comment->created_at->diffForHumans() }}
                        </footer>

                        

                        @if($comment->reply_content)
                            <div class="mt-3">
                                <h6 class="card-title"><b>Admin</b></h6>
                                <p class="card-text">{{ $comment->reply_content }}</p>
                                <footer class="blockquote-footer text-muted">
                                    {{ $comment->updated_at->diffForHumans() }}
                                </footer>
                            </div>
                        @else
                        
                       
                            <button class="btn btn-secondary btn-sm mt-2" data-toggle="collapse" data-target="#replyForm{{ $comment->id }}">Trả lời</button>
                            <div id="replyForm{{ $comment->id }}" class="collapse mt-2">
                                <form action="{{ route('blogs.storeReply', $comment->id) }}" method="POST">
                                    @csrf
                                    <div class="mb-2">
                                        <textarea name="comment" class="form-control" placeholder="Nội dung bình luận" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Gửi</button>
                                </form>
                            </div>
                        @endif
                    </div>
                    <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Bạn có chắc chắn muốn xóa bình luận này?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm mt-2">Xóa</button>
                    </form>
                </div>
            @empty
                <div class="alert alert-info" role="alert">
                    Chưa có bình luận nào cho bài viết này.
                </div>
            @endforelse
        </div>
    </div>
</div>
</div>
</div>
@endsection