<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log In</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="adminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="adminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminLTE/dist/css/adminlte.min.css">
  <!-- loginstyle -->
  <link rel="stylesheet" href="assets">
  <link rel="stylesheet" href="{{ asset('boostrap/boostrap/css/bootstrap.min.css') }}">
  
</head>
<body class="hold-transition login-page bg-dark">

  <div class="login-box">
  <!-- /.login-logo -->
      <div class="card card-outline-dark ">
        <div class="card-header text-center bg-black">
          <a href="{{route('layout.login')}}" class="h1 text-warning"><b>Show</b>Shoes.</a>
        </div>
        <div class="card-body">
          <p class="login-box-msg">Silahkan Log In terlebih dahulu...</p>

          <form action="{{url('/proses-login')}}" method="post">
            @csrf
            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="Email"  name="email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Password" name="password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-dark">
                  <button class="btn btn-primary" type="submit" href="{{route('user.product')}}" >Log in</button>
                </div>
              </div>
              <div>
               
              </div>
            </div>
              <!-- /.col -->
            </div>
          </form>
          <!-- /.social-auth-links -->


        </div>
      </div>
    </div>
    <!-- /.login-box -->

  

  <!-- jQuery -->
  <script src="adminLTE/plugins/jquery/jquery.min.js"></script>
  <script src="{{ asset('boostrap/boostrap/js/bootstrap.min.js') }}"></script>
    <!-- jQuery -->
  <script src="adminLTE/plugins/jquery/jquery.min.js"></>
  <!-- Bootstrap 4 -->
  <script src="adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="adminLTE/dist/js/adminlte.min.js"></script>
</body>
</html>
