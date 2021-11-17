<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Askbootstrap">
    <meta name="author" content="Askbootstrap">
    <link rel="icon" type="image/png" href="{{asset('img/logo_gs.png')}}">
    <title>Decoraciones GS</title>
    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.min.css" />
    <!-- Feather Icon-->
    <link href="vendor/icons/feather.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/styles.css?v=<?php echo time(); ?>" rel="stylesheet">
    <!-- Sidebar CSS -->
    <link href="vendor/sidebar/demo.css" rel="stylesheet">
</head>

<body>
    <form method="POST" action="{{ route('register') }}">
        @csrf
    <div class="osahan-signup login-page">
        <video loop autoplay muted id="vid">
            <source src="img/prueba_3.mp4" type="video/mp4">
            <source src="img/prueba_3.mp4" type="video/ogg">
            No se soporta el formato de video.
        </video>
        <div class="d-flex align-items-center justify-content-center flex-column">
            <div class="px-5 col-md-6 ml-auto">
                <div class="px-5 col-10 mx-auto">
                <br>
                    <h2 class="text-dark my-0">Hola Alli.</h2>
                    <p class="text-50">Registrate para continuar</p>
                    <form class="mt-5 mb-4" action="verification.html">
                        <div class="form-group">
                            <label for="exampleInputName1" class="text-dark">Nombre</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"  aria-describedby="nameHelp" name="name" value="{{ old('name') }}" required autocomplete="nombre" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="apellido" class="text-dark">Apellido</label>
                            <input id="apellido" type="text" class="form-control" name="apellido" value="{{ old('apellido') }}" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1" class="text-dark">Correo Electronico</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"  aria-describedby="nameHelp" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="codigo_cliente" class="text-dark">Numero de Identidad</label>
                            <input type="text" placeholder="" required autofocus name="codigo_cliente" class="form-control" id="codigo_cliente" >
                        </div>
                        <div class="form-group">
                            <label for="telefono" class="text-dark">Telefono de Contacto</label>
                            <input type="text" placeholder="" required autofocus name="telefono" class="form-control" id="telefono">
                        </div>
                        <div class="form-group">
                            <label for="sexo">Sexo</label>
                            <select name="sexo" required autofocus  id="sexo" class="form-control input-rounded">
                              <option value="">Selecione..</option>
                              <option value="Femenino">Femenino</option>
                              <option value="Masculino">Masculino</option>
                            </select>
                         </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="text-dark">Contraseña</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="text-dark">Confirmar Contraseña</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <button class="btn btn-primary btn-lg btn-block" type="submit">
                           REGISTRARSE
                        </button>
                    </form>
                </div>
                <div class="new-acc d-flex align-items-center justify-content-center">
                    <a href="{{route ('login')}}">
                        <br>
                        <p class="text-center m-0">Ya tienes una cuenta? Inicia Sesion</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
 
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- slick Slider JS-->
    <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
    <!-- Sidebar JS-->
    <script type="text/javascript" src="vendor/sidebar/hc-offcanvas-nav.js"></script>
    <!-- Custom scripts for all pages-->
    <script type="text/javascript" src="js/osahan.js"></script>
</body>

</html>
