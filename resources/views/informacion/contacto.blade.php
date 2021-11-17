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

    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card card-primary">
                <div class="card-header">
                <h5 class="card-title"> Contactanos</h5>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1" class="small font-weight-bold">Nombre y Apellido</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese su Nombre y Apellido">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput2" class="small font-weight-bold">Correo Electronico</label>
                                <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="ejemplo@ejemplo.com">
                            </div>
                        
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput3" class="small font-weight-bold">Telefono de Contacto</label>
                                <input type="number" class="form-control" id="exampleFormControlInput3" placeholder="Ingrese su numero de Telefono">
                            </div>
                        
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1" class="small font-weight-bold">¿Como podemos ayudarte?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Tu duda, pregunta o reseña aqui ..." rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="card-footer">
                    <a class="btn btn-primary " href="#">ENVIAR</a>
                </div>
            
            </div>
            </div>
        </div>
</div>


@endsection