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
  </head>
  <body>
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    
    @include('header')
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h2>Dịch Vụ</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    @yield('content')

@include('footer')

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>
</html>
