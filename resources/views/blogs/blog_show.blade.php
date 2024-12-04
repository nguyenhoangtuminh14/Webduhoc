@extends('blogs.blog')

@section('title')
Chi Tiết Tin Tức
@endsection

@section('content')
<div class="container mt-5">
    <div class="post-header text-center">
        <h2 class=" font-weight-bold text-dark">{{ $post->title }}</h2>
        <p class="text-muted"><strong>Tác giả:</strong> {{ $post->author }}</p>
        <p class="text-muted"><strong>Ngày đăng:</strong> {{ $post->created_at->format('d/m/Y') }}</p>
    </div>

    @if($post->image)
        <div class="post-image text-center mt-4">
            <img src="{{ asset($post->image) }}" class="img-fluid rounded shadow" alt="{{ $post->title }}">
        </div>
    @endif

    <div class="content mt-4" style="font-size: 1.2rem; line-height: 1.6;">
        
        <p>{!! nl2br(e($post->content)) !!}</p>
    </div>

    <div class="post-footer mt-5">
        <hr>
        <div class="text-center">
            <a href="{{ url('/all_blogs') }}" class="btn btn-primary btn-lg">Trở lại danh sách bài viết</a>
        </div>
    </div>
</div>
    
<div class="mt-4">
    <h4 class="font-weight-bold">Bình luận:</h4>
    @forelse($blog->comments as $comment)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $comment->name }} <small class="text-muted">({{ $comment->email }})</small></h5>
                <p class="card-text">{{ $comment->comment }}</p>
                <footer class="blockquote-footer text-muted">
                    {{ $comment->created_at->diffForHumans() }}
                </footer>
               
                @if($comment->reply_content)
                    <div class="mt-3">
                        <h6 class="card-title"> Du HỌc QT</h6>
                        <p class="card-text">{{ $comment->reply_content }}</p>
                        <footer class="blockquote-footer text-muted">
                            {{ $comment->updated_at->diffForHumans() }} 
                        </footer>
                    </div>
                @else
                    
                @endif
            </div>
        </div>
    @empty
        <div class="alert alert-info" role="alert">
            Chưa có bình luận nào.
        </div>
    @endforelse
</div>
   
    <form action="{{ route('comments.store', $blog->id) }}" method="POST" class="bg-light p-4 rounded shadow-sm">
        @csrf
        <h5 class="font-weight-bold">Để lại bình luận của bạn:</h5>
        <div class="form-group">
            <label for="name">Tên</label>
            <input type="text" class="form-control" name="name" required>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" required>
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="comment">Nội dung bình luận</label>
            <textarea class="form-control" name="comment" rows="3" required></textarea>
            @error('comment')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Gửi bình luận</button>
    </form>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="section-heading text-center">
                <h2 class="font-weight-bold">Tin Tức Khác</h2>
                <a href="/all_blogs">Xem Thêm <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        @foreach($blogs_new as $blog)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-item shadow-sm border rounded">
                <a href="{{ route('blog.show', $blog->id) }}" class="services-item-image">
                    <img src="{{ asset($blog->image) }}" class="img-fluid rounded-top" alt="">
                </a>
                <div class="down-content p-3">
                    <h4><a href="{{ route('blog.show', $blog->id) }}" class="text-dark">{{ $blog->title }}</a></h4>
                    <p class="text-muted mb-0">{{ $blog->author }} &nbsp;&nbsp;|&nbsp;&nbsp; 
                        {{ $blog->created_at->format('d/m/Y H:i') }} &nbsp;&nbsp;|&nbsp;&nbsp; {{ $blog->views }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


<style>
    .post-header {
        margin-bottom: 30px;
    }

    .post-header h1 {
        color: #2c3e50;
    }

    .post-image img {
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .content {
        font-size: 1.2rem;
        line-height: 1.6;
        color: #555;
        margin-top: 20px;
    }

    .post-footer {
        margin-top: 40px;
    }

    .post-footer hr {
        border-top: 1px solid #e0e0e0;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        padding: 10px 20px;
        font-size: 1.1rem;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .section-heading h2 {
        margin-bottom: 20px;
    }

    .service-item {
        transition: transform 0.3s;
    }

    .service-item:hover {
        transform: translateY(-5px);
    }
</style>
@endsection