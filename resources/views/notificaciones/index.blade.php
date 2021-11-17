@extends('layouts.app')
@section('title')
<div class="d-none">
    <div class="bg-primary border-bottom p-3 d-flex align-items-center">
        <a class="toggle togglew toggle-2" href="#"><span></span></a>
        <h4 class="font-weight-bold m-0 text-white">Decoraciones G.S</h4>
    </div>
</div>
@endsection 
@section('content')
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
                    <h5 class="mb-4 text-white text-center">Estas son tus notificaciones {{$cliente->nombre}}:</h5>
                    <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-12">
                  <div class="card">
                    
                    <div class="card-body" style="color: #d92662;">
                      @if (Auth::check())
                      @forelse ($pedidoNotificaciones as $notification)
                      <div class="alert alert-default-warning">
                          Tu pedido: <Strong> {{ $notification->data['pedido']  }} </Strong>
                          cambio su estado a: <strong> {{ $notification->data['estado']  }} </strong>
                          <br>
                        <p class="mr-2 float-right text-muted text-sm">{{ $notification->created_at->diffForHumans() }}</p>
                        <br>
                        <button type="submit" class="mark-as-read btn btn-sm text-white" style="background: linear-gradient(135deg, #d92662 0%, #e23744 100%);" data-id="{{ $notification->id }}">Ver</button>
                        
                      </div>
                      @if ($loop->last)
                        <a href="#" id="mark-all" style="color: #d92662;;">Marcar como leido</a>
                          
                      @endif        

                      @empty
                      No hay notificaciones nuevas              
                      @endforelse
                                  
                      @endif
                                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>        
@endsection


@section('scripts')
<script>
  function sendMarkRequest(id = null){
    return $.ajax("{{ route('markNotificationView') }}", {
      method: 'POST',
      data: {
        _token: "{{ csrf_token() }}",
        id
      }
    });
  }
  $(function(){
    $('.mark-as-read').click(function(){
      let request = sendMarkRequest($(this).data('id'));
      request.done(() => {
        $(this).parents('div.alert').remove();
        location.href ="{{ route('cliente-pedido') }}";
      });
    });
    $('#mark-all').click(function(){
      let request = sendMarkRequest();
      request.done(() => {
        $('div.alert').remove();
        location.reload();
      })
    });
  });
</script>
@endsection