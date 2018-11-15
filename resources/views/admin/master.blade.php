<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Trang quản trị - Shop phụ kiện</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{!!asset('admin/bootstrap/css/bootstrap.min.css')!!}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{!!asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css')!!}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{!!asset('admin/dist/css/AdminLTE.min.css')!!}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{!!asset('admin/dist/css/skins/_all-skins.min.css')!!}">
  <link rel="stylesheet" href="{!!asset('admin/style.css')!!}">
  <link rel="stylesheet" href="{!!asset('fontawesome/css/font-awesome.min.css')!!}">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>VNShop</b></span>
    </a>

  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{!!asset('admin/dist/img/user2-160x160.jpg')!!}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Bùi Huy Thống</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Đang hoạt động</a>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="active treeview">
          <a href="{!! route('index') !!}">
            <i class="fa fa-dashboard"></i> <span>Tổng quan</span> 
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Quản lý thành viên</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!! route('getAddUser') !!}"><i class="fa fa-circle-o"></i> Thêm thành viên</a></li>
            <li><a href="{!! route('getListUser') !!}"><i class="fa fa-circle-o"></i> Danh sách thành viên</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Quản lý slide </span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!! route('getAddSlide') !!}"><i class="fa fa-circle-o"></i> Thêm slide </a></li>
            <li><a href="{!! route('getListSlide') !!}"><i class="fa fa-circle-o"></i> Danh sách slide</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i>Quản lý danh mục <span></span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Thêm danh mục</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Danh sách danh mục</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <span> <strong style="color:white"><i class="fa fa-arrow-right" aria-hidden="true" style="color:red;margin-right: 10px"></i>Administration Center</strong></span>
      <ol class="breadcrumb">
        <li><a href="{!! route('logout') !!}"><i class="fa fa-dashboard"></i> Đăng xuất</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="{!!asset('admin/plugins/jQuery/jQuery-2.2.0.min.js')!!}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{!!asset('admin/bootstrap/js/bootstrap.min.js')!!}"></script>
<!-- FastClick -->
<script src="{!!asset('admin/plugins/fastclick/fastclick.js')!!}"></script>
<!-- AdminLTE App -->
<script src="{!!asset('admin/dist/js/app.min.js')!!}"></script>
<!-- Sparkline -->
<script src="{!!asset('admin/plugins/sparkline/jquery.sparkline.min.js')!!}"></script>
<!-- jvectormap -->
<script src="{!!asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')!!}"></script>
<script src="{!!asset('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')!!}"></script>
<!-- SlimScroll 1.3.0 -->
<script src="{!!asset('admin/plugins/slimScroll/jquery.slimscroll.min.js')!!}"></script>
<!-- ChartJS 1.0.1 -->
<script src="{!!asset('admin/plugins/chartjs/Chart.min.js')!!}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{!!asset('admin/dist/js/pages/dashboard2.js')!!}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{!!asset('admin/dist/js/demo.js')!!}"></script>
<script src="{!!asset('ckeditor/ckeditor.js')!!}"></script>
</body>
</html>
