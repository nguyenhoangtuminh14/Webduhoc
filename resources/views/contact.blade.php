<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/DuHocQT.jpg">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>Liên Hệ</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
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

    <div class="page-heading contact-heading header-text" style="background-image: url(assets/images/heading-4-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h2>Liên Hệ</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Nhập Thông Tin Để Liên hệ Với Chúng Tôi</h2>
            </div>
            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="{{ route('contacts.submit') }}" method="POST">  
                  @csrf
                  <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12">
                          <fieldset>
                              <input name="name" type="text" class="form-control" id="name" placeholder="Họ & Tên" required="">
                          </fieldset>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12">
                          <fieldset>
                              <input name="email" type="email" class="form-control" id="email" placeholder="Email" required="">
                          </fieldset>
                      </div>
                      <div class="col-lg-12">
                          <fieldset>
                              <textarea name="message" rows="6" class="form-control" id="message" placeholder="Nội Dung" required=""></textarea>
                          </fieldset>
                      </div>
                      <div class="col-lg-12">
                          <fieldset>
                              <button type="submit" id="form-submit" class="filled-button">Gửi Tin Nhắn</button>
                          </fieldset>
                      </div>
                  </div>
              </form>
          </div>
          </div>
          <div class="find-us">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="left-content">
                    <h4>Liên Hệ Với Chúng Tôi</h4>
                    <p>SDT: 19001919<br>
                      Email: nguyenhoangtuminh14@gmail.com<br>
                    Địa Chỉ : Số 12, Trinh Đình Thảo, Hòa Thạnh, Tân Phú, Tp.HCM</p>
                    <ul class="social-icons">
                      <li><a><i class="fa fa-facebook"></i></a></li>
                      <li><a><i class="fa fa-twitter"></i></a></li>
                      <li><a><i class="fa fa-linkedin"></i></a></li>
                      <li><a><i class="fa fa-behance"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6">
                              <div id="map">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3546.9187367854274!2d106.6319244745173!3d10.775054859220125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ea168a65c0b%3A0x2a4a7dc43e177de1!2zMTIgVHLhu4tuaCDEkMOsbmggVGjhuqNvLCBIb8OgIFRoYW5oLCBUw6JuIFBow7osIEjhu5MgQ2jDrSBNaW5oIDcwMDAwMCwgVmnhu4d0IE5hbQ!5e1!3m2!1svi!2s!4v1730979919167!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                              </div>
                            </div>
              </div>
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
