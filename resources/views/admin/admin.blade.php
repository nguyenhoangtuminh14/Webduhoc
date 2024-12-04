<!DOCTYPE html>
<html>
<head>
  <base href="/">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="admin_assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="admin_assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="admin_assets/dist/css/skins/_all-skins.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="/admin" class="logo">
      <span class="logo-mini"><b>A</b>d</span>
      <span class="logo-lg"><b>Admin</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">Xin chào, {{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <p>
                  {{ Auth::user()->name }} - Admin
                  <small>Thành viên từ {{ Auth::user()->created_at->format('d/m/Y') }}</small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <form action="{{ route('admin.logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-flat">Đăng Xuất</button>
                  </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu">
        <li class="header">Menu chính</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Quốc Gia</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route("countries.create")}}"><i class="fa fa-circle-o"></i> Thêm Quốc Gia</a></li>
            <li><a href="{{route("countries.index")}}"><i class="fa fa-circle-o"></i> Danh Sách Quốc Gia</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Bài Viết</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route("blogs.create")}}"><i class="fa fa-circle-o"></i> Thêm Bài Viết</a></li>
            <li><a href="{{route("blogs.index")}}"><i class="fa fa-circle-o"></i> Danh Sách Bài Viết</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Dịch Vụ</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route("services_admin.create")}}"><i class="fa fa-circle-o"></i> Tạo dịch vụ</a></li>
            <li><a href="{{route("services_admin.index")}}"><i class="fa fa-circle-o"></i> Danh sách dịch vụ</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Ngàng Học</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route("fields.create")}}"><i class="fa fa-circle-o"></i> Thêm Ngành Học</a></li>
            <li><a href="{{route("fields.index")}}"><i class="fa fa-circle-o"></i> Danh Ngành Học </a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Học Bổng</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route("scholarships.create")}}"><i class="fa fa-circle-o"></i>Thêm Học Bổng</a></li>
            <li><a href="{{route("scholarships.index")}}"><i class="fa fa-circle-o"></i> Danh Sách Học Bổng</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="{{route("consultation.list")}}">
            <i class="fa fa-files-o"></i>
            <span>Danh Sách ĐK Tư Vấn</span>
            
          </a>
        </li>
        <li>
          <a href="{{route("contact.index")}}">
            <i class="fa fa-envelope"></i> <span>Liên Hệ</span>
          </a>
        </li>
      </ul>
    </section>
  </aside>
  <div class="content-wrapper">
    <div class="box-body">
      @yield('content')
  </div>
  </div>
  <footer class="main-footer">
    <strong>Copyright &copy; 2024 Nguyen Hoang Tu Minh 
  </footer>
  </aside>
  <div class="control-sidebar-bg"></div>
</div>
<script src="admin_assets/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<script src="admin_assets/bootstrap/js/bootstrap.min.js"></script>
<script src="admin_assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="admin_assets/plugins/fastclick/fastclick.js"></script>
<script src="admin_assets/dist/js/app.min.js"></script>
<script src="admin_assets/dist/js/demo.js"></script>
</body>
</html>
