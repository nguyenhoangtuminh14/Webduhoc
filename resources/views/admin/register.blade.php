<!DOCTYPE html>
<html>
<head>
    <base href="/">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin | Register</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="admin_assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="admin_assets/dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="admin_assets/plugins/iCheck/square/blue.css">
<body class="hold-transition login-page">
<div class="login-box">
<div class="login-logo">
  <b>Admin</b>
</div>
<div class="login-box-body">
    <p class="login-box-msg">Đăng Ký</p>
    <form action="" method="post">
        @csrf
        <div class="form-group has-feedback">
            <label for="">Tên</label>
            <input type="name" name="name"class="form-control" placeholder="Nhập Tên">
            @error('name')
            <small>{{$message}}</small>
            @enderror
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
    <div class="form-group has-feedback">
        <label for="email">Email</label>
        <input type="email" name="email"class="form-control" placeholder="Nhập Email">
        @error('email')
        <small>{{$message}}</small>
        @enderror
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
        <label for="password">Mật Khẩu</label>
        <input type="password" name="password" class="form-control" placeholder="Nhập Mật Khẩu">
        @error('password')
        <small>{{$message}}</small>
        @enderror
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
        <label for="">Nhập lại Mật Khẩu</label>
        <input type="password" name="confirm_password" class="form-control" placeholder="Nhập Lại Mật Khẩu">
        @error('confirm_password')
        <small>{{$message}}</small>
        @enderror
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="row">
        <div class="col-xs-8">
        </div>
        <div class="col-xs-6">
        <button type="submit" class="btn btn-primary btn-block btn-flat">Đăng Ký</button>
        <a href="{{route('admin.login')}}">Đăng Nhập</a>
        </div>
    </div>
    </form>
</div>
</div>
</body>
</html>


