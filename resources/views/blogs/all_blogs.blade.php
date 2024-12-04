@extends('blogs.blog')
@section('title')
Tin Tức
@endsection
@section('content01')
 <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-content">
          <h2>Tin Tức</h2>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('content')
    @foreach($blogs as $blog)
    <div class="col-md-6">
        <div class="service-item">
            <a href="{{ route('blog.show', $blog->id) }}" class="services-item-image">
                <img src="{{ asset($blog->image) }}" class="img-fluid" alt="">
            </a>
            <div class="down-content">
                <h4><a href="{{ route('blog.show', $blog->id) }}">{{ $blog->title }}</a></h4>
                <p style="margin: 0;"> {{ $blog->author }} &nbsp;&nbsp;|&nbsp;&nbsp; {{ $blog->created_at->format('d/m/Y H:i') }} &nbsp;&nbsp;|&nbsp;&nbsp; {{ $blog->views }}</p>
            </div>
        </div>
    </div>
@endforeach

         <div class="col-md-12">
          <ul class="pages">
 
              @if ($blogs->onFirstPage())
                  <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
              @else
                  <li><a href="{{ $blogs->previousPageUrl() }}"><i class="fa fa-angle-left"></i></a></li>
              @endif
    
              @for ($i = 1; $i <= $blogs->lastPage(); $i++)
                  @if ($i == $blogs->currentPage())
                      <li class="active"><a href="#">{{ $i }}</a></li>
                  @else
                      <li><a href="{{ $blogs->url($i) }}">{{ $i }}</a></li>
                  @endif
              @endfor
      
              @if ($blogs->hasMorePages())
                  <li><a href="{{ $blogs->nextPageUrl() }}"><i class="fa fa-angle-right"></i></a></li>
              @else
                  <li class="disabled"><a href="#"><i class="fa fa-angle-right"></i></a></li>
              @endif
          </ul>
      </div>
    @endsection

