<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Landing Page</title>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700&display=swap">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('lte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{asset('lte/plugins/bootstrap/css/bootstrap.min.css')}}">
  <!-- AdminLTE -->
  <link rel="stylesheet" href="{{asset('lte/dist/css/adminlte.min.css')}}">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="{{asset('lte/plugins/fontawesome-free/css/all.min.css')}}">


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

  .container {
    padding: 60px 20px;
  }

  .scaling-wrapper {
    transform: scale(1);
    transform-origin: center;
  }

  .card.shadow {
    border: none;
    border-radius: 16px;
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    background-color: #ffffff;
  }

  .card.shadow:hover {
    box-shadow: 0 18px 45px rgba(0, 0, 0, 0.15);
  }

  .card-border-top {
    height: 6px;
    background-color: #2e7d32;
    border-radius: 6px 6px 0 0;
  }

  .card-header a {
    font-size: 28px;
    color: #2e7d32;
    text-decoration: none;
  }

  .card-header a b {
    color: #000;
  }

  .icon-hospital {
    font-size: 42px;
    color: #2e7d32;
    margin-bottom: 10px;
    animation: zoomIn 0.4s ease-in-out;
  }

  .text-muted {
    font-size: 15px;
    color: #6c757d;
  }

  .btn-success, .btn-primary {
    border-radius: 50px;
    font-weight: 600;
    padding: 8px 20px;
  }

  .btn-success:hover,
  .btn-primary:hover {
    opacity: 0.9;
  }

  @media (max-width: 768px) {
    .card-body {
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .d-flex.flex-column {
      width: 100%;
      margin-top: 20px;
    }

    .d-flex.flex-column a {
      width: 100%;
    }
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
      opacity: 0;
      transform: scale(0.8);
    }
    to {
      opacity: 1;
      transform: scale(1);
    }
  }

  .fade-in {
    animation: fadeInUp 0.6s ease forwards;
    opacity: 0;
  }

  .fade-in-delay-1 { animation-delay: 0.2s; }
  .fade-in-delay-2 { animation-delay: 0.4s; }
  .fade-in-delay-3 { animation-delay: 0.6s; }
</style>
</head>

<body>

  <!-- Ganti bagian card dan layout-nya seperti ini -->
  <!-- Bagian card -->

<body>
  <div style="min-height: 100vh; display: flex; align-items: center; justify-content: center;">
    <div class="container d-flex justify-content-center align-items-center">
      <div class="scaling-wrapper">
        <div class="card shadow fade-in fade-in-delay-1" style="width: 600px;">
          <div class="card-border-top"></div>
          <div class="card-body d-flex justify-content-between align-items-center px-4 py-4">
            <div class="me-3 fade-in fade-in-delay-2" style="flex: 1;">
              <div class="text-center mb-2">
                <i class="fas fa-hospital-symbol icon-hospital"></i>
              </div>
              <div class="card-header text-center p-0 mb-2 border-0">
                <a href="./"><b>Selamat</b> Datang</a>
              </div>
              <hr style="width: 90%; margin: 10px auto 12px auto;">
              <p class="text-muted text-center mb-0 px-2">
                Silakan masuk atau daftar untuk melanjutkan ke sistem manajemen klinik.
              </p>
            </div>
            <div class="d-flex flex-column fade-in fade-in-delay-3" style="width: 170px;">
              <a href="/login" class="btn btn-success mb-2">Login</a>
              <a href="/register" class="btn btn-primary">Register</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>


  <!-- Scripts -->
  <script src="{{asset('lte/plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('lte/dist/js/adminlte.min.js')}}"></script>
</body>

</html>