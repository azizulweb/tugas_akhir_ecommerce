<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Show Shoes</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('adminLTE/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('adminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('adminLTE/dist/css/adminlte.min.css')}}">
    <!-- loginstyle -->
    {{-- <link rel="stylesheet" href="{{asset('adminLTE/dist/css/adminlte.min.css')}}"> --}}
    <!--Boostrap-->
    <link rel="stylesheet" href="{{asset('bootstrap-5.3/css/bootstrap.min.css')}}">

   
</head>
<style>
  h1 {
    color: rgba(32, 30, 30, 0.849);
    font-family: 'Poppins', sans-serif;
    font-style: italic;
  }
  .content-wrapper {
  background-image: url("{{asset('assets/img/men/2.webp')}}");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  position: relative;
}

.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
    width: 70%;
    margin: auto;
  }
</style>


<body class="hold-transition sidebar-mini fw-bold">
  <div class="wrapper">

    <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-dark navbar-light ">
        <!  -- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars "></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="{{url('/')}}" type="button" class="nav-link ">Home</a>
          </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto ">
          <!-- Navbar Search -->
          <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
              <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
              <form class="form-inline">
                <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </li>


          <!--Dropdown Menu -->

          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
              <i class="fas fa-th-large"></i>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->

    <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
          <!-- Brand Logo -->
          <a href="index.html" class="brand-link">
            <img src="{{ asset('assets/img/ShoesLogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light-bold">ShowShoes.</span>
          </a>

          <!-- Sidebar -->
          <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                <img src="{{ asset('assets/img/ShoesLogo.png') }}" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                <a href="#" class="d-block">Muhanif Azizul Fikri</a>
              </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
              <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                  </button>
                </div>
              </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2 ">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                  with font-awesome or any other icon font library -->
                <li class="nav-item menu-open ">
                  <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                      Starter Pages
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{route('user.DataOrder', Auth::user()->id)}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Riwayat Pesanan</p>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
            <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
        </aside>
        

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <!-- JuduL Kategori -->
          <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-white">Men's</h1>
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- Kategori Men -->
          <div class="row row-cols-md-3 row-cols-2 gx-5 p-5">
            @foreach ( $man as $item )
            <div class="col mb-5">
              <div class="card shadow">
                  <img src="{{ asset($item->image) }}" class="card-img-top">
                  <div class="card-body ">
                      <h5 class="card-title">{{$item->category}}</h5>
                      <p class="card-text">{{$item->deskripsi}}</p>
                  </div>

                  <div class="card-footer d-md-flex">
                      <a href="{{route('user.detail.category', $item->id)}}" class="btn btn-primary d-block">detail</a>
                      <span class="m-auto text-dark fw-bold d-block text-center">Rp. 150.000-300.000</span>
                  </div>

              </div>
          </div>
            @endforeach
        </div>

        <!-- JuduL Kategori -->
        <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-0 text-white">Women's</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
              </div><!-- /.container-fluid -->
            </div>

        <!-- KategorI Women -->
        <div class="row row-cols-md-3 row-cols-2 gx-5 p-5">

          @foreach ( $woman as $item )
          <div class="col mb-5">
            <div class="card shadow">
                <img src="{{ asset($item->image) }}" class="card-img-top">
                <div class="card-body ">
                    <h5 class="card-title">{{$item->category}}</h5>
                    <p class="card-text">{{$item->deskripsi}}</p>
                </div>

                <div class="card-footer d-md-flex">
                  <a href="{{route('user.detail.category', $item->id)}}" class="btn btn-primary d-block">detail</a>
                    <span class="m-auto text-dark fw-bold d-block text-center">Rp. 150.000-300.000</span>
                </div>

            </div>
        </div>
          @endforeach
        </div>
      </div>
    </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
          <div class="p-3">
            <h5>Title</h5>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="btn btn-danger text-white" >Log Out</button>
          </form>
          </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
          <!-- To the right -->
          <div class="float-right d-none d-sm-inline">
            Anything you want
          </div>
          <!-- Default to the left -->
          <strong>Copyright &copy; 2024<a href="https://adminlte.io">Aziezul.fichri</a>.</strong> All rights reserved.
        </footer>
      </div>
      <!-- ./wrapper -->

      <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <script src="{{ asset('bootstrap-5.3/js/bootstrap.min.js') }}"></script>
  <script src="{{asset('adminLTE/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('adminLTE/dist/js/adminlte.min.js')}}"></script>
</body>
</html>