
@extends('layouts.app')

@section('title')
<div class="d-none">
    <div class="bg-primary p-3 d-flex align-items-center">
        <a class="toggle togglew toggle-2" href="#"><span></span></a>
        <h4 class="font-weight-bold m-0 text-white">Combos</h4>
    </div>
</div>
@endsection 
@section('content')
<body class="fixed-bottom-bar">
    <div class="offer-section my-4 py-4" style="background: linear-gradient(135deg, #d92662 0%, #e23744 100%);">
        <div class="container position-relative">
            <img alt="#" src="http://admindecoracionesgs.dreamhosters.com/{{$combo->ruta_imagen}}" class="restaurant-pic" style="width:150px; max-width:100%;height:150px;">
            <div class="pt-3 text-white">
                <h2 class=""><b>{{$combo->titulo}}</b></h2>
                <div class="rating-wrap d-flex align-items-center mt-2">
                    <ul class="rating-stars list-unstyled">
                        <li>
                            <i class="feather-star text-warning"  style="Color: white;"></i>
                            <i class="feather-star text-warning"></i>
                            <i class="feather-star text-warning"></i>
                            <i class="feather-star text-warning"></i>
                            <i class="feather-star text-warning"></i>
                        </li>
                    </ul>
                    <p class="label-rating text-white ml-2 small"><b></b></p>
                </div>
                <p class="text-white m-1"><h5>L. {{$combo->precio}}</h5></p>
                
            </div>
            <div class="pb-4">
                <div class="row">
                    <div class="col-6 col-md-2">
                        <p class="text-white font-weight-bold m-0 small">Encargo y Envio</p>
                        <p class="text-white m-0">2 días hábiles </p>
                    </div>
                    <div class="col-6 col-md-2">
                        <p class="text-white font-weight-bold m-0 small">Disponible</p>
                        <p class="text-white m-0">24hrs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="p-3  mt-n3 rounded position-relative text-white" style="background: #000000;">
            <div class="d-flex align-items-center">
                <div class="feather_icon">
                    <span><b> {{$combo->descripcion}}  </b></span>
                </div>
               
            </div>
        </div>
    </div>
 
    <!-- Menu -->
    <div class="container position-relative">
        <div class="row">
            <div class="col-md-8 pt-3">
                <div class="shadow-sm rounded bg-white mb-3 overflow-hidden">
                    <div class="d-flex item-aligns-center">
                        <p class="font-weight-bold h6 p-3 border-bottom mb-0 w-100 text-center" style="color: #e23744;">Contenido <br><small class="text-black-50">{{count($detalles)}} PRODUCTOS</small></p>
                        <!-- <a class="small text-primary font-weight-bold ml-auto" href="#">View all <i class="feather-chevrons-right"></i></a> -->
                    </div>
                   
                    <div class="row m-0">
                        <div class="col-md-12 px-0 border-top">
                            <div class="bg-white">
                                @foreach($detalles as $detalle)
                                <div class="p-3 border-bottom gold-members">
                                    <div class="media">
                                        <div class="mr-3 font-weight-bold text-danger non_veg">.</div>
                                        <div class="media-body">
                                            <h6 class="mb-1"  style="color: #e23744;">{{$detalle->producto->titulo}} </h6>
                                            <p class="text-muted mb-0">{{$detalle->cantidad}} und.</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                  
                </div>
                   
            </div>
            <div class="col-md-4 pt-3 pb-3">
                <div class="osahan-cart-item rounded rounded shadow-sm overflow-hidden bg-white sticky_sidebar">
                    <div class="bg-white p-3 clearfix border-bottom">
                        <p class="mb-1" style="color: #e23744;"><b>Precio<span class="float-right text-dark-50" style="color: black;">L. {{$combo->precio}}</b></span></p>
                    </div>
                    <div class="p-3">
                        <form method="POST" action="{{route('cart.store')}}">
                            @csrf
                         <input type="text" hidden class="form-control" id="id_item" name="id_item" value="{{$combo->id_item}}">
                        <button type="submit" class="btn btn-outline-primary-1 btn-block btn-lg"><i class="fas fa-shopping-cart"></i> Añadir al Carrito</button>
                   
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection 
