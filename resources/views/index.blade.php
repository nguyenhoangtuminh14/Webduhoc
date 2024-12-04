  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="assets/images/DuHocQT.jpg">
      <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
      <title>DU HỌC QT</title>
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="assets/css/fontawesome.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/owl.css">
      <style>
        .card {
            border-radius: 10px;
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
        }
        .card-text {
            font-size: 1rem;
            color: #555;
        }
        .lead {
            font-size: 1.2rem;
            color: #666;
        }
        .banner {
        position: relative;
        overflow: hidden;
        }
        .owl-carousel .banner-item {
        background-size: cover;
        background-position: center;
        height: 500px; 
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
        padding: 20px;
        transition: transform 0.3s ease;
        }

        .banner-item:hover {
        transform: scale(1.05);
        }

        .text-content {
        background: rgba(0, 0, 0, 0.5); 
        padding: 30px;
        border-radius: 10px;
        }

        .banner-subtitle {
        font-size: 1.5rem;
        font-weight: bold;
        }

        .banner-title {
        font-size: 2.5rem;
        font-weight: bold;
        margin: 10px 0;
        }

        .banner-description {
        color: #d71010;
        font-size: 1.2rem;
        margin-bottom: 20px;
        }

        .btn-primary {
        background-color: #007bff;
        border: none;
        padding: 10px 20px;
        font-size: 1rem;
        border-radius: 5px;
        transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
        background-color: #0056b3;
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
      <div class="banner header-text">
        <div class="owl-banner owl-carousel">
          <div class="banner-item-01">
            <div class="text-content">
              <h4 class="banner-subtitle">DU HỌC NGAY HÔM NAY!</h4>
              <h2 class="banner-title">Du Học Khó Có Du Học QT Lo</h2>
              <p class="banner-description">Khám phá những cơ hội học tập tuyệt vời với chúng tôi.</p>
             
          </div>
          </div>
          <div class="banner-item-02">
            <div class="text-content">
              <h4 class="banner-subtitle">Hỗ Trợ Học Bổng</h4>
              <h2 class="banner-title">Hỗ Trợ Cấp Visa, Hồ Sơ Đăng Ký</h2>
              <p class="banner-description">Chúng tôi sẽ đồng hành cùng bạn trong từng bước.</p>
             
          </div>
          </div>
          <div class="banner-item-03">
            <div class="text-content">
              <h4 class="banner-subtitle">Du Học Chưa Bao Giờ Dễ Dàng Như Bây Giờ</h4>
              <h2 class="banner-title">Đến với chúng tôi để thực hiện ước mơ du học!</h2>
              <p class="banner-description">Bước vào hành trình du học với sự hỗ trợ tối đa.</p>
              
          </div>
          </div>
        </div>
      
      
      <div class="best-features">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
              </div>
            </div>
            <div class="container mt-5">
              <div class="row text-center mb-4">
                  <div class="col-md-12">
                      <h2 style="color: red;">Du Học QT</h2>
                      <p class="lead">Công ty Tư vấn Du học QT tự hào là đơn vị hàng đầu trong lĩnh vực tư vấn du học. Chúng tôi cam kết mang đến những giải pháp tư vấn toàn diện và chuyên nghiệp, từ việc chọn trường, chuẩn bị hồ sơ, đến hỗ trợ xin visa và tìm kiếm học bổng.</p>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-3">
                      <div class="card shadow-sm border-light">
                          <img src="assets/images/tam-nhin.jpg" alt="Tầm Nhìn" class="card-img-top" style="height: 170px; object-fit: cover;">
                          <div class="card-body text-center">
                              <h3 class="card-title">Tầm Nhìn</h3>
                              <p class="card-text">Định hướng phát triển Du Học QT sẽ trở thành Tổ chức giáo dục bao gồm các lĩnh vực: Du học, Đào tạo, Định cư giúp người Việt nâng cao tri thức và cuộc sống tốt đẹp hơn.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="card shadow-sm border-light">
                          <img src="assets/images/su-menh.jpg" alt="Sứ Mệnh" class="card-img-top" style="height: 170px; object-fit: cover;">
                          <div class="card-body text-center">
                              <h3 class="card-title">Sứ Mệnh</h3>
                              <p class="card-text">Với sứ mệnh giúp các bạn trẻ Việt tiếp cận nền giáo dục trên toàn thế giới. Đội ngũ chuyên gia giàu kinh nghiệm và tận tâm đồng hành cùng bạn chinh phục ước mơ du học.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="card shadow-sm border-light">
                          <img src="assets/images/gia-tri-cot-loi.jpg" alt="Giá Trị Cốt Lõi" class="card-img-top" style="height: 170px; object-fit: cover;">
                          <div class="card-body text-center">
                              <h3 class="card-title">GIÁ TRỊ CỐT LÕI</h3>
                              <p class="card-text">Nhân văn – Chân thành - Chất lượng – Hiệu quả.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          </div>
        </div>
      </div>
      <div class="container">
          <div class="row">
          <div class="col-md-12">
              <div class="section-heading">
              <h2 style="color: red;">Với Hơn 10 Quốc Gia Hành Đầu Về Giáo Dục</h2>
              </div>
            </div>
            <div class="col-md-3">
            <div class="left-content">
            <img src="assets/images/co-my.jpg" alt="co-my" width="230"height="120">
            <p class="card-text">Mỹ</p>
            </div>
            </div>
            <div class="col-md-3">
            <div class="left-content">
            <img src="assets/images/co-canada.png" alt="co-canada" width="230" height="120">
            <p class="card-text">Canada</p>
            </div>
            </div>
            <div class="col-md-3">
            <div class="left-content">
            <img src="assets/images/co-anh.png" alt="co-anh" width="230" height="120">
            <p class="card-text">Anh</p>
            </div>
            </div>
            <div class="col-md-3">
            <div class="left-content">
            <img src="assets/images/co-tay-ban-nha.png" alt="co-tay-ban-nha" width="230" height="120">
            <p class="card-text">Tây Ban Nha</p>
            </div>
            </div>
            <div class="col-md-3">
            <div class="left-content">
            <img src="assets/images/co-nhat.png" alt="co-nhat" width="230" height="120">
            <p class="card-text">Nhật</p>
            </div>
            </div>
            <div class="col-md-3">
            <div class="left-content">
            <img src="assets/images/co-duc.png" alt="co-duc" width="230"height="120">
            <p class="card-text">Đức</p>
            </div>
            </div>
            <div class="col-md-3">
            <div class="left-content">
            <img src="assets/images/co-phap.png" alt="co-phap" width="230" height="120">
            <p class="card-text">Pháp</p>
            </div>
            </div>
            <div class="col-md-3">
            <div class="left-content">
            <img src="assets/images/co-thuy-dien.png" alt="co-thuy-dien" width="230" height="120">
            <p class="card-text">Thụy Điển</p>
            </div>
            </div>
            <div class="col-md-3">
            <div class="left-content">
            <img src="assets/images/co-trung.jpg" alt="co-trung" width="230" height="120">
            <p class="card-text">Trung Quốc</p>
            </div>
            </div>
            <div class="col-md-3">
            <div class="left-content">
            <img src="assets/images/co-uc.png" alt="co-uc" width="230" height="120">
            <p class="card-text">Australia</p>
            </div>
            </div>
            <div class="col-md-3">
            <div class="left-content">
            <img src="assets/images/co-ha-lan.png" alt="co-ha-lan" width="230" height="120">
            <p class="card-text">Hà Lan</p>
            </div>
            </div>
            
            
          </div>
      </div>

      <div class="services" style="background-image: url(assets/images/other-image-fullscren-1-1920x900.jpg);" >
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Tin Tức Mới</h2>

                <a href="/all_blogs">Xem Thêm <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
            @foreach($blogs_new as $blog)
            <div class="col-lg-4 col-md-6">
              <div class="service-item">
                <a href="{{ route('blog.show', $blog->id) }}" class="services-item-image">
                  <img src="{{ asset($blog->image) }}" class="img-fluid" alt=""></a>

                <div class="down-content">
                  <h4><a href="{{ route('blog.show', $blog->id) }}">{{ $blog->title }}</a></h4>

                  <p style="margin: 0;"> {{ $blog->author }} &nbsp;&nbsp;|&nbsp;&nbsp; 
                    {{ $blog->created_at->format('d/m/Y H:i') }} &nbsp;&nbsp;|&nbsp;&nbsp; {{ $blog->views }}</p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <div class="call-to-action">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="inner-content">
                <div class="row">
                  <div class="col-md-8">
                    <h4>Tư Vấn Với Các Chính Sách Mới Hổ Trợ Du Học, Làm Hồ Sơ.</h4>
                    <p>Đội ngũ nhân viên nhiệt tình, tận tâm giúp bạn tư vấn chọn học bổng, làm hồ sơ du học</p>
                  </div>
                  <div class="col-lg-4 col-md-6 text-right">
                    <a href="consultation" class="filled-button">Đăng Ký Tư Vấn Ngay</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="call-to-action">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="inner-content">
                <div class="row">
                  <div class="col-md-8">
                    <h4>Với Hơn 20 Học Bổng Mới</h4>
                    <p>Các học bổng bán phần và toàn phần giá trị lên đến 500.000$, và học bổng theo ngành cho tất cả quốc gia, hổ trợ bạn trên con đường du học.</p>
                  </div>
                  <div class="col-lg-4 col-md-6 text-right">
                    <a href="/scholarshipss" class="filled-button">Xem Ngay</a>
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