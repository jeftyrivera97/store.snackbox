@extends('layouts.app')
@section('title')
<div class="d-none">
    <div class="bg-primary border-bottom p-3 d-flex align-items-center">
        <a class="toggle togglew toggle-2" href="{{route('/')}}"><span></span></a>
        <h4 class="font-weight-bold m-0 text-white">Decoraciones GS</h4>
    </div>
</div>
@endsection 

@section('filters')
<div class="container-fluid">
<div class="cat-slider">
    @foreach($categorias as $categoria)
        <div class="cat-item px-1 py-3">
            <a class="rounded d-block p-2 text-center shadow-sm" style="border: 0.5px solid #e23744; background: linear-gradient(45deg, #d92662 0%, #e23744 100%) ;" href="{{route('item-select', $categoria->id_categoria)}}" >
                <img alt="#" src="{{$categoria->ruta_imagen}}" class="img-fluid mb-1 ">
                <p class="m-0" style="color: #ffffff;"><b>{{$categoria->descripcion}}</b></p>
            </a>
        </div>
        @endforeach
</div>
</div>
@endsection 


@section('content')
<div class="container">
    <div class="bg-white">
        <div class="container">
            <div class="offer-slider">
                @foreach($publicidades as $publicidad)
                <div class="cat-item px-1 py-3">
                    <a class="d-block text-center shadow-sm">
                        <img alt="{{$publicidad->descripcion}}" src="http://admindecoracionesgs.dreamhosters.com/{{$publicidad->ruta_imagen}}" class="img-fluid rounded" style="width:250px; max-width:100%;height:125px;">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Trending this week -->
    @if (count($combosTendencia) >= 1)
    <div class="pt-4 pb-2 title d-flex align-items-center">
        <h5 class="m-0 text-center" style="color: #e23744;"><Strong><b>Tendencias de Temporada</b></Strong></h5>
    </div>
    <!-- slider -->
    <div class="trending-slider">
       
        @foreach($combosTendencia as $tendencia)
        <div class="osahan-slider-item">
            <form method="POST" action="{{route('cart.store')}}">
                @csrf
            <div class="list-card h-100 rounded overflow-hidden position-relative shadow-sm" style="background: linear-gradient(135deg, #d92662 0%, #e23744 100%);">
                <div class="list-card-image">
                    <div class="star position-absolute"><span class="badge badge-warning text-white"><b><i class="feather-star"></i> 5</b></span></div>
                    <div class="favourite-heart text-danger position-absolute"><a href="#"><i class="feather-heart"></i></a></div>
                    <div class="member-plan position-absolute"><span class="badge text-white" style="background: linear-gradient(135deg, #d92662 0%, #e23744 100%);">{{$tendencia->combo->tag}}</span></div>
                    
                        <a href="{!!route('combos-select',$tendencia->combo->id_combo)!!}"><img alt="#" src="http://admindecoracionesgs.dreamhosters.com/{{$tendencia->combo->ruta_imagen}}" style="width:375px; max-width:100%;height:325px;"></a>
                  
                </div>
                <div class="p-3 position-relative">
                    <div class="list-card-body">
                        <h6 class="mb-1"><a href="{!!route('combos-select',$tendencia->combo->id_combo)!!}" style="color: white;"><b>{{$tendencia->combo->titulo}}</b></a></h6>
                        <input type="text" hidden class="form-control" id="id_item" name="id_item" value="{{$tendencia->combo->id_item}}">
                        <p class="mb-3" style="color: white;">{{$tendencia->combo->descripcion}}</p>
                        <p class="mb-3 time"><span class="rounded-sm pr-2" style="color: white;"><i class="feather-clock"></i><b> Encargar con 2 días previos</b></span> <span class="float-right" style="font-size: 1.5em; color: white;"><b>L. {{$tendencia->combo->precio}}</b></span></p>
                    </div>
                    <div class="list-card-badge">
                        <button type="submit" class="btn btn-outline-primary-1" style="background: #000000;"><i class="fas fa-shopping-cart"></i> Añadir al Carrito</button>
                    </div>
                </div>
            </div>
        </form>
        </div>
        @endforeach
       
    </div>
    @endif


    @if (count($combosPopulares) >= 1)
    <!-- Most popular -->
    <br><br>
    <div class="py-3 title d-flex align-items-center">
        <h5 class="m-0"  style="color: #e23744;"><Strong><b>Más Populares</b></Strong></h5>
    </div>
    <!-- Most popular -->
    <div class="most_popular">
        <div class="row">
            @foreach($combosPopulares as $popular)
            <div class="col-md-3 pb-3">
                <form method="POST" action="{{route('cart.store')}}">
                    @csrf
                <div class="list-card h-100 rounded overflow-hidden position-relative shadow-sm" style="background: linear-gradient(135deg, #d92662 0%, #e23744 100%);">
                    <div class="list-card-image">
                        <div class="star position-absolute"><span class="badge badge-warning text-white"><i class="feather-star"><b></i> 5</b></span></div>
                        <div class="favourite-heart text-danger position-absolute"><a href="#"><i class="feather-heart"></i></a></div>
                        <div class="member-plan position-absolute"><span class="badge text-white"  style="background: linear-gradient(135deg, #d92662 0%, #e23744 100%);">{{$popular->combo->tag}}</span></div>
                        <a href="{!!route('combos-select',$popular->combo->id_combo)!!}"><img alt="#" src="http://admindecoracionesgs.dreamhosters.com/{{$popular->combo->ruta_imagen}}" style="width:400px; max-width:100%;height:250px;" >
                    </div>
                    <div class="p-3 position-relative" >
                        <div class="list-card-body">
                            <h6 class="mb-1"><a href="{!!route('combos-select',$popular->combo->id_combo)!!}" style="color: white;"><b>{{$popular->combo->titulo}}</b>
                                <input type="text" hidden class="form-control" id="id_item" name="id_item" value="{{$popular->combo->id_item}}">
                         </a>
                            </h6>
                            <p class="mb-3" style="color: white;">{{$tendencia->combo->descripcion}}</p>
                        </div>
                        <div class="list-card-badge">
                        <p class="text-gray mb-3 time"><span class="rounded-sm pr-2" style="color: white;"><i class="feather-clock"></i><b> Encargar con 2 días previos</b></span> <span class="float-right" style="color: white;"><b>L. {{$popular->combo->precio}}</b></span></p>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-outline-primary-1" style="background: #000000;"><i class="fas fa-shopping-cart"></i> Añadir al Carrito</button>
                        <div>
                        </div>
                    </div>
                </div>
                <br>
            </form>
            </div>
            @endforeach
        </div>
    </div>
    @endif
    
</div>
    
@endsection 
