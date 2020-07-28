<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title', 'Menu') &mdash; {{ env('APP_NAME') }}</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body class="layout-3">
  <div id="app">
  <nav class="navbar navbar-expand-lg navbar-dark bg-success" >
      <a class="navbar-brand" href="/">{{ env('APP_NAME') }}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a style="color: white" class="nav-link" href="index.php"><b>Home</b></a>
          </li>
           @if(session())
              <li class="nav-item">
                <a href="{{ url('logout') }}" style="color: white" class="nav-link" href="login.php">Logout</a>
              </li>
            @endif
        </ul>
      </div>
    </nav>

      <!-- Main Content -->
      <div class="container main-content">
        <section class="section">
         @if(session('level')=='1')
            <div class="row">
              <div class="col-12 mb-4">
                <div class="hero align-items-center bg-primary text-white">
                  <div class="hero-inner text-center">
                    <h2>Menu Master</h2>
                    <p class="lead">{{ ucwords(session('name')) }} Anda {{ session('status') }} Masuk ke Dalam Sistem Pilih Menu yang anda inginkan.</p>
                    <div class="mt-4">
                      <a href="{{ url('/master') }}" class="form-control btn btn-outline-black btn-lg btn-icon icon-left"><i class="fas fa-sign-in-alt"></i> Masuk</a>
                   
                    </div>
                  </div>
                </div>
              </div> 
            </div>
        @endif
         
            <div class="row">
              <div class="col-12 mb-4">
                <div class="hero align-items-center bg-success text-white">
                  <div class="hero-inner text-center">
                    <h2>Menu General Maniskum</h2>
                    <p class="lead">{{ ucwords(session('name')) }} Anda {{ session('status') }} Masuk ke Dalam Sistem Pilih Menu yang anda inginkan.</p>
                    <div class="mt-4">
                      <a href="{{ url('/master') }}" class="form-control btn btn-outline-black btn-lg btn-icon icon-left"><i class="fas fa-sign-in-alt"></i> Masuk</a>
                   
                    </div>
                  </div>
                </div>
              </div> 
            </div>

        </section>
      </div>

    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/modules/popper.js') }}"></script>
  <script src="{{ asset('assets/modules/tooltip.js') }}"></script>
  <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('assets/modules/moment.min.js') }}"></script>
  <script src="{{ asset('assets/js/stisla.js') }}"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="{{ asset('assets/js/scripts.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>