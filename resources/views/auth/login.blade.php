<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700&display=swap">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('lte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- iCheck Bootstrap -->
  <link rel="stylesheet" href="{{asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- AdminLTE -->
  <link rel="stylesheet" href="{{asset('lte/dist/css/adminlte.min.css')}}">

  <style>
    html, body {
      height: 100%;
      margin: 0;
      background: linear-gradient(135deg, #a8e063, #56ab2f);
      font-family: 'Segoe UI', sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .sidebar-logo { 
      display: block; 
      margin: 0 auto; 
      width: 80px; /* Atur ukuran sesuai kebutuhan */ 
      height: 80px; 
      object-fit: cover; 
      opacity: 0.9; }

    .login-box {
      width: 100%;
      max-width: 400px;
      animation: fadeInUp 0.6s ease forwards;
      opacity: 0;
    }

    .card {
      border-radius: 16px;
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
      overflow: hidden;
      transition: all 0.3s ease;
    }

    .card:hover {
      box-shadow: 0 18px 45px rgba(0, 0, 0, 0.2);
    }

    .card-header {
      background-color: #2e7d32;
      color: white;
      border-bottom: none;
    }

    .card-header .fas {
      font-size: 40px;
      margin-bottom: 5px;
      animation: zoomIn 0.5s ease;
    }

    .card-header a {
      font-size: 26px;
      font-weight: bold;
      color: white;
      text-decoration: none;
    }

    .login-box-msg {
      font-size: 16px;
      color: #444;
      margin-bottom: 20px;
    }

    .btn-primary {
      background-color: #2e7d32;
      border-color: #2e7d32;
      border-radius: 50px;
      font-weight: bold;
    }

    .btn-primary:hover {
      background-color: #256d27;
      border-color: #256d27;
    }

    .text-center a {
      color: #2e7d32;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes zoomIn {
      from {
        transform: scale(0.85);
        opacity: 0;
      }
      to {
        transform: scale(1);
        opacity: 1;
      }
    }

    label {
      font-weight: 500;
      margin-bottom: 4px;
    }
  </style>
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="card card-outline">
      <div class="card-header text-center">
        <img src="{{asset('lte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="sidebar-logo img-circle elevation-3">
        <a href="./login"><b>Login</b> Page</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Silahkan Login</p>

        <form action="/login" method="post">
          @csrf
          <div class="mb-3">
            <label for="email">Email</label>
            <div class="input-group">
              <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="password">Password</label>
            <div class="input-group">
              <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
          </div>
        </form>

        <p class="mt-3 mb-0 text-center">
          <a href="/register" class="text-center">Belum Punya Akun? Register</a>
        </p>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="{{asset('lte/plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('lte/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
