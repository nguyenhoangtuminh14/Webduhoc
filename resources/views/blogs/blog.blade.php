<!DOCTYPE html>
<html lang="en">

  <head>
<base href="/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/DuHocQT.jpg">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>
  <style>
    .latest-blogs {
        border: 1px solid #e0e0e0; 
        border-radius: 10px; 
        background-color: #ffffff; 
    }

    .latest-blogs h5 {
        margin-bottom: 20px; 
    }

    .latest-blogs ul {
        padding-left: 0; 
    }

    .latest-blogs li {
        padding: 10px 0; 
    }

    .latest-blogs li p {
        margin: 0; 
        font-size: 1rem; 
    }

    .latest-blogs li a {
        text-decoration: none; 
        transition: color 0.3s; 
        color: #2855a7; 
    }

    .latest-blogs li a:hover {
        color: #007bff; 
    }

    .latest-blogs li.border-bottom {
        border-bottom: 1px solid #e0e0e0; 
    }
</style>
  <body>
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    
    @include('header')
  
    @yield('content01')
    <div class="row">
    </div>
    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row">

              @yield('content')

            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
                <h5 >Tin Mới</h5>
            </div>
            <div class="latest-blogs border rounded p-3 shadow-sm">
                <ul class="list-unstyled">
                    @foreach($blogs_new as $latest_blog)
                        <li class="mb-3 border-bottom pb-2">
                            <p>
                                <a href="{{ route('blog.show', $latest_blog->id) }}" class="text-success font-weight-bold">{{ $latest_blog->title }}</a>
                            </p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
      </div>
    </div>
    </div>

    @include('footer')
    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>
</html>
