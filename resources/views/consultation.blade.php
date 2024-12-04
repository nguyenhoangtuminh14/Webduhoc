<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/DuHocQT.jpg">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>Đăng Ký Tư Vấn</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <style>
        .btn-custom {
        background-color: red;
        color: white;
        }
        .service-card {
            border: none;
            border-radius: 10px;
            transition: transform 0.2s;
            margin-bottom: 20px; 
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
            height: 150px; 
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
                        <h2>Đăng Ký Tư Vấn</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-center mb-4">Dịch Vụ Tư Vấn Du Học</h2>
                <div class="row">
                    @foreach($services as $service)
                        <div class="col-md-6 mb-4"> 
                            <div class="card service-card shadow-sm">
                                <a href="{{ route('services.show', $service->id) }}">
                                    <img src="{{ asset($service->image) }}" class="card-img-top" alt="{{ $service->name }}">
                                    <div class="card-body">
                                        <h5 class="service-title">{{ $service->name }}</h5> 
                                        
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            
            <div class="col-md-6"> 
                <h2 class="text-center mb-4">Đăng Ký Nhận Tư Vấn</h2>
                @if(session('success'))
                    <div class="alert alert-success text-center">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('registrations.store') }}" method="POST" class="mt-3 border p-4 rounded shadow">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="first_name">Tên</label>
                            <input type="text" class="form-control" name="first_name" placeholder="Nhập tên" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="last_name">Họ</label>
                            <input type="text" class="form-control" name="last_name" placeholder="Nhập họ" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Nhập email" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="phone">Số điện thoại</label>
                            <input type="tel" class="form-control" name="phone" placeholder="Nhập số điện thoại" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="education_level">Trình độ học vấn:</label>
                        <select name="education_level" class="form-control" required>
                            <option value="">Chọn trình độ học vấn</option>
                            <option value="Trung học phổ thông">Trung học phổ thông</option>
                            <option value="Trung cấp">Trung cấp</option>
                            <option value="Cao đẳng">Cao đẳng</option>
                            <option value="Đại học">Đại học</option>
                            <option value="Cao học">Cao học</option>
                            <option value="Khác">Khác</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="country_id">Lựa chọn quốc gia du học:</label>
                        <select name="country_id" class="form-control" required>
                            <option value="">Chọn quốc gia</option>
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="service_id">Lựa chọn dịch vụ tư vấn:</label>
                        <select name="service_id" class="form-control" required>
                            <option value="">Chọn dịch vụ</option>
                            @foreach($services as $service)
                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="datetime">Chọn ngày và giờ tư vấn:</label>
                        <input type="datetime-local" class="form-control" name="datetime" required>
                    </div>
                    <button type="submit" class="btn btn-success btn-block mt-3">Đăng Ký</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Danh Sách Học Bổng</h2>
    
        <h3 class="mb-3">Học Bổng Toàn Phần</h3>
        <table class="table table-bordered mb-4">
            <thead class="thead-light">
                <tr>
                    <th>Tên Học Bổng</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($fullScholarships as $scholarship)
                    <tr>
                        <td>   {{ $scholarship->name }}</td>
                        <td>
                            <a href="{{ route('scholarships.showScholarship', $scholarship->id) }}" class="btn btn-custom btn-sm">Xem Chi Tiết</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    
        <h3 class="mb-3">Học Bổng Bán Phần</h3>
        <table class="table table-bordered mb-4">
            <thead class="thead-light">
                <tr>
                    <th>Tên Học Bổng</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($partialScholarships as $scholarship)
                    <tr>
                        <td>{{ $scholarship->name }}</td>
                        <td>
                            <a href="{{ route('scholarships.showScholarship', $scholarship->id) }}" class="btn btn-custom btn-sm">Xem Chi Tiết</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    
        <h3 class="mb-3">Học Bổng Theo Ngành</h3>
        <table class="table table-bordered mb-4">
            <thead class="thead-light">
                <tr>
                    <th>Tên Học Bổng</th>
                    <th>Tên Ngành</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($fieldScholarships as $scholarship)
                    <tr>
                        <td>{{ $scholarship->name }}</td>
                        <td>{{ $scholarship->field->name }}</td>
                        <td>
                            <a href="{{ route('scholarships.showScholarship', $scholarship->id) }}" class="btn btn-custom btn-sm">Xem Chi Tiết</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('footer')
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
</body>
</html>