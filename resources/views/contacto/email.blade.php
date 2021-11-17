@extends('layouts.app')
@section('title')
<div class="d-none">
    <div class="bg-primary border-bottom p-3 d-flex align-items-center">
        <a class="toggle togglew toggle-2" href="{{route('/')}}"><span></span></a>
        <h4 class="font-weight-bold m-0 text-white">Decoraciones G.S</h4>
    </div>
</div>
@endsection 


@section('content')
<div class="osahan-trending">
    <!-- profile -->
    <div class="container">
        <div class="py-5 osahan-profile row">
            <div class="col-md-4 mb-3">
                <div class=" rounded shadow-sm sticky_sidebar overflow-hidden">
                    <!-- profile-details -->
                    <div class="profile-details" style="background: linear-gradient(135deg, #d92662 0%, #e23744 100%);">
                        <a href="https://api.whatsapp.com/send?phone=+50499971235&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Decoraciones G.S" target="blank" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-white"><i class="fab fa-whatsapp bg-success text-white p-2 rounded-circle mr-2"></i> Whatsapp</h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0 text-white"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="https://www.instagram.com/decoraciones_gs/" target="blank" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-white"><i class="fab fa-instagram bg-white text-dark p-2 rounded-circle mr-2"></i> Instagram</h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0 text-white"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="https://www.facebook.com/pages/category/Product-Service/Decoraciones-GS-100398268483424/" target="blank" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-white"><i class="fab fa-facebook-f bg-info text-white p-2 rounded-circle mr-2"></i> Facebook</h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0 text-white"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="{{route('terminos')}}" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-white"><i class="feather-info bg-white text-dark p-2 rounded-circle mr-2"></i> Terminos de Uso</h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0 text-white"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="{{route('politicas')}}" class="d-flex w-100 align-items-center px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-white"><i class="feather-lock bg-warning text-white p-2 rounded-circle mr-2"></i> Politicas de Privacidad</h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0 text-white"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-8 mb-3">

<form action="{{ route('send.email') }}" class="validate-form" method="post">
                                        @csrf
            <div class="card card-primary" style="background: #000000;">
                <div class="card-header">
                <h3 class="card-title text-white text-center" ><b><strong>Contáctanos</strong></b></h3>
                </div>
                </span>
                <!-- /.card-header -->
                <!-- form start -->
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <div class="form-group" data-validate = "El nombre es requerido" >
                                <label for="exampleFormControlInput1" class="font-weight-bold text-white">Nombre</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre" placeholder="Tu nombre...">
                                
                                            @error('nombre')
                                                <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group" data-validate = "El correo es requerido">
                                <label for="exampleFormControlInput2" class="font-weight-bold text-white">Correo Electronico</label>
                                <input type="email" class="form-control" id="exampleFormControlInput2" name="email" placeholder="ejemplo@ejemplo.com">
                                @error('email')
                                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        
                        </div>
                    </div>
                        <div class="form-group">
                            <div class="form-group" data-validate = "Un mensaje es necesario">
                                <label for="exampleFormControlTextarea1" class="font-weight-bold text-white">¿Cómo podemos ayudarte?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="contenido" placeholder="Tu duda, pregunta o reseña aqui ..." rows="3"></textarea>
                                @error('contenido')
                                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                    
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary text-white">
							<b>ENVIAR</b>
					</button>
                </div>
            </div>
            </div>
</form>
        </div>
</div>
@endsection