@extends('layouts.app')

@section('title')
<div class="d-none">
    <div class="bg-primary border-bottom p-3 d-flex align-items-center">
        <a class="toggle togglew toggle-2" href="#"><span></span></a>
        <h4 class="font-weight-bold m-0 text-white">Carrito de Compras</h4>
    </div>
</div>
@endsection 

@section('content')
<form action="{!!route('guardar-pedido')!!}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="container position-relative">
    @include('cart.modal')
    <div class="py-5 row">
     
        <div class="col-md-8 mb-3">
          <small>*Pedidos deben ser mayores a L. 200.00</small>
            <div>
                @if (Auth::check())
                <div class="card card-info" style="background: linear-gradient(135deg, #d92662 0%, #e23744 100%);">
                    <div class="card-header">
                      <h5 class="card-title text-white text-center mb-1"> Datos del Cliente</h5>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-4">
                              <label class="text-white">Nombre</label>
                              <input style="background: #ffc9d9;" type="text" class="form-control" required focus  id="nombre" value="{{$cliente->nombre}}"  name="nombre" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="text-white">Apellido</label>
                                <input style="background: #ffc9d9;" type="text" class="form-control" required focus id="apellido" value="{{$cliente->apellido}}"  name="apellido" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="text-white">Correo</label>
                                <input style="background: #ffc9d9;" type="email" class="form-control" required focus id="email" value="{{ Auth::user()->email }}"  name="email" readonly>
                               
                            </div>
                          </div>
                          <div class="row">
                            <div class="form-group col-md-6">
                                <label class="text-white">Numero de Identidad</label>
                                <input style="background: #ffc9d9;" type="text" class="form-control" required focus id="codigo_cliente" value="{{$cliente->codigo_cliente}}"  name="codigo_cliente" readonly>
                              </div>
                              <div class="form-group col-md-6">
                                <label class="text-white">Telefono</label>
                                <input style="background: #ffc9d9;" type="text" class="form-control" required focus  id="telefono" value="{{$cliente->telefono}}"  name="telefono" readonly>
                              </div>
                          </div>
                    </div>
                </div> 
                @else
                <div class="card card-info" style="background: linear-gradient(135deg, #d92662 0%, #e23744 100%);">
                    <div class="card-header">
                      <h5 class="card-title text-white text-center mb-1"> Datos del Cliente</h5>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-4">
                              <label class="text-white">Nombre</label>
                              <input type="text" class="form-control" required focus  id="nombre"  name="nombre" placeholder="Ingrese su Nombre" value="{{ old('nombre') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="text-white">Apellido</label>
                                <input type="text" class="form-control" required focus id="apellido"  name="apellido" placeholder="Ingrese su Apellido" value="{{ old('apellido') }}">
                              </div>
                              <div class="form-group col-md-4">
                                <label class="text-white">Correo</label>
                                <input type="email" class="form-control" required focus id="email"  name="email" placeholder="xx@ejemplo.com" value="{{ old('email') }}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror  
                            </div>

                          </div>
                          <div class="row">
                            <div class="form-group col-md-6">
                                <label class="text-white">Numero de Identidad</label>
                                <input type="number" class="form-control" required focus id="codigo_cliente"  name="codigo_cliente" placeholder="Ingrese su Identidad" value="{{ old('codigo_cliente') }}">
                                @error('codigo_cliente')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                              <div class="form-group col-md-6">
                                <label class="text-white">Telefono</label>
                                <input type="number" class="form-control" required focus  id="telefono"  name="telefono" placeholder="Ingrese su Telefono" value="{{ old('telefono') }}">
                                @error('telefono')
                                <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                            </div>
                          </div>
                    </div>
                </div> 
                @endif
                <br>
                <div class="card card-info" style="background: linear-gradient(135deg, #d92662 0%, #e23744 100%);">
                    <div class="card-header">
                      <h5 class="card-title text-white text-center mb-1"> Datos de Entrega</h5>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                        <div class="row">
                          <div class="form-group col-md-4">
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

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="osahan-cart-item rounded rounded shadow-sm overflow-hidden sticky_sidebar" style="background: #000000;">
                <div class="d-flex border-bottom osahan-cart-item-profile p-3">
                    <div class="d-flex flex-column">
                        <h6 class="mb-1 font-weight-bold text-white">CARRITO DE COMPRAS</h6>
                    </div>
                </div>
                @if (!Cart::isEmpty())
                <table class="table" id="carrito">
                <thead>
                <tr>
                    <th sc ope="col" class="text-white">Opcion</th>
                    <th scope="col" class="text-white">Cantidad</th>
                    <th scope="col" class="text-white">Nombre</th>
                    <th scope="col" class="text-white">Precio</th>
                   
                </tr>
                </thead>
                <tbody>
                @foreach (Cart::getContent() as $item)
                <tr>
                    <th scope="row">
                            <a href="{{route('item-eliminar',$item->id)}}" class="btn btn-outline-danger btn-sm"><i class="fas fa-minus-circle"></i></a>                 
                            <a href="{{route('item-agregar',$item->id)}}" class="btn btn-outline-success btn-sm"><i class="fas fa-plus-circle"></i></a> 
                    </th>
                    <td class="text-white text-center">{{$item->quantity}}</td>
                    <td class="text-white text-center">{{$item->name}}</td>
                    <td class="text-white text-center">L. {{$item->price}}</td>
                    
                </tr>
                @endforeach
                </tbody>
                </table>
                @endif
             
                <div class=" p-3 clearfix border-bottom text-white">
                    <p class="mb-1 text-white">Total Articulos({{Cart::getTotalQuantity()}}) <span class="float-right text-white">L. {{Cart::getSubTotal()}}</span></p>
                    <p class="mb-1 text-white">Envio<span class="text-info ml-1"><i class="feather-info"></i></span><span class="float-right text-white">L. 50</span></p>
                    <p class="mb-1 text-white">Descuento <span class="float-right text-white">L. -{{Cart::getTotalDiscount()}}</span></p>
                    <hr>
                    <h6 class="font-weight-bold mb-0">TOTAL A PAGAR <span class="float-right">L. {{Cart::getTotal()+50}}</span></h6>
                    <input type="number" id="total_pedido" name="total_pedido" hidden value="{{Cart::getTotal()+50}}">
                </div>
                <div class="p-3">
                    <button type="button" class="btn btn-outline-primary-1 btn-block btn-lg" disabled id="ordenar"  data-toggle="modal" data-target="#exampleModal">PROCESAR PEDIDO<i class="feather-arrow-right"></i></button> 
                </div>
            </div>
        </div>
    </div>
</div>
</form>
<script type="application/javascript" src="{{ asset('js/cart.js')}}"></script>
<script>
  var respuesta;
  $(document).ready(function() {

    $('#fecha_entrega').change(function() {
       
      $.ajax({
        url: "{{route ('verificarFecha')}}",
        method:'POST',
        data:{
          "_token": "{{ csrf_token() }}",
        }
        }).done(function(res){
         
         
          //alert(res);
        
        });

   });

    
   
   
});

function verificarFecha(){

  if(respuesta==1)
  {
    alert(respuesta);
  }
  if(respuesta<7)
  {
    alert(respuesta);
  }
}
</script>
@endsection 


