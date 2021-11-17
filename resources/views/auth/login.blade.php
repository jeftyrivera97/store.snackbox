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

    <style>
        body{
            background: #e1eec3;  
            background: -webkit-linear-gradient(to right, #f05053, #e1eec3); 
            background: linear-gradient(to right, #f05053, #e1eec3); 

        }
    </style>
</head>

<body>
    <form method="POST" action="{{ route('login') }}">
        @csrf
    <div class="login-page-login vh-100">
   

        <div class="d-flex align-items-center justify-content-center vh-100">
           
            <div class="px-5 col-md-6 ml-auto">
               
                <div class="px-5 col-10 mx-auto"> <img src="{{asset('img/logo_gs.png')}}" width="100" height="100" alt="">
                    <b><h3 class="text-dark my-0">Bienvenido</h3></b>
                    <b><p class="text-50">Inicia Sesion</p></b>
                    <form class="mt-5 mb-4" action="verification.html">
                        <div class="form-group">
                            <b><label for="exampleInputEmail1" class="text-dark">Correo Electronico</label></b>
                            <input id="email" type="email" placeholder="Ingresa tu correo electronico" class="form-control @error('email') is-invalid @enderror" placeholder="" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <b><label for="exampleInputPassword1" class="text-dark">Contraseña</label></b>
                            <input  id="exampleInputPassword1" type="password" placeholder="Ingresa tu contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <b><button  type="submit" class="btn btn-primary btn-lg btn-block">INGRESAR</button></b>
                        <br>
                        
                    </form>
                    <a href="{{ route('password.request')}}" class="text-decoration-none">
                        <p class="text-center">Olvidaste tu contraseña?</p>
                    </a>
                    <div class="d-flex align-items-center justify-content-center">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
   
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