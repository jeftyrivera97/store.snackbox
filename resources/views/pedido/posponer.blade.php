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
<div id="app">
<div class="osahan-trending">
    <!-- profile -->
    <div class="container position-relative">
        <div class="py-5 osahan-profile row">
            <div class="col-md-4 mb-3">
                <div class="rounded shadow-sm sticky_sidebar overflow-hidden" style="background: linear-gradient(135deg, #d92662 0%, #e23744 100%);">
                    <a href="{!!url('cliente-index') !!}" class="">
                        <div class="d-flex align-items-center p-3">
                        <div class="left mr-5">
                                </div>
                                <div class="left mr-5">
                                </div>
                            <div>
                                <h6 class="mb-1 font-weight-bold text-center" style="color: white;">{{$cliente->nombre}} {{$cliente->apellido}} <i class="feather-check-circle"></i></h6>
                                <p class="text-muted m-0 small text-white" ><p style="color: white; font-size: 11px;">{{ Auth::user()->email }}</p></p>
                            </div>
                        </div>
                    </a>
                    <div class="osahan-credits d-flex align-items-center p-1" style="background: #f0f0f0;">
                    </div>
                    <!-- profile-details -->
                    <div class="profile-details">
                        <a href="{{route('leerNotificaciones')}}" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                                <div class="left mr-3">
                                    <h6 class="font-weight-bold m-0 text-white"><i class="fas fa-bell p-2 rounded-circle mr-2" style="color: #d92662; background: white;"></i>Notificaciones</h6>
                                </div>
                                <div class="right ml-auto">
                                    <h6 class="font-weight-bold m-0 text-white"><i class="feather-chevron-right"></i></h6>
                                </div>
                        </a>
                        <a href="{{route('cliente-pedido')}}" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-white"><i class="fas fa-boxes p-2 rounded-circle mr-2" style="color: #d92662; background: white;"></i> Mis Pedidos</h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0 text-white"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
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
                                <h6 class="font-weight-bold m-0 text-white"><i class="fab fa-instagram p-2 rounded-circle mr-2" style="color: #d92662; background: white;"></i> Instagram</h6>
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
                                <h6 class="font-weight-bold m-0 text-white"><i class="feather-info p-2 rounded-circle mr-2" style="color: #d92662; background: white;"></i> Terminos de Uso</h6>
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
                <div class="rounded shadow-sm p-4" style="background: #000000">
                    <h5 class="mb-4 text-white text-center">Nueva Fecha y Datos de Entrega</h5>
                    <div class="overflow-auto">
                    <div id="edit_profile">
                        <form action="{!!route('pedido-reingreso')!!}" method="POST">
                            @csrf
                        <div>
                            <div class="card card-info" style="background: linear-gradient(135deg, #d92662 0%, #e23744 100%);">
                                <div class="card-header">
                                  <h5 class="card-title text-white text-center mb-1"> Datos</h5>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <div class="card-body">
                                    <div class="row">
                                      <div class="form-group col-md-4">

                                        <input type="text" value="{{$pedido->id_pedido}}" hidden name="id_pedido" id="id_pedido" >
                                        <label class="text-white">Ciudad de Entrega</label>
                                        <select class="custom-select form-control" name="ciudad" id="ciudad"  required>
                                          <option value="">Seleccione..</option>
                                          @foreach($ciudades as $ciudad)
                                          <option value="{{$ciudad->id}}">{{$ciudad->ciudad}}, {{$ciudad->departamento}}</option>
                                          @endforeach
                                      </select>
                                      </div>
                                        <div class="form-group col-md-8">
                                          <label class="text-white">Direccion de Entrega</label>
                                          <input type="text" class="form-control" required focus value="{{ old('direccion_entrega') }}" id="direccion_entrega"  name="direccion_entrega" placeholder="Colonia / Calle / Casa /Comunidad" required focus>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="form-group col-md-12">
                                            <label class="text-white">Nombre de Persona a Entregar</label>
                                            <input type="text" class="form-control input-rounded" value="{{ old('destinatario') }}" required focus placeholder="Ingrese Nombre y Apellido" id="destinatario"  name="destinatario">
                                          </div>
                                      </div>
                                      <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="text-white">Fecha de Entrega (2 dias de anticipacion)</label>
                                            <input type="date" id="fecha_entrega" name="fecha_entrega" value="{{ old('fecha_entrega') }}" class="form-control input-rounded"  min='1899-01-01' max='2030-12-30' required focus>
                                          </div>
                                          
                                          <div class="form-group col-md-6">
                                            <label class="text-white">Hora de Entrega (Estimada)</label>
                                            <select class="custom-select form-control" name="hora_entrega" id="hora_entrega"  required>
                                              <option value="">Seleccione..</option>
                                              <option value="08:00:00">08:00 a.m.</option>
                                              <option value="08:30:00">08:30 a.m.</option>
                                              <option value="09:00:00">09:00 a.m.</option>
                                              <option value="18:30:00">06:30 p.m.</option>
                                              <option value="19:00:00">07:00 p.m.</option>
                                              <option value="19:30:00">07:30 p.m.</option>
                                              <option value="20:00:00">08:00 p.m.</option>
                                          </select>
                                            
                                          </div>
                                      </div>
                                      <div class="row">
                                        <div class="form-group col-md-12">
                                            <label class="text-white">Comentario Adicional (Opcional)</label>
                                            <textarea class="form-control" name="comentario" focus rows="4" id="comentario" value="{{ old('comentario') }}" placeholder="Indicaciones adicionales.."  ></textarea>
                                          </div>
                                      </div>
                                      <div class="p-3">
                                        <button type="submit" class="btn btn-success btn-block btn-lg"><i class="fas fa-calendar-week"></i> Aceptar</button> 
                                      </div>
            
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>  
@extends('cliente.script')

<script>
    var today = new Date();
var dd = today.getDate()+1;
var mm = today.getMonth()+1; 
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("fecha_entrega").setAttribute("min", today);
</script>
@endsection 
