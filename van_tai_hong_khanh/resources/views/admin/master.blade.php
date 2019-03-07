
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.4.8/collection/icon/icon.css">
  <link rel="stylesheet" href="{{url('/')}}/css/adminLTE/AdminLTE.min.css">
  <link rel="stylesheet" href="{{url('/')}}/css/adminLTE/skin-blue.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="{{asset('js/adminLTE/adminlte.min.js')}}"></script>
  <script src="//cdn.ckeditor.com/4.11.3/full/ckeditor.js"></script>
  @section('css')
  
  @show
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a class="logo" href="/admin">
      <span class="logo-mini"><b>A</b>LT</span>
      <span class="logo-lg"><b>Trang Admin</b></span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
     
    </nav>
  </header>

  <aside class="main-sidebar">
    
    <section class="sidebar">
    @section('sidebar')
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- <li><a href="{{url('admin/banner-top')}}"><i class="fa fa-link"></i> <span>BANER TOP</span></a></li> -->
        <li><a href="{{url('admin/gioi-thieu')}}"><i class="fa fa-link"></i> <span>GIỚI THIỆU</span></a></li>
        <li><a href="{{url('admin/dich-vu')}}"><i class="fa fa-link"></i> <span>DỊCH VỤ</span></a></li>
        <li><a href="{{url('admin/ban-xe')}}"><i class="fa fa-link"></i> <span>BÁN XE</span></a></li>
        <!-- <li><a href="{{url('admin/dang-ky-hoc')}}"><i class="fa fa-link"></i> <span>ĐĂNG KÝ HỌC</span></a></li> -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-link"></i> <span>MÔI GiỚI BĐS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('admin/moi-gioi-bds')}}"><i class="fa fa-circle-o"></i>LOẠI MÔI GIỚI BĐS</a></li>
            <li><a href="{{url('admin/san-pham-moi-gioi-bds')}}"><i class="fa fa-circle-o"></i>SẢN PHẨM MÔI GIỚI BĐS</a></li>
          </ul>
        </li>
        
        <li><a href="{{url('admin/tuyen-dung')}}"><i class="fa fa-link"></i> <span>TUYỂN DỤNG</span></a></li>
        <li><a href="{{url('admin/tin-tuc')}}"><i class="fa fa-link"></i> <span>TIN TỨC</span></a></li>
        <li><a href="{{url('admin/lien-he')}}"><i class="fa fa-link"></i> <span>LIÊN HỆ</span></a></li>
        <li><a href="{{url('admin/thong-tin-lien-he')}}"><i class="fa fa-link"></i> <span>THÔNG TIN LIÊN HỆ</span></a></li>
        <li><a href="{{url('admin/slider')}}"><i class="fa fa-link"></i> <span>SLIDER</span></a></li>
        <li><a href="{{url('admin/video-clip')}}"><i class="fa fa-link"></i> <span>VIDEO CLIP</span></a></li>
        <li><a href="{{url('admin/tin-tuc-su-kien')}}"><i class="fa fa-link"></i> <span>TIN TỨC - SỰ KIỆN </span></a></li>
        <li><a href="{{url('admin/gio-hoat-dong')}}"><i class="fa fa-link"></i> <span>GIỜ HOẠT ĐỘNG</span></a></li>
        <li><a href="{{url('admin/thu-vien-anh')}}"><i class="fa fa-link"></i> <span>THƯ VIỆN ẢNH</span></a></li>
        <li><a href="{{url('admin/footer')}}"><i class="fa fa-link"></i> <span>FOOTER, BẢN ĐỒ</span></a></li>
        <li><a href="{{url('admin/cai-dat')}}"><i class="fa fa-link"></i> <span>CÀI ĐẶT</span></a></li>
      </ul>
    @show
    </section>
    
  </aside>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      @section('content-header')
      <!--
        Page Header
        <small>Optional description</small>
        -->
      @show
      </h1>
      <hr>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>
    <section class="content container-fluid">
    @section('content')
    @show
      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
  </div>
  <footer class="main-footer">
    
  </footer>
  <div class="control-sidebar-bg"></div>
</div>

@section('js')
@show
</body>
</html>