<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('app/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('app/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html" class="text-dark"><b>Max:</b>In The Lost Jungle</a>
    </div>


    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Bienvenido</p>

        <form action="{{ action([App\Http\Controllers\LoginController::class, 'iniciar_sesion']) }}"
          enctype="multipart/form-data" method="POST">
          {{csrf_field()}}
          <div class="input-group mb-3">
            <input class="form-control" type="email" name="email" placeholder="Email" />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input class="form-control" type="password" name="password" placeholder="Password" />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-5">
              <button type="submit" class="btn btn-success btn-block">Iniciar Sesión</button>
            </div>
          </div>

        </form>
        <!-- Register Link -->
        <p class="mb-1 mt-3 text-center">
          ¿No tienes una cuenta? <a href="{{ route('registro') }}">Regístrate aquí</a>
        </p>

      </div>
      <!-- /.login-card-body -->
    </div>
    <style>
      .login-page {
        background: rgb(233, 233, 233);
        /* Color de fondo como base */
        background-image: url("{{ asset('imagenes/fondo.jpg') }}");
        background-size: cover;
        /* Hace que la imagen cubra toda el área */
        background-position: center center;
        /* Centra la imagen */
        background-repeat: no-repeat;
        /* Evita que la imagen se repita */
      }
    </style>
  </div>

  <!-- jQuery -->
  <script src="{{ asset('app/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('app/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('app/dist/js/adminlte.min.js') }}"></script>
</body>

</html>