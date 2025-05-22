<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registrar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('app/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('app/dist/css/adminlte.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="login-logo">
            <a href="../../index2.html" class="text-dark"><b>Max:</b>In The Lost Jungle</a>
        </div>


        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Registro</p>

                <form action="{{ route('registro') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input class="form-control" type="text" name="nombre" required placeholder="Nombre" />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <select class="form-control" name="edad" required>
                            <option value="">Selecciona tu edad</option>
                            <option value="1">20-30</option>
                            <option value="2">30-40</option>
                            <option value="3">40-50</option>
                            <option value="4">50-60</option>
                        </select>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-calendar-alt"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <select class="form-control" name="genero" required>
                            <option value="">Seleccione su género</option>
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                        </select>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-venus-mars"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input class="form-control" type="email" name="email" required placeholder="Email" />
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
                    <div class="input-group mb-3">
                        <input class="form-control" type="file" name="foto" placeholder="Foto" />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-image"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <button type="submit" class="btn btn-success btn-block">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.card -->
    </div>
    <style>
        /* Fondo de la página de registro */
        .register-page {
            background: rgb(233, 233, 233);
            /* Color de fondo como base */
            background-image: url("{{ asset('imagenes/fondo2.jpg') }}");
            /* La ruta de la imagen */
            background-size: cover;
            /* Hace que la imagen cubra toda la pantalla */
            background-position: center center;
            /* Centra la imagen */
            background-repeat: no-repeat;
            /* Evita que la imagen se repita */
        }
    </style>

    <script src="{{ asset('app/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('app/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('app/dist/js/adminlte.min.js') }}"></script>
</body>

</html>