<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Tienda de Snackbox Decoraciones GS">
    <meta name="author" content="Decoraciones GS">
    <link rel="icon" type="image/png" href="{{asset('img/logo_gs.png')}}">
    <title>Decoraciones GS</title>
    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/slick/slick.min.css')}}" />
    <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/slick/slick-theme.min.css')}}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Feather Icon-->
    <link href="{{asset('vendor/icons/feather.css')}}" rel="stylesheet" type="text/css">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet"> 
    <!--- <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet"> -->
    <!-- Sidebar CSS -->
    <link href="{{asset('vendor/sidebar/demo.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

      <!-- Bootstrap 4 -->
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <style>
        .float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}
.my-float{
	margin-top:16px;
}

a.nav-link:hover{
    Color: #ffffff;   
}
#Bell:hover{
     Color: #ffffff;
}
#Bell{
     Color: #ffffff;
}
    </style>
    
</head>
<body class="fixed-bottom-bar">
<header class="section-header">
<section class="header-main shadow-sm">
<div class="container">
                <div class="row align-items-center">
                    <div class="col-1">
                        <a href="{{url('/')}}">
                            <img alt="#" style=" height: 56px;" class="img-fluid" src="{{asset('img/logo_gs.png')}}">
                        </a>
                        <!-- brand-wrap.// -->
                    </div>
                    <div class="col-3 d-flex align-items-center m-none">
                        <a href="{{url('/')}}" style="color: white;"><h4><b>Decoraciones GS</b></h4></a>
                        
                    </div>
                    <!-- col.// -->
                    <div class="col-8 py-3">
                        <div class="d-flex align-items-center justify-content-end pr-5">
                            @if (Auth::check())
                            <a href="{!! url('descuento-index') !!}" class="widget-header mr-4 btn m-none" style="background: linear-gradient(45deg, #d92662 0%, #e23744 100%); Color: #ffffff;">
                                <div class="icon d-flex align-items-center">
                                    <i class="feather-disc h6 mr-2 mb-0"></i> <span><b>Descuentos</b></span>
                                </div>
                            </a>
                            @endif
                            @if (Auth::check())
                            <div class="dropdown mr-4 m-none">
                                <a href="#" class="dropdown-toggle text-white d-block" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img alt="#" src="{{asset('img/user.png')}}" class="img-fluid rounded-circle header-user mr-2 header-user"><b>Hola, {{ Auth::user()->name }}</b>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{!!url('cliente-index') !!}"><i class="fas fa-home mr-2 mb-0" style="color: #e23744;"></i><b>Mi Cuenta</b></a>
                                    <a class="dropdown-item" href="{{ route('cliente-pedido') }}"><i class="fas fa-boxes mr-2 mb-0" style="color: #e23744;"></i><b>Mis Pedidos</b></a>
                                    <a class="dropdown-item"  href="{{ route('logout') }}" onclick="event.preventDefault(); 
                                    document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt mr-2 mb-0" style="color: #e23744;"></i><b>Cerrar Sesión</b></a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                            <div class="dropdown mr-4 m-none">
                                <a class="nav-link gradient-text" data-toggle="dropdown" href="#">
                                    <i id="Bell" class="fas fa-bell fa-lg"></i>
                                        @if(count(Auth::user()->unreadNotifications))
                                        <span class="badge badge-warning">
                                        {{ count(Auth::user()->unreadNotifications) }}
                                        </span>
                                        @endif
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                @forelse(Auth::user()->unreadNotifications as $notification)
                                <a href="{{route('leerNotificaciones')}}" class="dropdown-item">
                                <!--Notificaciones sin leer -->
                                    <i class="fas fa-shopping-basket mr-2"></i> Tu pedido: <Strong> {{ $notification->data['pedido']  }} </Strong>
                                    <br>cambio su estado a: <strong> {{ $notification->data['estado']  }} </strong>
                                    <span class="ml-3 pull-right text-muted text-sm">{{ $notification->created_at->diffForHumans()  }}</span>
                                </a>
                                <br>
                                <div class="dropdown-divider"></div>                                
                                @empty
                                <span class="mr-2 pull-right text-muted text-sm"><strong>No hay notificaciones nuevas</strong></span>
                                @endforelse
                                <a href="{{ route('markAsRead') }}" class="dropdown-item dropdown-footer" style="Color: #d92662;"><b>Marcar todas como leidas</b></a>
                                </div>
                            </div>             
                            @else

                            <a href="{{ route('login')}}" class="widget-header mr-4 text-white m-none">
                                <div class="icon d-flex align-items-center">
                                    <i class="feather-user h6 mr-2 mb-0" style="color: white;"></i> <span><b>Iniciar Sesion</b></span>
                                </div>
                            </a>
                            @endif
                            <a href="{!! url('cart') !!}" class="widget-header mr-4 text-white">
                                <div class="icon d-flex align-items-center">
                                    <i class="feather-shopping-cart h6 mr-2 mb-0" style="color:white;"></i> <span><b>Carrito ({{Cart::getTotalQuantity()}})</b></span>
                                </div>
                            </a>
                            <div class="dropdown mr-4 m-none">
                                <a href="#" class="dropdown-toggle text-white  d-block" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                <i class="fas fa-list-alt h6 mr-2 mb-0" style="color: white;"></i> <span><b>Menú </b></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route('/email') }}"><i class="fas fa-envelope-open-text mr-2 mb-0" style="color: #e23744;"></i><b>Contáctanos</b></a>
                                    <a class="dropdown-item" href="{{route('terminos')}}"><i class="fas fa-book mr-2 mb-0" style="color: #e23744;"></i><b>Terminos de Uso</b></a>
                                    <a class="dropdown-item" href="{{route('politicas')}}"><i class="fas fa-poll-h mr-2 mb-0" style="color: #e23744;"></i><b>Politicas de Privacidad</b></a>
                                    <a class="dropdown-item" href="{{route('envios')}}"><i class="fas fa-question-circle mr-2 mb-0" style="color: #e23744;"></i><b>Preguntas Frecuentes</b></a>
                                </div>
                            </div>
                        </div>
                        <!-- widgets-wrap.// -->
                    </div>
                    <!-- col.// -->
                </div>
                <!-- row.// -->
            </div>
            <!-- container.// -->
        </section>
        <!-- header-main .// -->
    </header>
    
    <div class="osahan-home-page">
        <section class="title">
            @yield('title') <!-- /.content -->
        </section>
        
      
        <!-- Filters -->
        <div class="container-fluid">
            <section class="content">
                @yield('filters') <!-- /.content -->
              </section>
        </div>
        
        <div class="container-fluid">
            <section class="content">
                @yield('header') <!-- /.content -->
              </section>
        </div>

        <div class="container-fluid">
            <section class="content">
                @yield('progress')
              </section>
        </div>

        <div class="container-fluid">
            @if(session()->has('message'))
                <div class="alert {{session('alert') ?? 'alert-info'}}">
                  {{ session('message') }}
                </div>
            @endif
         
            <section class="content">
                @yield('content')
                
              </section>
        </div>
        </div>  
      
    
    <!-- Footer -->
    <div class="osahan-menu-fotter fixed-bottom bg-white px-3 py-2 text-center d-none">
        <div class="row">
            <div class="col selected">
                <a href="{{route('/')}}" class="text-danger small font-weight-bold text-decoration-none">
                    <p class="h4 m-0"><i class="feather-home text-danger"></i></p>
                    <b>Inicio</b>
                </a>
            </div>
            
            <div class="col">
            
                <a href="https://api.whatsapp.com/send?phone=+50499971235&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Decoraciones G.S" target="blank" class="text-dark small font-weight-bold text-decoration-none">
                    <p class="h4 m-0"><i class="fab fa-whatsapp text-danger"></i></p>
                    Contacto</a>
              
                <a href="{{ route('terminos') }}" class="text-danger small font-weight-bold text-decoration-none">
                    <p class="h4 m-0"><i class="feather-info text-danger"></i></p>
                    Acerca
                </a>
            </div>

            <div class="col bg-white rounded-circle mt-n4 px-3 py-2">
                <div class="bg-danger rounded-circle mt-n0 shadow">
                    <a href="{!! url('cart') !!}" class="text-white small font-weight-bold text-decoration-none">
                        <sup>{{Cart::getTotalQuantity()}}</sup><i class="feather-shopping-cart"></i>
                    </a>
                </div>
            </div>
           
            <div class="col">
                @if (Auth::check())
                <a href="{{ route('cliente-index') }}" class="text-danger small font-weight-bold text-decoration-none">
                    <p class="h4 m-0"><i class="feather-user text-danger text-danger"></i></p>
                    Cuenta  </a>
                @else
                <a href="{{ route('terminos') }}" class="text-danger small font-weight-bold text-decoration-none">
                    <p class="h4 m-0"><i class="feather-info text-danger"></i></p>
                    Acerca
                </a>
            
                @endif
            </div>
            
           
            <div class="col">
                
                @if (Auth::check())
                <a href="{{route('leerNotificaciones')}}" class="text-danger small font-weight-bold text-decoration-none">
                <p class="h4 m-0"><i class="far fa-bell text-danger">
                            @if(count(Auth::user()->unreadNotifications))
                                <span class="badge badge-warning">
                                {{ count(Auth::user()->unreadNotifications) }}
                                </span>
                            @endif</i></p>Aviso
                        
                    </a>
                @else
                <a href="{{ route('login') }}" class="text-dark small font-weight-bold text-decoration-none">
                    <p class="h4 m-0"><i class="feather-user text-danger"></i></p>
                    Ingresar</a>

                @endif
            
            </div>
        </div>
    </div>
    
    <!-- footer -->
    <footer class="section-footer border-top bg-dark">
        <div class="container">
            <section class="footer-top padding-y py-5">
                <div class="row">
                    <aside class="col-md-6 footer-about">
                        <article class="d-flex pb-3">
                            <div><img alt="#" src="{{asset('img/logo_gs.png')}}" class="logo-footer mr-2"></div>
                            <div>
                                <h6 class="title text-white">Acerca de Nosotros</h6>
                                <p class="text-muted">Decoraciones G.S. es una empresa 100% ceibeña especializada en dar alegrías a nuestros clientes por medio de nuestros snakbox.</p>
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-icon btn-outline-light mr-1 btn-sm" title="Facebook" target="_blank" href="https://www.facebook.com/pages/category/Product-Service/Decoraciones-GS-100398268483424/"><i class="feather-facebook"></i></a>
                                    <a class="btn btn-icon btn-outline-light mr-1 btn-sm" title="Instagram" target="_blank" href="https://www.instagram.com/decoraciones_gs/"><i class="feather-instagram"></i></a>
                                   
                                </div>
                            </div>
                        </article>
                    </aside>
                    <aside class="col-sm-3 col-md-1 text-white">
                    </aside>
                    <aside class="col-sm-3 col-md-3 text-white">
                        <h6 class="title">Información de Interés</h6>
                        <ul class="list-unstyled hov_footer">
                            
                            <li> <a href="{{ route('/email') }}" class="text-muted">• Contáctanos</a></li>
                            <li> <a href="{{ route('terminos') }}" class="text-muted">• Terminos de Uso</a></li>
                            <li> <a href="{{ route('politicas') }}" class="text-muted">• Politicas de Privacidad</a></li>
                            <li> <a href="{{ route('envios') }}" class="text-muted">• Preguntas Frecuentes</a></li>
                        </ul>
                    </aside>
                    <aside class="col-sm-3  col-md-2 text-white">
                        <h6 class="title">Acceso de Usuarios</h6>
                        <ul class="list-unstyled hov_footer">
                            @if (Auth::check())
                            <li> <a href="{{ route('cliente-index') }}" class="text-muted">• {{ Auth::user()->name }} </a></li>
                            <li> <a href="{{ route('cliente-index') }}" class="text-muted">• Configuracion de Cuenta </a></li>
                            @else
                            <li> <a href="{{ route('login') }}" class="text-muted">• Iniciar Sesion </a></li>
                            <li> <a href="{{ route('password.request')}}" class="text-muted">• ¿Olvidaste tu contraseña? </a></li>
                            @endif
                            
                        </ul>
                    </aside>
                </div>
                <!-- row.// -->
                <p class="text-muted mb-0 ml-auto d-flex align-items-center">
                    <a href="https://api.whatsapp.com/send?phone=+50499971235&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Decoraciones G.S" class="float" target="_blank">
                        <i class="fa fa-whatsapp my-float"></i>
                    </a>
                </p>
                <div class="container d-flex align-items-center">
                    <br>
                <p> © 2021 Derechos Reservados </p>
            </div>
            </section>
            <!-- footer-top.// -->
         
        </div>
        
    </footer>
    <nav id="main-nav" style="background: linear-gradient(45deg, #d92662 0%, #e23744 100%) !important;">
        <ul class="second-nav">
            <li><a href="{{route('/')}}"><i class="feather-home mr-2"></i> Pagina Principal</a></li>
            @if (Auth::check())
            <li>
                <a href="#"><i class="feather-edit-2 mr-2"></i> Cuenta</a>
                <ul>
                    <li><a href="{{ route('cliente-pedido') }}"><i class="feather-list mr-2"></i> Mis Pedidos</a></li>
                    <li><a href="{!!url('cliente-index') !!}"><i class="feather-user mr-2"></i> Mi Cuenta</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); 
                        document.getElementById('logout-form').submit();"><form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form><i class="feather-log-out mr-2"></i> Cerrar Sesion</a></li>     
                </ul>
                <li><a href="{{ route('/email')}}"><i class="feather-mail mr-2"></i>Contactanos</a></li>
                <li><a href="{{ route('politicas')}}"><i class="feather-file-text mr-2"></i>Politicas</a></li>
                <li><a href="{{ route('terminos')}}"><i class="feather-alert-octagon mr-2"></i>Terminos</a></li>
                <li><a href="{{ route('envios')}}"><i class="fas fa-question-circle mr-2"></i>Preguntas Frecuentes</a></li>
              
            </li>
             @else
            <li>
                <a href="#"><i class="feather-edit-2 mr-2"></i> Usuarios</a>
                <ul>
                    <li><a href="{{ route('login')}}">Iniciar Sesion</a></li>
                    <li><a href="{{ route('password.request')}}">¿Olvidaste tu contraseña?</a></li>
                </ul>
                <li><a href="{{ route('/email')}}"><i class="feather-mail mr-2"></i>Contactanos</a></li>
                <li><a href="{{ route('politicas')}}"><i class="feather-file-text mr-2"></i>Politicas</a></li>
                <li><a href="{{ route('terminos')}}"><i class="feather-alert-octagon mr-2"></i>Terminos</a></li>
                <li><a href="{{ route('envios')}}"><i class="fas fa-question-circle mr-2"></i>Preguntas Frecuentes</a></li>
             
            </li>
             @endif
        </ul>
        
    </nav>
    
    <script type="application/javascript" src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script type="application/javascript" src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- slick Slider JS-->
    <script type="application/javascript" src="{{asset('vendor/slick/slick.min.js')}}"></script>
    <!-- Sidebar JS-->
    <script type="application/javascript" src="{{asset('vendor/sidebar/hc-offcanvas-nav.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script type="application/javascript" src="{{asset('js/osahan.js')}}"></script>
    <!-- Scripts -->
    <!-- ./Necesario para notificaciones -->
    @yield('scripts')
</div>
</body>
</html>
